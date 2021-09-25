<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class MediaResolver
{
    /**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
    protected $filterProvider;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var \Magento\Framework\App\Filesystem\DirectoryList
     */
    protected $directoryList;

    /**
     * @var \Magento\Framework\App\CacheInterface
     */
    protected $cache;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Filesystem\DirectoryList $directoryList,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider
    ) {
        $this->storeManager = $storeManager;
        $this->directoryList = $directoryList;
        $this->cache = $cache;
        $this->filterProvider = $filterProvider;
    }

    public function resolve($mediaPath)
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $url = $this->parseMediaUrl($mediaPath);

        return $this->getUrl($url);
    }

    public function resolveWebpSrcSet($originalSrcSet)
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

    public function resolveSrcSet($mediaPath)
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = 'src_set_' . md5($originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if ($srcSet == null) {
            $srcSet = $this->buildSrcSet($originalImageUrl);

            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return $srcSet;
    }

    public function resolveSrcSetArray($mediaPath)
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = 'src_set_array' . md5($originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if ($srcSet == null) {
            $srcSet = json_encode($this->buildSrcSetArray($originalImageUrl));

            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return json_decode($srcSet, true);
    }

    public function resolveSrcSetByDensity($mediaPath)
    {
        if ($this->isDirectUrl($mediaPath)) {
            return $mediaPath;
        }

        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = 'src_set_density_' . md5($originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if ($srcSet == null) {
            $srcSet = $this->buildSrcSetByDensity($originalImageUrl);

            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return $srcSet;
    }

    /**
     * Returns images paths from strings in array
     * @param $array
     * @return mixed
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

    protected function parseMediaUrl($mediaPath)
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

    public function buildSrcSetArray($originalImageUrl)
    {
        $originalImagePath = $this->getMediaDirectoryPath() . $originalImageUrl;
        $originalImageName = pathinfo($originalImagePath, PATHINFO_BASENAME);
        $originalImageDirectory = dirname($originalImagePath);

        if (!$this->imageFileExist($originalImagePath) or $this->isGif($originalImagePath)) {
            return [];
        }

        list($originalImageWidth) = getimagesize($originalImagePath);

        $srcSet[$originalImageWidth] = $this->getUrl($originalImageUrl);

        $thumbsDirectory = $originalImageDirectory . '/.thumbs';

        foreach (\MageSuite\Frontend\Service\Image\Resizer::WIDTHS_DEFAULT as $resizedImageWidth) {
            if ($resizedImageWidth >= $originalImageWidth) {
                continue;
            }

            $resizedFilePath = $thumbsDirectory . '/' . $resizedImageWidth . '/' . $originalImageName;

            if (!file_exists($resizedFilePath)) {
                continue;
            }

            $srcSet[$resizedImageWidth] = $this->getUrlByPath($resizedFilePath);
        }

        return $srcSet;
    }

    /**
     * @param $originalImageUrl
     * @return string
     */
    public function buildSrcSet($originalImageUrl)
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

    /**
     * @param $originalImageUrl
     * @return string
     */
    protected function buildSrcSetByDensity($originalImageUrl)
    {
        $originalImagePath = $this->getMediaDirectoryPath() . $originalImageUrl;
        $originalImageName = pathinfo($originalImagePath, PATHINFO_BASENAME);
        $originalImageDirectory = dirname($originalImagePath);

        if (!$this->imageFileExist($originalImagePath) or $this->isGif($originalImagePath)) {
            return '';
        }

        list($originalImageWidth) = getimagesize($originalImagePath);

        $thumbsDirectory = $originalImageDirectory . '/.thumbs';
        $srcSet = [];

        foreach (\MageSuite\Frontend\Service\Image\Resizer::WIDTHS_CATEGORY as $resizedImageWidth) {
            if ($resizedImageWidth >= $originalImageWidth) {
                continue;
            }

            $resizedFilePath = $thumbsDirectory . '/' . $resizedImageWidth . '/' . $originalImageName;

            if (!file_exists($resizedFilePath)) {
                continue;
            }

            $srcSet[] = $this->getUrlByPath($resizedFilePath);
        }

        if (count($srcSet) != 2) {
            return '';
        }

        return vsprintf('%s, %s 2x', $srcSet);
    }

    protected function imageFileExist($originalImagePath)
    {
        if (!file_exists($originalImagePath) or !is_file($originalImagePath)) {
            return false;
        }

        return true;
    }

    protected function isGif($originalImagePath)
    {
        $pathParts = pathinfo($originalImagePath);

        return $pathParts['extension'] === 'gif';
    }

    protected function getUrl($url)
    {
        return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . $url;
    }

    /**
     * @return string
     */
    protected function getMediaDirectoryPath()
    {
        return $this->directoryList->getPath(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA) . '/';
    }

    /**
     * @return mixed
     */
    protected function getUrlByPath($imagePath)
    {
        $url = str_replace($this->getMediaDirectoryPath(), '', $imagePath);

        return $this->getUrl($url);
    }

    protected function buildSrcSetElement($url, $width)
    {
        return sprintf('%s %sw', $url, $width);
    }

    protected function isDirectUrl($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }
}
