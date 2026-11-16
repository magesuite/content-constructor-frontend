<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service;

class MediaResolver
{
    public const int CACHE_LIFETIME = 86400;

    protected const string CACHE_KEY_HASH_ALGORITHM = 'sha256';
    protected const array URL_PARTS_OUTSIDE_PATH_PATTERNS = ['#^https?://[^/?\#]*#i', '#[?\#].*$#s'];

    public function __construct(
        protected \Magento\Store\Model\StoreManagerInterface $storeManager,
        protected \Magento\Framework\App\Filesystem\DirectoryList $directoryList,
        protected \Magento\Framework\App\CacheInterface $cache,
        protected \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        protected \MageSuite\Media\Service\Thumbnail\Generator $generator,
        protected \Magento\Framework\Filesystem\Driver\File $fileDriver,
        protected \Magento\Framework\Filesystem\Io\File $ioFile
    ) {
    }

    public function resolve(string $mediaPath): string
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $url = $this->parseMediaUrl($mediaPath);

        return $this->getUrl($url);
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
            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets'], self::CACHE_LIFETIME);
        }

        return $srcSet;
    }

    public function resolveSrcSetArray(string $mediaPath): string|array|null
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = $this->getCacheIdentifier('src_set_array', $originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if ($srcSet == null) {
            $srcSet = json_encode($this->buildSrcSetArray($originalImageUrl));

            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets'], self::CACHE_LIFETIME);
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
            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets'], self::CACHE_LIFETIME);
        }

        return $srcSet;
    }

    protected function getCacheIdentifier(string $prefix, string $originalImageUrl): string
    {
        return sprintf(
            '%s_%s_%s',
            $this->storeManager->getStore()->getId(),
            $prefix,
            hash(self::CACHE_KEY_HASH_ALGORITHM, $originalImageUrl)
        );
    }

    public function resolveInArray(mixed $array): mixed
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
            return str_replace('/media/', '', (string) preg_replace(self::URL_PARTS_OUTSIDE_PATH_PATTERNS, '', $mediaPath));
        }

        preg_match_all('/url="(?<url>.*?)"/si', $mediaPath, $results, PREG_PATTERN_ORDER);

        return $results['url'][0] ?? $mediaPath;
    }

    public function buildSrcSetArray(string $originalImageUrl): array
    {
        $originalImagePath = $this->getMediaDirectoryPath() . $originalImageUrl;

        if (!$this->imageFileExist($originalImagePath) || $this->isGif($originalImagePath)) {
            return [];
        }

        $imageSize = $this->readImageSize($originalImagePath);

        if ($imageSize === null) {
            return [];
        }

        $originalImageWidth = $imageSize[0];
        $resizedImageUrls = $this->buildResizedImageUrls($originalImagePath, $originalImageWidth, \MageSuite\Media\Service\Thumbnail\Generator::WIDTHS_DEFAULT);

        return [$originalImageWidth => $this->getUrl($originalImageUrl)] + $resizedImageUrls;
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

        $imageSize = $this->readImageSize($originalImagePath);

        if ($imageSize === null) {
            return null;
        }

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

        if (!$this->imageFileExist($originalImagePath) || $this->isGif($originalImagePath)) {
            return '';
        }

        $imageSize = $this->readImageSize($originalImagePath);

        if ($imageSize === null) {
            return '';
        }

        $srcSet = array_values($this->buildResizedImageUrls($originalImagePath, $imageSize[0], \MageSuite\Media\Service\Thumbnail\Generator::WIDTHS_CATEGORY));

        if (count($srcSet) !== 2) {
            return '';
        }

        return vsprintf('%s, %s 2x', $srcSet);
    }

    protected function buildResizedImageUrls(string $originalImagePath, int $originalImageWidth, array $widths): array
    {
        $thumbsDirectory = sprintf('%s/.thumbs', $this->fileDriver->getParentDirectory($originalImagePath));
        $originalImageName = $this->ioFile->getPathInfo($originalImagePath)['basename'] ?? '';
        $resizedImageUrls = [];

        foreach (array_filter($widths, static fn (int $width): bool => $width < $originalImageWidth) as $resizedImageWidth) {
            $resizedFilePath = sprintf('%s/%d/%s', $thumbsDirectory, $resizedImageWidth, $originalImageName);

            if (!$this->fileDriver->isExists($resizedFilePath)) {
                $this->generator->generateThumbnails($originalImagePath, null, [$resizedImageWidth]);
            }

            $resizedImageUrls[$resizedImageWidth] = $this->getUrlByPath($resizedFilePath);
        }

        return $resizedImageUrls;
    }

    protected function readImageSize(string $imagePath): ?array
    {
        return getimagesize($imagePath) ?: null; // phpcs:ignore Magento2.Functions.DiscouragedFunction -- reads only the image header
    }

    protected function imageFileExist(string $originalImagePath): bool
    {
        return $this->fileDriver->isFile($originalImagePath);
    }

    protected function isGif(string $originalImagePath): bool
    {
        return ($this->ioFile->getPathInfo($originalImagePath)['extension'] ?? '') === 'gif';
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

    protected function buildSrcSetElement(string $url, int|string $width): string
    {
        return sprintf('%s %sw', $url, $width);
    }

    protected function isDirectUrl(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}
