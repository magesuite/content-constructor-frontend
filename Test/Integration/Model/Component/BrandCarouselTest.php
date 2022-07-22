<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Component;

/**
 * @magentoDbIsolation disabled
 * @magentoAppIsolation enabled
 */
class BrandCarouselTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\BrandCarousel
     */
    protected $brandCarousel;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    protected function setUp(): void
    {
        $objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->brandCarousel = $objectManager->get(\MageSuite\ContentConstructorFrontend\Model\Component\BrandCarousel::class);
        $this->storeManager = $objectManager->get(\Magento\Store\Model\StoreManagerInterface::class);
    }

    /**
     * @magentoAppArea frontend
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/_files/brand_with_two_stores.php
     */
    public function testIfReturnsCorrectDefaultStoreValues()
    {
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-defaultstore',
                'image' => [
                    'src' => 'http://localhost/media/brands/brand-icon.png',
                    'alt' => 'brand-defaultstore'
                ]
            ]
        ];

        $brands = $this->brandCarousel->getBrands();

        $this->assertEquals($expected, $brands);
    }

    /**
     * @magentoAppArea frontend
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/_files/brand_with_two_stores.php
     */
    public function testIfReturnsCorrectSecondStoreValues()
    {
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-fixturestore',
                'image' => [
                    'src' => 'http://localhost/media/brands/brand-icon.png',
                    'alt' => 'brand-fixturestore'
                ]
            ]
        ];

        $this->storeManager->setCurrentStore('fixturestore');
        $brands = $this->brandCarousel->getBrands();

        $this->assertEquals($expected, $brands);
    }

    /**
     * @magentoAppArea adminhtml
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/_files/brand_with_two_stores.php
     */
    public function testIfReturnsCorrectAdminValues()
    {
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-admin',
                'image' => [
                    'src' => 'http://localhost/media/brands/brand-icon.png',
                    'alt' => 'brand-admin'
                ]
            ]
        ];

        $this->storeManager->setCurrentStore(\Magento\Store\Model\Store::DEFAULT_STORE_ID);
        $brands = $this->brandCarousel->getBrands();

        $this->assertEquals($expected, $brands);
    }
}
