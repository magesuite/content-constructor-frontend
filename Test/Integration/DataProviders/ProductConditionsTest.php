<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

#[\Magento\TestFramework\Fixture\AppArea('frontend')]
#[\Magento\TestFramework\Fixture\DbIsolation(true)]
#[\Magento\TestFramework\Fixture\AppIsolation(true)]
class ProductConditionsTest extends \PHPUnit\Framework\TestCase
{
    protected const string COMBINE_CONDITION = \Magento\CatalogWidget\Model\Rule\Condition\Combine::class;
    protected const string PRODUCT_CONDITION = \Magento\CatalogWidget\Model\Rule\Condition\Product::class;

    protected \Magento\Framework\ObjectManagerInterface $objectManager;
    protected \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider $dataProvider;

    protected function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        $this->dataProvider = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider::class);
        $this->registerPriceRenderer();
    }

    #[\Magento\TestFramework\Fixture\DataFixture('MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php')]
    #[\Magento\TestFramework\Fixture\Config('cataloginventory/options/show_out_of_stock', '0', 'store', 'default')]
    public function testPriceRangeConditionsSelectOnlyProductsWithinTheRange(): void
    {
        $products = $this->dataProvider->getProducts(['conditions' => $this->buildConditions([
            ['attribute' => 'price', 'operator' => '>=', 'value' => '40'],
            ['attribute' => 'price', 'operator' => '<=', 'value' => '80'],
        ])]);

        $this->assertEqualsCanonicalizing(
            ['the_middle_product', 'some_daily_deal_product', 'high_id_product'],
            array_column($products, 'sku')
        );
    }

    #[\Magento\TestFramework\Fixture\DataFixture('MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php')]
    public function testAttributeConditionSelectsOnlyMatchingProducts(): void
    {
        $products = $this->dataProvider->getProducts(['conditions' => $this->buildConditions([
            ['attribute' => 'sku', 'operator' => '()', 'value' => 'cheapest, the_most_expensive'],
        ])]);

        $this->assertEqualsCanonicalizing(['cheapest', 'the_most_expensive'], array_column($products, 'sku'));
    }

    #[\Magento\TestFramework\Fixture\DataFixture('MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php')]
    public function testConditionsEncodedLikeCatalogProductsListWidgetAreApplied(): void
    {
        $encodedConditions = $this->objectManager->get(\Magento\Widget\Helper\Conditions::class)->encode($this->buildConditions([
            ['attribute' => 'price', 'operator' => '>=', 'value' => '90'],
        ]));

        $products = $this->dataProvider->getProducts(['conditions' => $encodedConditions]);

        $this->assertSame(['the_most_expensive'], array_column($products, 'sku'));
    }

    #[\Magento\TestFramework\Fixture\DataFixture('MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php')]
    public function testConditionsNarrowTheSelectedCategory(): void
    {
        $products = $this->dataProvider->getProducts([
            'category_id' => 333,
            'conditions' => $this->buildConditions([
                ['attribute' => 'price', 'operator' => '<', 'value' => '60'],
            ]),
        ]);

        $this->assertNotEmpty($products);

        foreach ($products as $product) {
            $this->assertLessThan(60, (float) $product['object']->getPrice(), $product['sku']);
        }
    }

    #[\Magento\TestFramework\Fixture\DataFixture('MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php')]
    public function testCategoryConditionSelectsTheProductsOfThatCategory(): void
    {
        $categoryProductIds = array_column($this->dataProvider->getProducts(['category_id' => 333]), 'id');

        $products = $this->dataProvider->getProducts(['conditions' => $this->buildConditions([
            ['attribute' => 'category_ids', 'operator' => '()', 'value' => '333'],
        ])]);

        $this->assertNotEmpty($categoryProductIds);
        $this->assertEqualsCanonicalizing($categoryProductIds, array_column($products, 'id'));
    }

    #[\Magento\TestFramework\Fixture\DataFixture('MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php')]
    public function testExcludedCategoryConditionLeavesOutTheProductsOfThatCategory(): void
    {
        $categoryProductIds = array_column($this->dataProvider->getProducts(['category_id' => 333]), 'id');

        $products = $this->dataProvider->getProducts(['conditions' => $this->buildConditions([
            ['attribute' => 'category_ids', 'operator' => '!()', 'value' => '333'],
        ])]);

        $this->assertNotEmpty($products);
        $this->assertSame([], array_intersect($categoryProductIds, array_column($products, 'id')));
    }

    protected function buildConditions(array $productConditions): array
    {
        $conditions = [
            '1' => ['type' => self::COMBINE_CONDITION, 'aggregator' => 'all', 'value' => '1', 'new_child' => ''],
        ];

        foreach (array_values($productConditions) as $index => $productCondition) {
            $conditions[sprintf('1--%d', $index + 1)] = array_merge(['type' => self::PRODUCT_CONDITION], $productCondition);
        }

        return $conditions;
    }

    protected function registerPriceRenderer(): void
    {
        $layout = $this->objectManager->get(\Magento\Framework\View\LayoutInterface::class);

        if ($layout->getBlock('product.price.render.default')) {
            return;
        }

        $layout->createBlock(
            \Magento\Framework\Pricing\Render::class,
            'product.price.render.default',
            ['data' => ['price_render_handle' => 'catalog_product_prices']]
        );
    }
}
