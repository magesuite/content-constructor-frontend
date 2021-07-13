<?php

namespace MageSuite\ContentConstructorFrontend\ViewModel;

class CmsPreloadImage implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    const CACHE_TAG = 'cms_preload_image';

    /**
     * @var \Magento\Cms\Model\Page
     */
    protected $cmsPage;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver
     */
    protected $cmsPreloadImageResolver;
    /**
     * @var \Magento\Framework\App\CacheInterface
     */
    protected $cache;

    public function __construct(
        \Magento\Cms\Model\Page $cmsPage,
        \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver $cmsPreloadImageResolver,
        \Magento\Framework\App\CacheInterface $cache
    ) {
        $this->cmsPage = $cmsPage;
        $this->cmsPreloadImageResolver = $cmsPreloadImageResolver;
        $this->cache = $cache;
    }

    public function getPreloadImageUrl($imageWidth)
    {
        $cmsPage = $this->cmsPage;
        $cacheIdentifier = $this->getCacheIdentifier($cmsPage);
        $preloadImageUrl = $this->cache->load($cacheIdentifier);

        if ($preloadImageUrl == null) {
            $preloadImageUrl = $this->cmsPreloadImageResolver->resolve($cmsPage->getContentConstructorContent(), $imageWidth);

            $this->cache->save($preloadImageUrl, $cacheIdentifier, [sprintf('%s_%s', \Magento\Cms\Model\Page::CACHE_TAG, $cmsPage->getId())]);
        }

        return $preloadImageUrl;
    }

    public function getCacheIdentifier($cmsPage)
    {
        return sprintf('%s_%s', self::CACHE_TAG, $cmsPage->getId());
    }
}
