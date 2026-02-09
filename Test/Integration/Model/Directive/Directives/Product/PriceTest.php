<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Directive\Directives\Product;

class PriceTest extends \PHPUnit\Framework\TestCase
{
    protected ?\Magento\Framework\App\ObjectManager $objectManager;
    protected ?\MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product\Price $priceDirective;
    protected ?\Magento\Framework\Registry $registry;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();
        $this->priceDirective = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product\Price::class
        );
        $this->registry = $this->objectManager->get(\Magento\Framework\Registry::class);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductPriceWithCurrency(): void
    {
        $this->priceDirective->setArguments(['sku' => 'simple']);

        $price = $this->priceDirective->getValue();

        $this->assertEquals('$10.00', $price);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductPriceWithoutCurrency(): void
    {
        $this->priceDirective->setArguments(['sku' => 'simple', 'withCurrency' => 'false']);

        $price = $this->priceDirective->getValue();

        $this->assertEquals('10.00', $price);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductIdentities(): void
    {
        $this->priceDirective->setArguments(['sku' => 'simple']);

        $identities = $this->priceDirective->getIdentities();

        $this->assertEquals(['cat_p_1'], $identities);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/products.php
     */
    public function testItReturnsProductPriceWithFormat(): void
    {
        $this->priceDirective->setArguments(['sku' => 'simple', 'format' => 'Less than %s']);

        $price = $this->priceDirective->getValue();

        $this->assertEquals('Less than $10.00', $price);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDataFixture Magento/ConfigurableProduct/_files/configurable_products.php
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/_files/configurable_product.php
     */
    public function testItReturnsEmptyTextWithSoldOutProduct(): void
    {
        $this->priceDirective->setArguments(['sku' => 'configurable', 'format' => 'Less than %s']);

        $price = $this->priceDirective->getValue();

        $this->assertEquals('', $price);
    }
}
