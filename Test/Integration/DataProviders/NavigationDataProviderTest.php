<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

class NavigationDataProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\NavigationDataProvider
     */
    private $dataProvider;

    public function setUp() {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->dataProvider = $this->objectManager
            ->get(\MageSuite\ContentConstructorFrontend\DataProviders\NavigationDataProvider::class);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/categories.php
     * @magentoDataFixture loadCategoriesNotIncludedInMenu
     * @magentoCache all disabled
     */
    public function testItReturnsNavigationCorrectStructure() {
        $result = $this->dataProvider->getNavigationStructure();

        $this->assertArrayHasKey('items', $result);

        $this->assertCount(7, $result['items']);

        $this->assertCount(1, $result['items'][0]['subcategories']);

        $this->assertEquals('Category 1', $result['items'][0]['label']);
        $this->assertEquals('Category 2', $result['items'][1]['label']);
        $this->assertEquals('Category 1.1', $result['items'][0]['subcategories'][0]['label']);
        $this->assertEquals('Category 1.1.1', $result['items'][0]['subcategories'][0]['subcategories'][0]['label']);

        $this->assertArrayHasKey('parent_id', $result['items'][0]);
        $this->assertEquals(2, $result['items'][0]['parent_id']);

        $this->assertEquals(2, $result['items'][0]['number_of_products']);
        $this->assertEquals(0, $result['items'][1]['number_of_products']);

        $this->assertEquals('http://localhost/index.php/category-1.html', $result['items'][0]['url']);

        $this->assertEquals(
            'http://localhost/index.php/category-1/category-1-1.html',
            $result['items'][0]['subcategories'][0]['url']
        );

        $this->assertEquals(
            'http://localhost/index.php/category-1/category-1-1/category-1-1-1.html',
            $result['items'][0]['subcategories'][0]['subcategories'][0]['url']
        );
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoAdminConfigFixture cc_frontend_extension/configuration/sort_alphabetically 1
     * @magentoDataFixture loadCategoriesWithProducts
     * @magentoCache all disabled
     */
    public function testItReturnsNavigationCorrectSorting()
    {
        $result = $this->dataProvider->getNavigationStructure(3311);

        $sortedCategories = $result['items'][0]['subcategories'];

        $this->assertEquals($sortedCategories[0]['label'], 'Ä Fourth subcategory');
        $this->assertEquals($sortedCategories[1]['label'], 'A Second subcategory');
        $this->assertEquals($sortedCategories[2]['label'], 'B Third subcategory');
        $this->assertEquals($sortedCategories[3]['label'], 'C First subcategory');
    }


    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/categories.php
     * @magentoDataFixture loadCategoriesWithCustomAttributes
     * @magentoCache all disabled
     */
    public function testItReturnsCategoriesWithCorrectAttributes() {
        $result = $this->dataProvider->getNavigationStructure();

        $this->assertArrayHasKey('items', $result);

        $this->assertCount(10, $result['items']);

        $this->assertEquals('Category do not expand flyout', $result['items'][7]['label']);
        $this->assertEquals('Category with custom url', $result['items'][8]['label']);
        $this->assertEquals('Category with featured products', $result['items'][9]['label']);


        $this->assertEquals(1, $result['items'][7]['do_not_expand_flyout']);
        $this->assertEquals(0, $result['items'][8]['do_not_expand_flyout']);

        $this->assertEquals(null, $result['items'][7]['category_custom_url']);
        $this->assertEquals('http://localhost/index.php/testurl.html', $result['items'][8]['category_custom_url']);
        $this->assertEquals('http://localhost/index.php/testurl.html', $result['items'][9]['category_custom_url']);
        $this->assertEquals('cat14', $result['items'][8]['category_identifier']);
        $this->assertEquals('cat15', $result['items'][9]['category_identifier']);

        $this->assertEquals('Featured Products Header', $result['items'][9]['featured_products_header']);
        $this->assertCount(2, $result['items'][9]['featured_products']);
        $this->assertArrayHasKey('name', $result['items'][9]['featured_products'][0]);
        $this->assertEquals('Second product', $result['items'][9]['featured_products'][0]['name']);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/categories.php
     * @magentoDataFixture loadCategoriesWithCustomAttributes
     * @magentoCache all disabled
     */
    public function testItReturnsNavigationWithImageTeaser() {
        $result = $this->dataProvider->getNavigationStructure(2);

        $this->assertArrayHasKey('items', $result);

        $category = $result['items'][9];

        $this->assertEquals(15, $category['id']);
        $this->assertCount(7, $category['image_teaser']);

        $this->assertEquals('http://localhost/pub/media/catalog/category/teaser.png', $category['image_teaser']['image']);
        $this->assertEquals('Image Teaser Headline', $category['image_teaser']['headline']);
        $this->assertEquals('Image Teaser Paragraph', $category['image_teaser']['paragraph']);
        $this->assertEquals('http://localhost/index.php/url', $category['image_teaser']['button_link']);

        $subCategory = $category['subcategories'][0];

        $this->assertEquals(16, $subCategory['id']);
        $this->assertFalse($subCategory['image_teaser']);
    }

    public static function loadCategoriesNotIncludedInMenu() {
        include __DIR__.'/_files/categories_not_included_in_menu.php';

        /** @var \Magento\Framework\App\CacheInterface $cache */
        $cache = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
            ->create(\Magento\Framework\App\CacheInterface::class);

        $cache->remove(\MageSuite\ContentConstructorFrontend\Helper\Category::CACHE_TAG);
    }

    public static function loadCategoriesWithCustomAttributes() {
        include __DIR__.'/_files/categories_with_custom_attributes.php';

        /** @var \Magento\Framework\App\CacheInterface $cache */
        $cache = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
            ->create(\Magento\Framework\App\CacheInterface::class);

        $cache->remove(\MageSuite\ContentConstructorFrontend\Helper\Category::CACHE_TAG);
    }

    public static function loadCategoriesWithProducts() {
        include __DIR__.'/_files/categories_sorted_with_products.php';

        /** @var \Magento\Framework\App\CacheInterface $cache */
        $cache = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
            ->create(\Magento\Framework\App\CacheInterface::class);

        $cache->remove(\MageSuite\ContentConstructorFrontend\Helper\Category::CACHE_TAG);
    }
}