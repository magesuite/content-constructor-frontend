<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Helper;

class CategoryGridTeasersTest extends \PHPUnit\Framework\TestCase
{
    const CATEGORY_ID = 333;
    const CURRENT_CATEGORY_REGISTRY_KEY = 'current_category';

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\CategoryGridTeasers
     */
    protected $helper;


    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    protected $categoryRepository;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();
        $this->helper = $this->objectManager->get(\MageSuite\ContentConstructorFrontend\Helper\CategoryGridTeasers::class);
        $this->registry = $this->objectManager->get(\Magento\Framework\Registry::class);
        $this->categoryRepository = $this->objectManager->get(\Magento\Catalog\Api\CategoryRepositoryInterface::class);

    }

    public function tearDown(): void
    {
        $this->registry->unregister(self::CURRENT_CATEGORY_REGISTRY_KEY);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture loadCategoryWithoutGrid
     */
    public function testItReturnsNullWhenWereNotInCategoryPage()
    {
        $this->registry->register(self::CURRENT_CATEGORY_REGISTRY_KEY, null);

        $this->assertNull($this->helper->getConfig());
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture loadCategoryWithoutGrid
     */
    public function testItReturnsNullWhenThereIsNoGridConfiguration()
    {
        $this->registerExistingCurrentCategory();
        $this->assertNull($this->helper->getConfig());
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture loadCategoryWithGrid
     */
    public function testItReturnsDataArrayWhenThereIsAGridConfiguration()
    {
        $this->registerExistingCurrentCategory();
        $this->assertEquals(['title' => 'Grid'], $this->helper->getConfig());
    }


    public static function loadCategoryWithoutGrid()
    {
        include __DIR__ . '/_files/category_without_grid.php';
    }

    public static function loadCategoryWithGrid()
    {
        include __DIR__ . '/_files/category_with_grid.php';
    }

    /**
     * @return \Magento\Catalog\Api\Data\CategoryInterface
     */
    protected function registerExistingCurrentCategory()
    {
        $category = $this->categoryRepository->get(self::CATEGORY_ID);
        // category loaded only by repository does not load custom_layout_update attribute
        $category->load(self::CATEGORY_ID);

        $this->registry->register(self::CURRENT_CATEGORY_REGISTRY_KEY, $category);
    }
}
