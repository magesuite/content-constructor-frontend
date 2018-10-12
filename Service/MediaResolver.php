<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class MediaResolver implements \MageSuite\ContentConstructor\Service\MediaResolver
{
    /**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
    protected $filterProvider;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Framework\App\Filesystem\DirectoryList
     */
    private $directoryList;

    /**
     * @var \Magento\Framework\App\CacheInterface
     */
    private $cache;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Filesystem\DirectoryList $directoryList,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider
    )
    {
        $this->storeManager = $storeManager;
        $this->directoryList = $directoryList;
        $this->cache = $cache;
        $this->filterProvider = $filterProvider;
    }

    public function resolve($mediaPath)
    {
        $url = $this->parseMediaUrl($mediaPath);

        return $this->getUrl($url);
    }

    public function resolveSrcSet($mediaPath)
    {
        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = 'src_set_' . md5($originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if ($srcSet == null) {
            $srcSet = $this->buildSrcSet($originalImageUrl);

            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return $srcSet;
    }

    public function resolveSrcSetByDensity($mediaPath)
    {
        $originalImageUrl = $this->parseMediaUrl($mediaPath);
        $cacheIdentifier = 'src_set_density_' . md5($originalImageUrl);

        $srcSet = $this->cache->load($cacheIdentifier);

        if ($srcSet == null) {
            $srcSet = $this->buildSrcSetByDensity($originalImageUrl);

            $this->cache->save($srcSet, $cacheIdentifier, ['src_sets']);
        }

        return $srcSet;
    }

    protected function parseMediaUrl($mediaPath)
    {
        if (preg_match('/\bhttps?:\/\//i', $mediaPath)) {
            $path = parse_url($mediaPath, PHP_URL_PATH);
            return str_replace( '/media/', '', $path);
        } else {
            preg_match_all('/url="(?<url>.*?)"/si', $mediaPath, $results, PREG_PATTERN_ORDER);
        }

        return $results['url'][0];
    }

    /**
     * @param $originalImageUrl
     * @return string
     */
    protected function buildSrcSet($originalImageUrl)
    {
        $originalImagePath = $this->getMediaDirectoryPath() . $originalImageUrl;
        $originalImageName = pathinfo($originalImagePath, PATHINFO_BASENAME);
        $originalImageDirectory = dirname($originalImagePath);

        if (!file_exists($originalImagePath) OR !is_file($originalImagePath)) {
            return '';
        }

        list($originalImageWidth) = getimagesize($originalImagePath);

        $srcSet[] = $this->buildSrcSetElement($this->getUrl($originalImageUrl), $originalImageWidth);

        $thumbsDirectory = $originalImageDirectory . '/.thumbs';

        foreach (\MageSuite\Frontend\Service\Image\Resizer::WIDTHS_DEFAULT as $resizedImageWidth) {
            if ($resizedImageWidth >= $originalImageWidth) {
                continue;
            }

            $resizedFilePath = $thumbsDirectory . '/' . $resizedImageWidth . '/' . $originalImageName;

            if (!file_exists($resizedFilePath)) {
                continue;
            }

            $srcSet[] = $this->buildSrcSetElement($this->getUrlByPath($resizedFilePath), $resizedImageWidth);
        }

        return implode($srcSet, ', ');
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

        if (!file_exists($originalImagePath) OR !is_file($originalImagePath)) {
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
}