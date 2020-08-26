<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

class DailyDealTeaserDataProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider
     */
    private $dataProvider;

    public function setUp(): void {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->dataProvider = $this->objectManager
            ->get(\MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider::class);

    }

    public function testItImplementsProductCarouselDataProviderInterface() {
        $this->assertInstanceOf(
            \MageSuite\ContentConstructor\Components\DailyDealTeaser\DataProvider::class,
            $this->dataProvider
        );
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadProductsFixture
     * @magentoConfigFixture current_store daily_deal/general/active 1
     * @magentoConfigFixture current_store daily_deal/general/use_qty_limitation 1
     */
    public function testItReturnsDailyDealOfferData()
    {
        $result = $this->dataProvider->getProduct(
            [
                'category_id' => 333,
                'filter_attributes' => [
                    'daily_deal_enabled' => [
                        'value' => 1,
                        'operator' => 'eq'
                    ]
                ]
            ]
        );

        $this->assertArrayHasKey('dailyDealOffer', $result);
        $this->assertArrayHasKey('deal', $result['dailyDealOffer']);
        $this->assertArrayHasKey('discountPercentage', $result['dailyDealOffer']);
        $this->assertArrayHasKey('src', $result['image']);
        $this->assertArrayHasKey('srcSet', $result['image']);
        $this->assertArrayHasKey('brandName', $result);

        $this->assertTrue($result['dailyDealOffer']['deal']);

        $this->assertEquals(50, $result['dailyDealOffer']['items']);
        $this->assertEquals(60, $result['dailyDealOffer']['initialAmount']);
        $this->assertEquals(1521417600, $result['dailyDealOffer']['from']);
        $this->assertEquals(1931932800, $result['dailyDealOffer']['to']);
        $this->assertEquals(5.00, $result['dailyDealOffer']['price'], '', 2);
        $this->assertEquals('none', $result['dailyDealOffer']['displayType']);
    }

    /**
     * @magentoAppArea frontend
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadProductsFixture
     * @magentoConfigFixture current_store daily_deal/general/active 1
     * @magentoConfigFixture current_store daily_deal/general/use_qty_limitation 1
     */
    public function testItReturnsNullOnEmptyDeal()
    {
        $result = $this->dataProvider->getProduct(
            [
                'category_id' => 303,
                'product_ids' => '800',
                'filter_attributes' => [
                    'daily_deal_enabled' => [
                        'value' => 1,
                        'operator' => 'eq'
                    ]
                ]
            ]
        );
        $this->assertNull($result);
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
}
