<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Component;

/**
 * @magentoDbIsolation disabled
 * @magentoAppIsolation enabled
 */
class BrandCarouselTest extends \PHPUnit\Framework\TestCase
{
    protected ?\MageSuite\ContentConstructorFrontend\Model\Component\BrandCarousel $brandCarousel = null;
    protected ?\Magento\Store\Model\StoreManagerInterface $storeManager = null;
    protected string $brandSubfolder = '';

    protected function setUp(): void
    {
        $objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->brandCarousel = $objectManager->get(\MageSuite\ContentConstructorFrontend\Model\Component\BrandCarousel::class);
        $this->storeManager = $objectManager->get(\Magento\Store\Model\StoreManagerInterface::class);

        $version = \Composer\InstalledVersions::getVersion('creativestyle/magesuite-brand-management');

        if (!empty($version) && version_compare($version, '2.0.0') < 0) {
            // In Brand V1, the subfolder for media was stored in a codebase. In V2 it is stored in brand's image attributes.
            $this->brandSubfolder = 'brands/';
        }
    }

    /**
     * @magentoAppArea frontend
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/_files/brand_with_two_stores.php
     */
    public function testIfReturnsCorrectDefaultStoreValues(): void
    {
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-defaultstore',
                'meta_title' => null,
                'image' => [
                    'src' => 'http://localhost/media/' . $this->brandSubfolder . 'brand-icon.png',
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
    public function testIfReturnsCorrectSecondStoreValues(): void
    {
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-fixturestore',
                'meta_title' => null,
                'image' => [
                    'src' => 'http://localhost/media/' . $this->brandSubfolder . 'brand-icon.png',
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
    public function testIfReturnsCorrectAdminValues(): void
    {
        $expected = [
            [
                'href' => 'http://localhost/index.php/brands/brand-admin',
                'meta_title' => null,
                'image' => [
                    'src' => 'http://localhost/media/' . $this->brandSubfolder . 'brand-icon.png',
                    'alt' => 'brand-admin'
                ]
            ]
        ];

        $this->storeManager->setCurrentStore(\Magento\Store\Model\Store::DEFAULT_STORE_ID);
        $brands = $this->brandCarousel->getBrands();

        $this->assertEquals($expected, $brands);
    }
}
