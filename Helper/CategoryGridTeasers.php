<?php

namespace MageSuite\ContentConstructorFrontend\Helper;


class CategoryGridTeasers extends \Magento\Framework\App\Helper\AbstractHelper
{
    const GRID_COMPONENT_TYPE = 'magento-product-grid-teasers';
    const GRID_COMPONENT_SECTION = 'grid';

    /**
     * @var \Magento\Framework\Registry
     */
    private $registry;
    /**
     * @var \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper
     */
    private $xmlToComponentConfigurationMapper;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\MediaResolver
     */
    private $mediaResolver;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\UrlResolver
     */
    private $urlResolver;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\Registry $registry,
        \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper $xmlToComponentConfigurationMapper,
        \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver
    )
    {
        parent::__construct($context);

        $this->registry = $registry;
        $this->xmlToComponentConfigurationMapper = $xmlToComponentConfigurationMapper;
        $this->mediaResolver = $mediaResolver;
        $this->urlResolver = $urlResolver;
    }

    public function getConfig() {
        $contentConstructorContent = $this->getContentConstructorContent();

        if(empty($contentConstructorContent)) {
            return null;
        }

        $components = json_decode($contentConstructorContent, true);
        $gridComponent = $this->getGridComponent($components);

        if($gridComponent == null) {
            return null;
        }

        $data = isset($gridComponent['data']) ? $gridComponent['data'] : null;

        if($data == null) {
            return null;
        }

        return $this->resolveExternalResources($data);
    }

    protected function getGridComponent($components) {
        foreach($components as $component) {
            if($component['section'] == self::GRID_COMPONENT_SECTION and $component['type'] == self::GRID_COMPONENT_TYPE) {
                return $component;
            }
        }

        return null;
    }

    protected function resolveExternalResources($configuration)
    {
        if(!isset($configuration['teasers'])) {
            return $configuration;
        }

        foreach($configuration['teasers'] as &$teaser) {
            if(!empty($teaser['decodedImage'])) {
                $teaser['image'] = [
                    'src' => $this->mediaResolver->resolve($teaser['decodedImage']),
                    'srcSet' => $this->mediaResolver->resolveSrcSet($teaser['decodedImage'])
                ];
            }

            if(!empty($teaser['href'])) {
                $teaser['href'] = $this->urlResolver->resolve($teaser['href']);
            }
        }

        return $configuration;
    }

    protected function getContentConstructorContent() {
        /** @var \Magento\Catalog\Model\Category $currentCategory */
        $currentCategory = $this->registry->registry('current_category');

        if($currentCategory != null) {
            return $currentCategory->getContentConstructorContent();
        }

        /** @var \MageSuite\BrandManagement\Model\Brands $currentBrand */
        $currentBrand = $this->registry->registry('current_brand');

        if($currentBrand != null) {
            return $currentBrand->getLayoutUpdateXml();
        }

        return null;
    }
}
