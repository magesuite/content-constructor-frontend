<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Directive\Directives\Product;

class PriceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product\Price
     */
    protected $directive;

    public function setUp()
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->directive = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product\Price::class);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductPriceWithCurrency()
    {
        $this->directive->setArguments(['sku' => 'simple']);

        $price = $this->directive->getValue();

        $this->assertEquals('$10.00', $price);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductPriceWithoutCurrency()
    {
        $this->directive->setArguments(['sku' => 'simple', 'withCurrency' => 'false']);

        $price = $this->directive->getValue();

        $this->assertEquals(10.00, $price);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductIdentities()
    {
        $this->directive->setArguments(['sku' => 'simple']);

        $identities = $this->directive->getIdentities();

        $this->assertEquals(['cat_p_1'], $identities);
    }
}