<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class ComponentFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructor\Factory\ComponentFactory|\PHPUnit_Framework_MockObject_MockObject
     */
    private $factory;

    public function setUp() {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->factory = $this->objectManager->get(\MageSuite\ContentConstructorFrontend\Service\ComponentFactory::class);
    }

    public function testItImplementsComponentFactoryInterface() {
        $this->assertInstanceOf(\MageSuite\ContentConstructor\Factory\ComponentFactory::class, $this->factory);
    }

    public function testItReturnsNullWhenComponentDoesNotExists() {
        $createdComponent = $this->factory->create('not_existing_component');

        $this->assertNull($createdComponent);
    }

    /**
     * @dataProvider getComponents
     */
    public function testItReturnsComponentsProperly($componentName, $expectedClass) {
        $createdComponent = $this->factory->create($componentName);

        $this->assertInstanceOf($expectedClass, $createdComponent);
    }

    public function getComponents() {
        return [
            ['headline', \MageSuite\ContentConstructor\Components\Headline\Headline::class],
            ['static-cms-block', \MageSuite\ContentConstructorFrontend\Block\StaticBlock::class],
            ['paragraph', \MageSuite\ContentConstructorFrontend\Block\Paragraph::class],
            ['navigation', \MageSuite\ContentConstructor\Components\Navigation\Navigation::class],
            ['product-carousel', \MageSuite\ContentConstructor\Components\ProductCarousel\ProductCarousel::class],
            ['hero-carousel', \MageSuite\ContentConstructor\Components\HeroCarousel\HeroCarousel::class],
            ['brand-carousel', \MageSuite\ContentConstructor\Components\BrandCarousel\BrandCarousel::class],
            ['image-teaser', \MageSuite\ContentConstructor\Components\ImageTeaser\ImageTeaser::class],
            ['button', \MageSuite\ContentConstructor\Components\Button\Button::class],
            ['category-links', \MageSuite\ContentConstructor\Components\CategoryLinks\CategoryLinks::class],
            ['separator', \MageSuite\ContentConstructor\Components\Separator\Separator::class],
            ['product-grid', \MageSuite\ContentConstructor\Components\ProductGrid\ProductGrid::class],
            ['custom-html', \MageSuite\ContentConstructor\Components\CustomHtml\CustomHtml::class],
            ['cms-teaser', \MageSuite\ContentConstructor\Components\CmsTeaser\CmsTeaser::class],
            ['product-finder', \MageSuite\ContentConstructor\Components\ProductFinder\ProductFinder::class]
        ];
    }
}