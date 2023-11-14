<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Service\ProductFinder\Redirect;

class UrlGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\UrlGenerator
     */
    protected $urlGenerator;

    public function setUp()
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->urlGenerator = $this->objectManager
            ->create(\MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\UrlGenerator::class);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/multiselect_attribute.php
     * @magentoDataFixture Magento/Catalog/_files/category.php
     */
    public function testItReturnsCorrectUrlWhenCategoryAndAttributesExist()
    {
        $categoryId = 333;

        $attributesValues = [
            "multiselect_attribute" => [
                "values" => ['Option 1', 'Option 2']
            ],
            "price" => [
                "range" => ["10", "333"]
            ],
        ];

        $expectedUrl = 'http://localhost/index.php/category-1.html?search_origin=product_finder&multiselect_attribute%5B0%5D=Option+1&multiselect_attribute%5B1%5D=Option+2&price=10-333';

        $this->assertEquals($expectedUrl, $this->urlGenerator->generateUrl($categoryId, $attributesValues));
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Catalog/_files/multiselect_attribute.php
     * @magentoDataFixture Magento/Catalog/_files/category.php
     */
    public function testItReturnsValuesOnlyForExistingAttributes()
    {
        $categoryId = 333;

        $attributesValues = [
            'multiselect_attribute' => [
                "values" => ['Option 1', 'Option 2']
            ],
            'nonexisting_attribute' => [
                "values" => ['Option 1', 'Option 2']
            ]
        ];

        $expectedUrl = 'http://localhost/index.php/category-1.html?search_origin=product_finder&multiselect_attribute%5B0%5D=Option+1&multiselect_attribute%5B1%5D=Option+2';

        $this->assertEquals($expectedUrl, $this->urlGenerator->generateUrl($categoryId, $attributesValues));
    }

    public function testItReturnsNullWhenCategoryDoesNotExist()
    {
        $categoryId = 111;

        $attributesValues = [
            'multiselect_attribute' => [
                "values" => ['Option 1', 'Option 2']
            ],
        ];

        $this->assertNull($this->urlGenerator->generateUrl($categoryId, $attributesValues));
    }
}
