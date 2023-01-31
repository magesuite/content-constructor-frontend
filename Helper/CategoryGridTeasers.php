<?php

namespace MageSuite\ContentConstructorFrontend\Helper;

class CategoryGridTeasers extends \Magento\Framework\App\Helper\AbstractHelper
{
    const GRID_COMPONENT_TYPE = 'magento-product-grid-teasers';
    const GRID_COMPONENT_SECTION = 'grid';

    protected \Magento\Framework\Registry $registry;

    protected \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper $xmlToComponentConfigurationMapper;

    protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver;

    protected \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\Registry $registry,
        \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper $xmlToComponentConfigurationMapper,
        \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver
    ) {
        parent::__construct($context);

        $this->registry = $registry;
        $this->xmlToComponentConfigurationMapper = $xmlToComponentConfigurationMapper;
        $this->mediaResolver = $mediaResolver;
        $this->urlResolver = $urlResolver;
    }

    public function getConfig()
    {
        $components = $this->getContentConstructorComponents();
        $gridComponent = $this->getGridComponent($components);

        if ($gridComponent == null) {
            return null;
        }

        $data = $gridComponent['data'] ?? null;

        if ($data == null) {
            return null;
        }

        return $this->resolveExternalResources($data);
    }

    protected function getGridComponent($components)
    {
        if (empty($components)) {
            return null;
        }

        foreach ($components as $component) {
            if ($component['section'] == self::GRID_COMPONENT_SECTION && $component['type'] == self::GRID_COMPONENT_TYPE) {
                return $component;
            }
        }

        return null;
    }

    protected function resolveExternalResources($configuration)
    {
        if (!isset($configuration['teasers'])) {
            return $configuration;
        }

        foreach ($configuration['teasers'] as &$teaser) {
            if (!empty($teaser['decodedImage'])) {
                $teaser['image'] = [
                    'src' => $this->mediaResolver->resolve($teaser['decodedImage']),
                    'srcSet' => $this->mediaResolver->resolveSrcSet($teaser['decodedImage'])
                ];
            }

            if (!empty($teaser['href'])) {
                $teaser['href'] = $this->urlResolver->resolve($teaser['href']);
            }
        }

        return $configuration;
    }

    protected function getContentConstructorComponents()
    {
        /** @var \Magento\Catalog\Model\Category $currentCategory */
        $currentCategory = $this->registry->registry('current_category');

        if ($currentCategory != null) {
            $contentConstructorContent = $currentCategory->getContentConstructorContent();
            return $contentConstructorContent ? json_decode($contentConstructorContent, true) : null;
        }

        /** @var \MageSuite\BrandManagement\Model\Brands $currentBrand */
        $currentBrand = $this->registry->registry('current_brand');

        if ($currentBrand != null) {
            $layoutUpdateXml = $currentBrand->getLayoutUpdateXml();
            return $layoutUpdateXml ? $this->xmlToComponentConfigurationMapper->map($layoutUpdateXml) : null;
        }

        return null;
    }
}
