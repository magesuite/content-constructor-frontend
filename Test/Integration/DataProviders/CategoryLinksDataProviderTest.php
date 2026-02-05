<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

/**
 * @magentoAppIsolation enabled
 * @magentoDbIsolation enabled
 */
class CategoryLinksDataProviderTest extends \PHPUnit\Framework\TestCase
{
    protected const MAIN_CATEGORY_ID = 333;
    protected const SUBCATEGORIES_IDS = [334, 335, 336, 338];
    protected const ORDERED_SUBCATEGORIES_IDS = [335, 334, 336];

    protected ?\Magento\Framework\App\ObjectManager $objectManager;
    protected ?\Magento\Framework\App\CacheInterface $cache;
    protected ?\MageSuite\ContentConstructorFrontend\Helper\Category $categoryHelper;
    protected ?\MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider $dataProvider;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->cache = $this->objectManager->get(\Magento\Framework\App\CacheInterface::class);
        $this->categoryHelper = $this->objectManager->get(\MageSuite\ContentConstructorFrontend\Helper\Category::class);

        $this->dataProvider = $this->objectManager->get(\MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider::class);
    }

    /**
     * @magentoCache all disabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/categories_with_products.php
     */
    public function testItReturnsCorrectCategoriesStructure(): void
    {
        $this->cache->remove($this->categoryHelper->getCacheKey());

        $result = $this->dataProvider->getCategories(self::MAIN_CATEGORY_ID, self::SUBCATEGORIES_IDS);

        $this->assertArrayHasKey('main_category', $result);
        $this->assertArrayHasKey('sub_categories', $result);

        $this->assertEquals('Main category', $result['main_category']['name']);
        $this->assertEquals('http://localhost/index.php/main-category.html', $result['main_category']['url']);
        $this->assertEquals(2, $result['main_category']['products_count']);
        $this->assertEquals(1, $result['main_category']['is_active']);

        $this->assertEquals('First subcategory', $result['sub_categories'][0]['name']);
        $this->assertEquals('http://localhost/index.php/main-category/first-subcategory.html', $result['sub_categories'][0]['url']);
        $this->assertEquals(1, $result['sub_categories'][0]['products_count']);
        $this->assertEquals(1, $result['sub_categories'][0]['is_active']);

        $this->assertEquals('Second subcategory', $result['sub_categories'][1]['name']);
        $this->assertEquals(0, $result['sub_categories'][1]['products_count']);
        $this->assertEquals('Third subcategory', $result['sub_categories'][2]['name']);
    }

    /**
     * @magentoCache all disabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/categories_with_products.php
     */
    public function testItReturnsCorrectOrderOfSubCategories(): void
    {
        $this->cache->remove($this->categoryHelper->getCacheKey());

        $result = $this->dataProvider->getCategories(self::MAIN_CATEGORY_ID, self::ORDERED_SUBCATEGORIES_IDS);

        $this->assertEquals('Second subcategory', $result['sub_categories'][0]['name']);
        $this->assertEquals('First subcategory', $result['sub_categories'][1]['name']);
        $this->assertEquals('Third subcategory', $result['sub_categories'][2]['name']);
    }
}
