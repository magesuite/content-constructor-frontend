<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

class CmsTeaserDataProviderTest extends \PHPUnit\Framework\TestCase
{
    protected \Magento\Framework\App\ObjectManager $objectManager;

    protected \MageSuite\ContentConstructorFrontend\DataProviders\CmsTeaserDataProvider $dataProvider;

    public function setUp(): void {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->dataProvider = $this->objectManager
            ->get(\MageSuite\ContentConstructorFrontend\DataProviders\CmsTeaserDataProvider::class);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Store/_files/core_fixturestore.php
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/pages.php
     */
    public function testItReturnsCmsPagesByTagsFromPagesAssignedToCurrentAndAllStoreViews(): void {
        $result = $this->dataProvider->getPages([
            'limit' => 8,
            'tags' => 'second,double tag']
        );

        $this->assertCount(3, $result);

        foreach ($result as $pageData) {
            $this->assertArrayHasKey('headline', $pageData);
            $this->assertArrayHasKey('href', $pageData);
            $this->assertArrayHasKey('image', $pageData);
            $this->assertArrayHasKey('src', $pageData['image']);
            $this->assertArrayHasKey('srcSet', $pageData['image']);
        }
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Store/_files/core_fixturestore.php
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/DataProviders/_files/pages.php
     */
    public function testItReturnsCmsPagesByIdsInCorrectOrder(): void {
        $ids = [$this->getCmsPageIdByIdentifier('page_test_tag222'), $this->getCmsPageIdByIdentifier('page_test_tag111')];

        $result = $this->dataProvider->getPages([
            'limit' => 8,
            'ids' => implode(',', $ids)
        ]);

        $this->assertCount(2, $result);

        $this->assertEquals('Cms Test Tag Page222', $result[0]['headline']);
        $this->assertEquals('Cms Test Tag Page111', $result[1]['headline']);
    }


    protected function getCmsPageIdByIdentifier($identifier)
    {
        $page = $this->objectManager->create(\Magento\Cms\Model\Page::class);

        return $page->load($identifier, 'identifier')->getId();
    }
}
