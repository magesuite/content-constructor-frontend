<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Directive\Directives\Product;

class StoreTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Store
     */
    protected $directive;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->directive = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Store::class);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsCorrectUrl()
    {
        $this->directive->setArguments(['url' => 'storelocator']);

        $url = $this->directive->getValue();

        $this->assertEquals('http://localhost/index.php/storelocator/', $url);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsBaseUrlWhenUrlArgumentIsNotSet()
    {
        $url = $this->directive->getValue();

        $this->assertEquals('http://localhost/index.php/', $url);
    }
}
