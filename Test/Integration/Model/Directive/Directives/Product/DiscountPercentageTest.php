<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Directive\Directives\Product;

class DiscountPercentageTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product\DiscountPercentage
     */
    protected $directive;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->directive = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product\DiscountPercentage::class);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/product_special_price.php
     */
    public function testItReturnsProductDiscountPercentage()
    {
        $this->directive->setArguments(['sku' => 'simple']);

        $price = $this->directive->getValue();

        $this->assertEquals(40, $price);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/product_special_price.php
     */
    public function testItReturnsProductIdentities()
    {
        $this->directive->setArguments(['sku' => 'simple']);

        $identities = $this->directive->getIdentities();

        $this->assertEquals(['cat_p_31'], $identities);
    }
}
