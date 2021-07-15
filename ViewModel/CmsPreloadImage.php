<?php

namespace MageSuite\ContentConstructorFrontend\ViewModel;

class CmsPreloadImage implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Cms\Model\Page
     */
    protected $cmsPage;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver
     */
    protected $cmsPreloadImageResolver;

    public function __construct(
        \Magento\Cms\Model\Page $cmsPage,
        \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver $cmsPreloadImageResolver
    ) {
        $this->cmsPage = $cmsPage;
        $this->cmsPreloadImageResolver = $cmsPreloadImageResolver;
    }

    public function getPreloadImageUrl($imageWidth)
    {
        return $this->cmsPreloadImageResolver->resolve($this->cmsPage->getContentConstructorContent(), $imageWidth);
    }
}
