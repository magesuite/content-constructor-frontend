<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class ComponentFactory implements \MageSuite\ContentConstructor\Factory\ComponentFactory
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    private $classMappings = [
        'headline' => \MageSuite\ContentConstructor\Components\Headline\Headline::class,
        'static-cms-block' => \MageSuite\ContentConstructorFrontend\Block\StaticBlock::class,
        'paragraph' => \MageSuite\ContentConstructorFrontend\Block\Component\Paragraph::class,
        'navigation' => \MageSuite\ContentConstructor\Components\Navigation\Navigation::class,
        'product-carousel' => \MageSuite\ContentConstructor\Components\ProductCarousel\ProductCarousel::class,
        'hero-carousel' => \MageSuite\ContentConstructor\Components\HeroCarousel\HeroCarousel::class,
        'brand-carousel' => \MageSuite\ContentConstructor\Components\BrandCarousel\BrandCarousel::class,
        'image-teaser' => \MageSuite\ContentConstructor\Components\ImageTeaser\ImageTeaser::class,
        'button' => \MageSuite\ContentConstructor\Components\Button\Button::class,
        'category-links' => \MageSuite\ContentConstructor\Components\CategoryLinks\CategoryLinks::class,
        'separator' => \MageSuite\ContentConstructor\Components\Separator\Separator::class,
        'product-grid' => \MageSuite\ContentConstructor\Components\ProductGrid\ProductGrid::class,
        'magento-product-grid-teasers' => \MageSuite\ContentConstructor\Components\MagentoProductGridTeasers\MagentoProductGridTeasers::class,
        'custom-html' => \MageSuite\ContentConstructor\Components\CustomHtml\CustomHtml::class,
        'cms-teaser' => \MageSuite\ContentConstructor\Components\CmsTeaser\CmsTeaser::class,
        'product-finder' => \MageSuite\ContentConstructor\Components\ProductFinder\ProductFinder::class
    ];

    /**
     * @param $componentName
     * @param $classOverrides
     * @return \MageSuite\ContentConstructor\Component
     */
    public function create(string $componentName, $classOverrides = [])
    {
        if(!isset($this->classMappings[$componentName])) {
            return null;
        }

        $classOverrides = $this->getClassOverrides($classOverrides);

        return $this->objectManager->create($this->classMappings[$componentName], $classOverrides);
    }

    /**
     * Converts class names to objects for overriding in component factory
     * @param $componentData
     * @return array
     */
    protected function getClassOverrides($classOverrides) {
        if(!is_array($classOverrides) or empty($classOverrides)) {
            return [];
        }

        foreach($classOverrides as $constructorFieldName => $className) {
            if(empty($className)) {
                unset($classOverrides[$constructorFieldName]);
                continue;
            }

            $classOverrides[$constructorFieldName] = $this->objectManager->create($className);
        }

        return $classOverrides;
    }
}