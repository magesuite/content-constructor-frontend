<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

class ProductCarouselDataProviderTest extends \PHPUnit\Framework\TestCase
{
    const MESSAGE_SORT_DATE_DESC = ': It does not sort properly by date descending';
    const MESSAGE_SORT_DATE_ASC = ': It does not sort properly by date ascending';

    const MESSAGE_SORT_PRICE_DESC = ': It does not sort properly by price descending';
    const MESSAGE_SORT_PRICE_ASC = ': It does not sort properly by price ascending';

    const MESSAGE_FILTER_NEWEST = ': It does not filter properly new products';

    const MESSAGE_CATEGORY = ': It does not fetch properly from category';
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider
     */
    private $dataProvider;

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $productRepository;

    public function setUp(): void {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->dataProvider = $this->objectManager
            ->get(\MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider::class);

        $this->productRepository = $this->objectManager
            ->get(\Magento\Catalog\Api\ProductRepositoryInterface::class);

        $priceRender = $this->objectManager->get(
            \Magento\Framework\View\LayoutInterface::class
        )->getBlock('product.price.render.default');

        if (!$priceRender) {
            $this->objectManager->get(
                \Magento\Framework\View\LayoutInterface::class
            )->createBlock(
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

    public function testItReturnsEmptyArrayWhenNoResultsAreFound() {
        $this->assertEquals([], $this->dataProvider->getProducts(['category_id' => 444]));
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadProductsFixture
     * @magentoConfigFixture current_store cataloginventory/options/show_out_of_stock 1
     */
    public function testitGetsProductsFromSpecifiedCategoryIncludingOutOfStockProducts()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertCount(4, $result, __FUNCTION__.': All products should be returned');
        $this->assertEquals('Out of stock product', $result[0]['name'], __FUNCTION__.': Out of stock product should be returned');
    }

    public static function loadProductsFixture() {
        require __DIR__.'/_files/products.php';

        $indexerRegistry = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
            ->create(\Magento\Framework\Indexer\IndexerRegistry::class);
        $indexerRegistry->get(\Magento\CatalogSearch\Model\Indexer\Fulltext::INDEXER_ID)->reindexAll();
    }

    public static function loadProductsFixtureRollback() {
        require __DIR__.'/_files/products_rollback.php';
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadProductsFixture
     * @magentoConfigFixture current_store positive_indicators/popular_icon/is_enabled 1
     */
    public function testItReturnsProducts() {
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

    private function itSortsProperlyByPrice()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'price', 'order_type' => 'desc']);

        $this->assertEquals('The most expensive product', $result[0]['name'], __FUNCTION__.self::MESSAGE_SORT_PRICE_DESC);
        $this->assertEquals('The middle product', $result[1]['name'], __FUNCTION__.self::MESSAGE_SORT_PRICE_DESC);
        $this->assertEquals('Cheapest product', $result[2]['name'], __FUNCTION__.self::MESSAGE_SORT_PRICE_DESC);

        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'price', 'order_type' => 'asc']);

        $this->assertEquals('Cheapest product', $result[0]['name'], __FUNCTION__.self::MESSAGE_SORT_PRICE_ASC);
        $this->assertEquals('The middle product', $result[1]['name'], __FUNCTION__.self::MESSAGE_SORT_PRICE_ASC);
        $this->assertEquals('The most expensive product', $result[2]['name'], __FUNCTION__.self::MESSAGE_SORT_PRICE_ASC);
    }

//    @todo: Test is commented out because of compatibility with Magento Commerce, logic needs to be reimplemented
//    public function itFiltersProperlyByNewestProduct()
//    {
//        $result = $this->dataProvider->getProducts(['category_id' => 333, 'filter' => 'new_products']);
//
//        $skus = array_column($result, 'sku');
//
//        $this->assertEquals(['the_most_expensive', 'cheapest'], $skus, __FUNCTION__.self::MESSAGE_FILTER_NEWEST);
//    }

    public function itReturnsCorrectProductPrice()
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

    public function itReturnsCorrectProductQty()
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

