<?php

namespace MageSuite\ContentConstructorFrontend\ViewModel;

class CmsPreloadImage implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $preloadImageData = null;
    /**
     * @var \Magento\Cms\Model\Page
     */
    protected $cmsPage;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver
     */
    protected $cmsPreloadImageResolver;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\Configuration
     */
    protected $configuration;

    public function __construct(
        \Magento\Cms\Model\Page $cmsPage,
        \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver $cmsPreloadImageResolver,
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration
    ) {
        $this->cmsPage = $cmsPage;
        $this->cmsPreloadImageResolver = $cmsPreloadImageResolver;
        $this->configuration = $configuration;
    }

    protected function getPreloadImageData($imageWidth)
    {
        if (!$this->configuration->isPreloadImageEnabled()) {
            return null;
        }

        if (empty($this->preloadImageData)) {
            $this->preloadImageData = $this->cmsPreloadImageResolver->resolve($this->cmsPage->getContentConstructorContent(), $imageWidth);
        }

        return $this->preloadImageData;
    }

    public function getPreloadImage($imageWidth)
    {
        $preloadImageData = $this->getPreloadImageData($imageWidth);

        if (!empty($preloadImageData['preload_image'])) {
            return $preloadImageData['preload_image'];
        }

        return false;
    }

    public function getPreloadImageSrcSet($imageWidth)
    {
        $preloadImageData = $this->getPreloadImageData($imageWidth);

        if (!empty($preloadImageData['src_set'])) {
            return $preloadImageData['src_set'];
        }

        return false;
    }
}
