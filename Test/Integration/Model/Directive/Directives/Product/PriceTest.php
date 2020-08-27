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

    public function setUp(): void
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

        $this->assertEquals('10.00', $price);
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

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductPriceWithFormat()
    {
        $this->directive->setArguments(['sku' => 'simple', 'format' => 'Less than %s']);

        $price = $this->directive->getValue();

        $this->assertEquals('Less than $10.00', $price);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDataFixture Magento/ConfigurableProduct/_files/configurable_products.php
     * @magentoDataFixture loadConfigurableProduct
     */
    public function testItReturnsEmptyTextWithSoldOutProduct()
    {
        $this->directive->setArguments(['sku' => 'configurable', 'format' => 'Less than %s']);

        $price = $this->directive->getValue();

        $this->assertEquals('', $price);
    }

    public static function loadConfigurableProduct()
    {
        require __DIR__ . '/../../../../_files/configurable_product.php';
    }
}