    public function itSortsProperlyByBestsellers()
    {
        $this->markTestSkipped('Skipped to test dependency with other module');
        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'bestsellers_amount', 'order_type' => 'DESC']);

        $this->assertEquals('The most expensive product', $result[0]['name']);
        $this->assertEquals('The middle product', $result[1]['name']);
        $this->assertEquals('Cheapest product', $result[2]['name']);

        $result = $this->dataProvider->getProducts(['category_id' => 333, 'order_by' => 'bestsellers_amount', 'order_type' => 'ASC']);

        $this->assertEquals('Cheapest product', $result[0]['name']);
        $this->assertEquals('The middle product', $result[1]['name']);
        $this->assertEquals('The most expensive product', $result[2]['name']);
    }



    private function itGetsProductsFromSpecifiedCategoryIncludingAllSubcategories()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertCount(3, $result, __FUNCTION__.'Specified category should only return 3 products');
    }

    private function itGetsProductsFromVirtualCategoryWithTheInName()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 335]);
        $skus = array_column($result, 'sku');

        $this->assertCount(2, $result, __FUNCTION__.'Specified category should only return 2 products');
        $this->assertEquals(['the_middle_product', 'the_most_expensive'], $skus);
    }

    private function itLimitsProperly()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333, 'limit' => 1]);

        $this->assertCount(1, $result, __FUNCTION__.': It should return only one product with limit 1');
    }

    protected function itFiltersProperly()
    {
        $result = $this->dataProvider->getProducts(['filter' => 'daily_deal']);
        $this->assertCount(2, $result, __FUNCTION__ . ': It should return 2 products with daily deal');
    }

    protected function itFiltersAndLimitsProperly()
    {
        $result = $this->dataProvider->getProducts(['filter' => 'daily_deal', 'limit' => 1]);
        $this->assertCount(1, $result, __FUNCTION__ . ': It should return only one product with daily deal');
    }

    private function itReturnsOnlyInStockProducts()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);
        $this->assertCount(3, $result, __FUNCTION__.': Only in stock products should be returned');
    }

    private function itReturnsOnlyVisibleProducts()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertCount(3, $result, __FUNCTION__.' Only visible products should be returned');
    }

    protected function itReturnsProductsByIds()
    {
        $result = $this->dataProvider->getProducts(['product_ids' => [333, 334]]);

        $this->assertCount(2, $result, __FUNCTION__ . ' Two ids were provided, so only two products should be returned');

        $cheapest = array_shift($result);
        $mostExpensive = array_shift($result);

        $this->assertEquals('Cheapest product', $cheapest['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
        $this->assertEquals('The most expensive product', $mostExpensive['name'], __FUNCTION__ . ' Products should be sorted by provided ids list');
    }

    protected function itReturnsProductsByIdsDirectlyFromDatabase()
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

    protected function itReturnsOnlySaleableProductsDirectlyFromDatabase()
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

    protected function itReturnsProductsBySku()
    {
        $result = $this->dataProvider->getProducts(['skus' => 'cheapest, the_most_expensive']);

        $this->assertCount(2, $result, __FUNCTION__ . ' Only two skus were provided, so only two products should be returned');

        $cheapest = array_shift($result);
        $mostExpensive = array_shift($result);

        $this->assertEquals('Cheapest product', $cheapest['name'], __FUNCTION__ . ' Products should be sorted by provided sku list');
        $this->assertEquals('The most expensive product', $mostExpensive['name'], __FUNCTION__ . ' Products should be sorted by provided sku list');
    }

    protected function itReturnsProductsBySkuDirectlyFromDatabase()
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

    protected function itReturnsCorrectFlagForPopularIcon()
    {
        $result = $this->dataProvider->getProducts(['category_id' => 333]);

        $this->assertTrue($result[0]['popularIconFlag']);
        $this->assertFalse($result[1]['popularIconFlag']);
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadProductsFixture
     * @magentoConfigFixture current_store daily_deal/general/active 1
     * @magentoConfigFixture current_store daily_deal/general/use_qty_limitation 1
     */
    public function testItReturnsDailyDealOffer()
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
     * @magentoDataFixture loadProductsFixture
     * @magentoDataFixture Magento/ConfigurableProduct/_files/product_configurable.php
     */
    public function testItGetAddToCartButtonHtml()
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
     * Following scenario will break price index on purpose in order to check if all products entities
     * are still returned correctly based on data returned from ElasticSearch
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadProductsFixture
     * @magentoDataFixture Magento/ConfigurableProduct/_files/product_configurable.php
     */
    public function testItReturnsIdentitiesBasedOnElasticSearchResponse() {
        $connection = $this->objectManager->get(\Magento\Framework\App\ResourceConnection::class)
            ->getConnection();

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
