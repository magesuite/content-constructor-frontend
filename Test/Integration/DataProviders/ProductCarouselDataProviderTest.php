<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

class ProductCarouselDataProviderTest extends \PHPUnit\Framework\TestCase
{
    protected const MESSAGE_SORT_DATE_DESC = ': It does not sort properly by date descending';
    protected const MESSAGE_SORT_DATE_ASC = ': It does not sort properly by date ascending';
    protected const MESSAGE_SORT_PRICE_DESC = ': It does not sort properly by price descending';
    protected const MESSAGE_SORT_PRICE_ASC = ': It does not sort properly by price ascending';
    protected const MESSAGE_FILTER_NEWEST = ': It does not filter properly new products';
    protected const MESSAGE_CATEGORY = ': It does not fetch properly from category';

    protected ?\Magento\TestFramework\ObjectManager $objectManager;
    protected ?\MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider $dataProvider;
    protected ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepository;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->dataProvider = $this->objectManager->get(\MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider::class);
        $this->productRepository = $this->objectManager->get(\Magento\Catalog\Api\ProductRepositoryInterface::class);
        $priceRender = $this->objectManager->get(\Magento\Framework\View\LayoutInterface::class)->getBlock('product.price.render.default');

        if (!$priceRender) {
            $this->objectManager->get(\Magento\Framework\View\LayoutInterface::class)->createBlock(
                \Magento\Framework\Pricing\Render::class,
                'product.price.render.default',
                [
                    'data' => [
                        'price_render_handle' => 'catalog_product_prices',
                    ],
                ]
            );
        }
    }

    public function testItReturnsEmptyArrayWhenNoResultsAreFound(): void
    {
        $this->assertEquals([], $this->dataProvider->getProducts(['category_id' => 444]));
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php
     * @magentoConfigFixture current_store cataloginventory/options/show_out_of_stock 1
     */
    public function testItGetsProductsFromSpecifiedCategoryIncludingOutOfStockProducts(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertCount(4, $result, __FUNCTION__ . ': All products should be returned');
        $this->assertEquals('Out of stock product', $result[0]['name'], __FUNCTION__ . ': Out of stock product should be returned');
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php
     * @magentoConfigFixture current_store positive_indicators/popular_icon/is_enabled 1
     */
    public function testItReturnsProducts(): void
    {
        $this->itGetsProductsFromSpecifiedCategoryIncludingAllSubcategories();
        $this->itGetsProductsFromVirtualCategoryWithTheInName();
        $this->itSortsProperlyByPrice();
        $this->itReturnsOnlyInStockProducts();
        $this->itReturnsOnlyVisibleProducts();
        $this->itLimitsProperly();
        //        $this->itFiltersProperlyByNewestProduct();
        $this->itReturnsCorrectFlagForPopularIcon();
        $this->itReturnsCorrectProductPrice();
        $this->itReturnsCorrectProductQty();
        $this->itReturnsProductsBySku();
        $this->itReturnsProductsByIds();
        $this->itReturnsProductsBySkuDirectlyFromDatabase();
        $this->itReturnsProductsByIdsDirectlyFromDatabase();
        $this->itReturnsOnlySaleableProductsDirectlyFromDatabase();
        $this->itFiltersProperly();
        $this->itFiltersAndLimitsProperly();
    }

    protected function itGetsProductsFromSpecifiedCategoryIncludingAllSubcategories(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertCount(3, $result, __FUNCTION__ . 'Specified category should only return 3 products');
    }

    protected function itGetsProductsFromVirtualCategoryWithTheInName(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 335]);
        $skus = array_column($result, 'sku');

        $this->assertCount(2, $result, __FUNCTION__ . 'Specified category should only return 2 products');
        $this->assertEquals(['the_middle_product', 'the_most_expensive'], $skus);
    }

    protected function itSortsProperlyByPrice(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'price', 'order_type' => 'desc']);

        $this->assertEquals('The most expensive product', $result[0]['name'], __FUNCTION__ . self::MESSAGE_SORT_PRICE_DESC);
        $this->assertEquals('The middle product', $result[1]['name'], __FUNCTION__ . self::MESSAGE_SORT_PRICE_DESC);
        $this->assertEquals('Cheapest product', $result[2]['name'], __FUNCTION__ . self::MESSAGE_SORT_PRICE_DESC);

        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'price', 'order_type' => 'asc']);

        $this->assertEquals('Cheapest product', $result[0]['name'], __FUNCTION__ . self::MESSAGE_SORT_PRICE_ASC);
        $this->assertEquals('The middle product', $result[1]['name'], __FUNCTION__ . self::MESSAGE_SORT_PRICE_ASC);
        $this->assertEquals('The most expensive product', $result[2]['name'], __FUNCTION__ . self::MESSAGE_SORT_PRICE_ASC);
    }

    protected function itReturnsOnlyInStockProducts(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);
        $this->assertCount(3, $result, __FUNCTION__ . ': Only in stock products should be returned');
    }

    protected function itReturnsOnlyVisibleProducts(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertCount(3, $result, __FUNCTION__ . ' Only visible products should be returned');
    }

    protected function itLimitsProperly(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333, 'limit' => 1]);

        $this->assertCount(1, $result, __FUNCTION__ . ': It should return only one product with limit 1');
    }

    //    @todo: Test is commented out because of compatibility with Magento Commerce, logic needs to be reimplemented
    //    protected function itFiltersProperlyByNewestProduct()
    //    {
    //        $result = $this->dataProvider->getProducts(['category_id' => 333, 'filter' => 'new_products']);
    //
    //        $skus = array_column($result, 'sku');
    //
    //        $this->assertEquals(['the_most_expensive', 'cheapest'], $skus, __FUNCTION__.self::MESSAGE_FILTER_NEWEST);
    //    }

    protected function itReturnsCorrectFlagForPopularIcon(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertTrue($result[0]['popularIconFlag']);
        $this->assertFalse($result[1]['popularIconFlag']);
    }

    protected function itReturnsCorrectProductPrice(): void
    {
        $result = $this->dataProvider->getProducts(['skus' => 'the_most_expensive']);

        $this->assertCount(1, $result);
        $this->assertArrayHasKey('price', $result[0]);

        $assertContains = method_exists($this, 'assertStringContainsString') ? 'assertStringContainsString' : 'assertContains';

        $this->$assertContains('id="product-price-334"', $result[0]['price']);
        $this->$assertContains('data-price-amount="100"', $result[0]['price']);
        $this->$assertContains('data-price-type="finalPrice"', $result[0]['price']);
        $this->$assertContains('<span class="price">$100.00</span>', $result[0]['price']);
    }

    protected function itReturnsCorrectProductQty(): void
    {
        $expected = [60, 80, 100];

        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'price', 'order_type' => 'DESC']);

        $this->assertCount(3, $result);
        $this->assertArrayHasKey('qty', $result[0]);

        $this->assertEquals(
            $expected,
            array_column($result, 'qty')
        );
    }

    protected function itReturnsProductsBySku(): void
    {
        $result = $this->dataProvider->getProducts(['skus' => 'cheapest, the_most_expensive']);

        $this->assertCount(2, $result, __FUNCTION__ . ' Only two skus were provided, so only two products should be returned');

        $cheapest = array_shift($result);
        $mostExpensive = array_shift($result);

        $this->assertEquals('Cheapest product', $cheapest['name'], __FUNCTION__ . ' Products should be sorted by provided sku list');
        $this->assertEquals('The most expensive product', $mostExpensive['name'], __FUNCTION__ . ' Products should be sorted by provided sku list');
    }

    protected function itReturnsProductsByIds(): void
    {
        $result = $this->dataProvider->getProducts(['product_ids' => [333, 334]]);

        $this->assertCount(2, $result, __FUNCTION__ . ' Two ids were provided, so only two products should be returned');

        $cheapest = array_shift($result);
        $mostExpensive = array_shift($result);

        $this->assertEquals('Cheapest product', $cheapest['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
        $this->assertEquals('The most expensive product', $mostExpensive['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
    }

    protected function itReturnsProductsBySkuDirectlyFromDatabase(): void
    {
        $result = $this->dataProvider->getProducts([
            'skus' => 'cheapest, the_most_expensive',
            'collection_type' => \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider::COLLECTION_TYPE_DATABASE
        ]);

        $this->assertCount(2, $result, __FUNCTION__ . ' Only two skus were provided, so only two products should be returned');

        $cheapest = array_shift($result);
        $mostExpensive = array_shift($result);

        $this->assertEquals('Cheapest product', $cheapest['name'], __FUNCTION__ . ' Products should be sorted by provided sku list');
        $this->assertEquals('The most expensive product', $mostExpensive['name'], __FUNCTION__ . ' Products should be sorted by provided sku list');
    }

    protected function itReturnsProductsByIdsDirectlyFromDatabase(): void
    {
        $result = $this->dataProvider->getProducts([
            'product_ids' => [333, 334],
            'collection_type' => \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider::COLLECTION_TYPE_DATABASE
        ]);

        $this->assertCount(2, $result, __FUNCTION__ . ' Two ids were provided, so only two products should be returned');

        $cheapest = array_shift($result);
        $mostExpensive = array_shift($result);

        $this->assertEquals('Cheapest product', $cheapest['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
        $this->assertEquals('The most expensive product', $mostExpensive['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
    }

    protected function itReturnsOnlySaleableProductsDirectlyFromDatabase(): void
    {
        $result = $this->dataProvider->getProducts([
            'product_ids' => [337, 333, 334],
            'collection_type' => \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider::COLLECTION_TYPE_DATABASE
        ]);

        $this->assertCount(2, $result, __FUNCTION__ . ' Only products in stock should be provided');

        $cheapest = array_shift($result);
        $mostExpensive = array_shift($result);

        $this->assertEquals('Cheapest product', $cheapest['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
        $this->assertEquals('The most expensive product', $mostExpensive['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
    }

    protected function itFiltersProperly(): void
    {
        $result = $this->dataProvider->getProducts(['filter' => 'daily_deal']);
        $this->assertCount(2, $result, __FUNCTION__ . ': It should return 2 products with daily deal');
    }

    protected function itFiltersAndLimitsProperly(): void
    {
        $result = $this->dataProvider->getProducts(['filter' => 'daily_deal', 'limit' => 1]);
        $this->assertCount(1, $result, __FUNCTION__ . ': It should return only one product with daily deal');
    }

    protected function itSortsProperlyByBestsellers(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'bestsellers_amount', 'order_type' => 'DESC']);

        $this->assertEquals('The most expensive product', $result[0]['name']);
        $this->assertEquals('The middle product', $result[1]['name']);
        $this->assertEquals('Cheapest product', $result[2]['name']);

        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'bestsellers_amount', 'order_type' => 'ASC']);

        $this->assertEquals('Cheapest product', $result[0]['name']);
        $this->assertEquals('The middle product', $result[1]['name']);
        $this->assertEquals('The most expensive product', $result[2]['name']);
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php
     * @magentoConfigFixture current_store daily_deal/general/active 1
     * @magentoConfigFixture current_store daily_deal/general/use_qty_limitation 1
     */
    public function testItReturnsDailyDealOffer(): void
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertArrayHasKey('dailyDealOffer', $result[0]);
        $this->assertArrayHasKey('deal', $result[0]['dailyDealOffer']);

        $this->assertTrue($result[0]['dailyDealOffer']['deal']);

        $this->assertEquals(50, $result[0]['dailyDealOffer']['items']);
        $this->assertEquals(60, $result[0]['dailyDealOffer']['initialAmount']);
        $this->assertEquals(1521417600, $result[0]['dailyDealOffer']['from']);
        $this->assertEquals(1931932800, $result[0]['dailyDealOffer']['to']);
        $this->assertEquals(5.00, $result[0]['dailyDealOffer']['price'], '', 2);
        $this->assertEquals('none', $result[0]['dailyDealOffer']['displayType']);
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php
     * @magentoDataFixture Magento/ConfigurableProduct/_files/product_configurable.php
     */
    public function testItGetAddToCartButtonHtml(): void
    {
        $product = $this->productRepository->get('cheapest');
        $resultButton = $this->dataProvider->getAddToCartButtonHtml($product);
        $result = strpos($resultButton, 'Add to cart');

        $this->assertNotFalse($result);

        $product = $this->productRepository->get('configurable');
        $resultButton = $this->dataProvider->getAddToCartButtonHtml($product);
        $result = strpos($resultButton, 'Configure');

        $this->assertNotFalse($result);

        $product = $this->productRepository->get('out_of_stock_product');
        $resultButton = $this->dataProvider->getAddToCartButtonHtml($product);

        $this->assertEquals('', $resultButton);
    }

    /**
     * The following scenario will break the price index on purpose to check if all product entities
     * are still returned correctly based on data returned from ElasticSearch
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/products.php
     * @magentoDataFixture Magento/ConfigurableProduct/_files/product_configurable.php
     */
    public function testItReturnsIdentitiesBasedOnElasticSearchResponse(): void
    {
        $connection = $this->objectManager->get(\Magento\Framework\App\ResourceConnection::class)->getConnection();

        $priceIndexTable = $connection->getTableName('catalog_product_index_price');
        $connection->delete($priceIndexTable, ['entity_id = ?' => 333]);

        $result = $this->dataProvider->getProducts(['category_id' => 333], true);
        $product = $result[334];

        $this->assertCount(2, $result);
        $this->assertEquals(
            ['cat_p_335', 'cat_p_334', 'cat_p_333'],
            $product->getProductIdentitiesFromElasticsearch()
        );
    }
}
