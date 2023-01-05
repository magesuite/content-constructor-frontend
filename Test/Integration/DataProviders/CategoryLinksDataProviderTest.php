<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

/**
 * @magentoAppIsolation enabled
 * @magentoDbIsolation enabled
 */
class CategoryLinksDataProviderTest extends \PHPUnit\Framework\TestCase
{
    const MAIN_CATEGORY_ID = 333;
    const SUBCATEGORIES_IDS = [334, 335, 336, 338];
    const ORDERED_SUBCATEGORIES_IDS = [335, 334, 336];

    protected $expectedCategoriesStructure = [
        'main_category' => [
            'name' => 'Main category',
            'url' => 'http://localhost/index.php/main-category.html',
            'products_count' => 2,
            'is_active' => 1
        ],
        'sub_categories' => [
            [
                'name' => 'First subcategory',
                'url' => 'http://localhost/index.php/main-category/first-subcategory.html',
                'products_count' => 1,
                'is_active' => 1
            ],
            [
                'name' => 'Second subcategory',
                'url' => 'http://localhost/index.php/main-category/second-subcategory.html',
                'products_count' => 0,
                'is_active' => 1
            ],
            [
                'name' => 'Third subcategory',
                'url' => 'http://localhost/index.php/main-category/third-subcategory.html',
                'products_count' => 1,
                'is_active' => 1
            ]
        ]
    ];

    protected ?\Magento\TestFramework\ObjectManager $objectManager;

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
    public function testItReturnsCorrectCategoriesStructure()
    {
        $this->cache->remove($this->categoryHelper->getCacheKey());

        $result = $this->dataProvider->getCategories(self::MAIN_CATEGORY_ID, self::SUBCATEGORIES_IDS);
        $this->assertEquals($this->expectedCategoriesStructure, $result);
    }

    /**
     * @magentoCache all disabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/categories_with_products.php
     */
    public function testItReturnsCorrectOrderOfSubCategories()
    {
        $this->cache->remove($this->categoryHelper->getCacheKey());

        $result = $this->dataProvider->getCategories(self::MAIN_CATEGORY_ID, self::ORDERED_SUBCATEGORIES_IDS);

        $this->assertEquals('Second subcategory', $result['sub_categories'][0]['name']);
        $this->assertEquals('First subcategory', $result['sub_categories'][1]['name']);
        $this->assertEquals('Third subcategory', $result['sub_categories'][2]['name']);
    }
}
