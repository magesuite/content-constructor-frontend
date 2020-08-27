<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

class CategoryLinksDataProviderTest extends \PHPUnit\Framework\TestCase
{
    const MAIN_CATEGORY_ID = 333;
    const SUBCATEGORIES_IDS = [334,335,336,338];
    const ORDERED_SUBCATEGORIES_IDS = [335,334,336];

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

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider
     */
    private $dataProvider;

    public function setUp(): void {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->dataProvider = $this->objectManager
            ->get(\MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider::class);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoCache all disabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture loadCategories
     */
    public function testItReturnsCorrectCategoriesStructure() {
        $result = $this->dataProvider->getCategories(self::MAIN_CATEGORY_ID, self::SUBCATEGORIES_IDS);
        $this->assertEquals($this->expectedCategoriesStructure, $result);
    }

    /**
     * @magentoCache all disabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture loadCategories
     */
    public function testItReturnsCorrectOrderOfSubCategories() {
        $result = $this->dataProvider->getCategories(self::MAIN_CATEGORY_ID, self::ORDERED_SUBCATEGORIES_IDS);

        $this->assertEquals('Second subcategory', $result['sub_categories'][0]['name']);
        $this->assertEquals('First subcategory', $result['sub_categories'][1]['name']);
        $this->assertEquals('Third subcategory', $result['sub_categories'][2]['name']);
    }

    public static function loadCategories() {
        include __DIR__.'/_files/categories_with_products.php';

        /** @var \Magento\Framework\App\CacheInterface $cache */
        $cache = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
            ->create(\Magento\Framework\App\CacheInterface::class);

        $cache->remove(\MageSuite\ContentConstructorFrontend\Helper\Category::CACHE_TAG);
    }
}
