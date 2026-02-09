<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Helper;

class CategoryGridTeasersTest extends \PHPUnit\Framework\TestCase
{
    protected const CATEGORY_ID = 333;
    protected const CURRENT_CATEGORY_REGISTRY_KEY = 'current_category';

    protected ?\Magento\Framework\App\ObjectManager $objectManager;
    protected ?\MageSuite\ContentConstructorFrontend\Helper\CategoryGridTeasers $helper;
    protected ?\Magento\Framework\Registry $registry;
    protected ?\Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository;

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
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/Helper/_files/category_without_grid.php
     */
    public function testItReturnsNullWhenWereNotInCategoryPage(): void
    {
        $this->registry->register(self::CURRENT_CATEGORY_REGISTRY_KEY, null);

        $this->assertNull($this->helper->getConfig());
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/Helper/_files/category_without_grid.php
     */
    public function testItReturnsNullWhenThereIsNoGridConfiguration(): void
    {
        $this->registerExistingCurrentCategory();
        $this->assertNull($this->helper->getConfig());
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/Helper/_files/category_with_grid.php
     */
    public function testItReturnsDataArrayWhenThereIsAGridConfiguration(): void
    {
        $this->registerExistingCurrentCategory();
        $this->assertEquals(['title' => 'Grid'], $this->helper->getConfig());
    }

    protected function registerExistingCurrentCategory(): void
    {
        $category = $this->categoryRepository->get(self::CATEGORY_ID);
        // category loaded only by repository does not load custom_layout_update attribute
        $category->load(self::CATEGORY_ID);

        $this->registry->register(self::CURRENT_CATEGORY_REGISTRY_KEY, $category);
    }
}
