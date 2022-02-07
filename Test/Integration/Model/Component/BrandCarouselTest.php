<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Component;

/**
 * @magentoDbIsolation disabled
 * @magentoAppIsolation enabled
 * @magentoDataFixture Magento/Store/_files/core_fixturestore.php
 * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/_files/brand_with_two_stores.php
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
        $this->brandCarousel = $objectManager->get(
            \MageSuite\ContentConstructorFrontend\Model\Component\BrandCarousel::class
        );
        $this->storeManager = $objectManager->get(
            \Magento\Store\Model\StoreManagerInterface::class
        );
    }

    /**
     * @magentoAppArea frontend
     */
    public function testIfReturnsCorrectDefaultStoreValues()
    {
        $brands = $this->brandCarousel->getBrands();
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-defaultstore',
                'image' => [
                    'src' => 'http://localhost/media/brands/brand-icon.png',
                    'alt' => 'brand-defaultstore'
                ]
            ]
        ];
        $this->assertEquals($expected, $brands);
    }

    /**
     * @magentoAppArea frontend
     */
    public function testIfReturnsCorrectSecondStoreValues()
    {
        $secondStore = 'fixturestore';
        $this->storeManager->setCurrentStore($secondStore);
        $brands = $this->brandCarousel->getBrands();
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-fixturestore',
                'image' => [
                    'src' => 'http://localhost/media/brands/brand-icon.png',
                    'alt' => 'brand-fixturestore'
                ]
            ]
        ];
        $this->assertEquals($expected, $brands);
    }

    /**
     * @magentoAppArea adminhtml
     */
    public function testIfReturnsCorrectAdminValues()
    {
        $this->storeManager->setCurrentStore(\Magento\Store\Model\Store::DEFAULT_STORE_ID);
        $brands = $this->brandCarousel->getBrands();
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-admin',
                'image' => [
                    'src' => 'http://localhost/media/brands/brand-icon.png',
                    'alt' => 'brand-admin'
                ]
            ]
        ];
        $this->assertEquals($expected, $brands);
    }
}
