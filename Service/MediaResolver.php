<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service;

class MediaResolver
{
    protected \Magento\Cms\Model\Template\FilterProvider $filterProvider;
    protected \Magento\Store\Model\StoreManagerInterface $storeManager;
    protected \Magento\Framework\App\Filesystem\DirectoryList $directoryList;
    protected \Magento\Framework\App\CacheInterface $cache;
    protected \MageSuite\Media\Service\Thumbnail\Generator $generator;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Filesystem\DirectoryList $directoryList,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \MageSuite\Media\Service\Thumbnail\Generator $generator
    ) {
        $this->storeManager = $storeManager;
        $this->directoryList = $directoryList;
        $this->cache = $cache;
        $this->filterProvider = $filterProvider;
        $this->generator = $generator;
    }

    public function resolve(string $mediaPath): string
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $url = $this->parseMediaUrl($mediaPath);

        return $this->getUrl($url);
    }

    public function resolveWebpSrcSet(string $originalSrcSet): string
    {
        $elements = explode(',', $originalSrcSet);

        $withWebp = [];
        foreach ($elements as $element) {
            $element = trim($element);

            $parts = explode(' ', $element);
            $url = $parts[0];
            $modifier = isset($parts[1]) ? ' '.$parts[1] : null;

            $withWebp[] = sprintf('%s.webp%s', $url, $modifier);
        }

        return implode(', ', $withWebp);
    }

    public function resolveSrcSet(string $mediaPath): string
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = $this->getCacheIdentifier('src_set', $originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if (empty($srcSet)) {
            $srcSet = $this->buildSrcSet($originalImageUrl);
            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return $srcSet;
    }

    public function resolveSrcSetArray(string $mediaPath)
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = $this->getCacheIdentifier('src_set_array', $originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if ($srcSet == null) {
            $srcSet = json_encode($this->buildSrcSetArray($originalImageUrl));

            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return json_decode($srcSet, true);
    }

    public function resolveSrcSetByDensity(string $mediaPath): string
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = $this->getCacheIdentifier('src_set_density', $originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if (empty($srcSet)) {
            $srcSet = $this->buildSrcSetByDensity($originalImageUrl);
            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return $srcSet;
    }

    protected function getCacheIdentifier($prefix, $originalImageUrl): string
    {
        $storeId = $this->storeManager->getStore()->getId();
        return $storeId . '_' . $prefix . '_' . md5($originalImageUrl);
    }

    /**
     * Returns images paths from strings in array
     * @param $array
     * @return mixed
     * @throws \Exception
     */
    public function resolveInArray($array)
    {
        if (!is_array($array)) {
            return $array;
        }

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = $this->resolveInArray($value);
                continue;
            }

            $array[$key] = $this->filterProvider->getPageFilter()->filter($array[$key]);
        }

        return $array;
    }

    protected function parseMediaUrl(string $mediaPath): string
    {
        if (preg_match('/\bhttps?:\/\//i', $mediaPath)) {
            $path = parse_url($mediaPath, PHP_URL_PATH);
            return str_replace('/media/', '', $path);
        } else {
            preg_match_all('/url="(?<url>.*?)"/si', $mediaPath, $results, PREG_PATTERN_ORDER);
        }

        if (!isset($results['url'][0])) {
            return $mediaPath;
        }

        return $results['url'][0];
    }

    public function buildSrcSetArray(string $originalImageUrl): array
    {
        $originalImagePath = $this->getMediaDirectoryPath() . $originalImageUrl;
        $originalImageName = pathinfo($originalImagePath, PATHINFO_BASENAME);
        $originalImageDirectory = dirname($originalImagePath);

        if (!$this->imageFileExist($originalImagePath) || $this->isGif($originalImagePath)) {
            return [];
        }

        list($originalImageWidth) = getimagesize($originalImagePath);

        $srcSet[$originalImageWidth] = $this->getUrl($originalImageUrl);

        $thumbsDirectory = $originalImageDirectory . '/.thumbs';

        foreach (\MageSuite\Media\Service\Thumbnail\Generator::WIDTHS_DEFAULT as $resizedImageWidth) {
            if ($resizedImageWidth >= $originalImageWidth) {
                continue;
            }

            $resizedFilePath = $thumbsDirectory . '/' . $resizedImageWidth . '/' . $originalImageName;

            if (!file_exists($resizedFilePath)) {
                $this->generator->generateThumbnails($originalImagePath, null, [$resizedImageWidth]);
            }

            $srcSet[$resizedImageWidth] = $this->getUrlByPath($resizedFilePath);
        }

        return $srcSet;
    }

    public function resolveOriginalImageSize(string $mediaPath): ?array
    {
        if ($this->isDirectUrl($mediaPath)) {
            return null;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $originalImagePath = $this->getMediaDirectoryPath() . $originalImageUrl;

        if (!$this->imageFileExist($originalImagePath) || $this->isGif($originalImagePath)) {
            return null;
        }

        $imageSize = getimagesize($originalImagePath);

        return [
            'width' => $imageSize[0],
            'height' => $imageSize[1]
        ];
    }

    public function buildSrcSet(string $originalImageUrl): string
    {
        $srcSetArray = $this->buildSrcSetArray($originalImageUrl);

        if (empty($srcSetArray)) {
            return '';
        }

        $srcSet = [];

        foreach ($srcSetArray as $width => $url) {
            $srcSet[] = $this->buildSrcSetElement($url, $width);
        }

        return implode(', ', $srcSet);
    }

    protected function buildSrcSetByDensity(string $originalImageUrl): string
    {
        $originalImagePath = $this->getMediaDirectoryPath() . $originalImageUrl;
        $originalImageName = pathinfo($originalImagePath, PATHINFO_BASENAME);
        $originalImageDirectory = dirname($originalImagePath);

        if (!$this->imageFileExist($originalImagePath) || $this->isGif($originalImagePath)) {
            return '';
        }

        list($originalImageWidth) = getimagesize($originalImagePath);

        $thumbsDirectory = $originalImageDirectory . '/.thumbs';
        $srcSet = [];

        foreach (\MageSuite\Media\Service\Thumbnail\Generator::WIDTHS_CATEGORY as $resizedImageWidth) {
            if ($resizedImageWidth >= $originalImageWidth) {
                continue;
            }

            $resizedFilePath = $thumbsDirectory . '/' . $resizedImageWidth . '/' . $originalImageName;

            if (!file_exists($resizedFilePath)) {
                $this->generator->generateThumbnails($originalImagePath, null, [$resizedImageWidth]);
            }

            $srcSet[] = $this->getUrlByPath($resizedFilePath);
        }

        if (count($srcSet) != 2) {
            return '';
        }

        return vsprintf('%s, %s 2x', $srcSet);
    }

    protected function imageFileExist(string $originalImagePath): bool
    {
        return file_exists($originalImagePath) && is_file($originalImagePath);
    }

    protected function isGif(string $originalImagePath): bool
    {
        return pathinfo($originalImagePath)['extension'] === 'gif';
    }

    protected function getUrl(string $url): string
    {
        return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . $url;
    }

    protected function getMediaDirectoryPath(): string
    {
        return $this->directoryList->getPath(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA) . '/';
    }

    protected function getUrlByPath(string $imagePath): string
    {
        $url = str_replace($this->getMediaDirectoryPath(), '', $imagePath);

        return $this->getUrl($url);
    }

    protected function buildSrcSetElement(string $url, $width): string
    {
        return sprintf('%s %sw', $url, $width);
    }

    protected function isDirectUrl(string $url)
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }
}
