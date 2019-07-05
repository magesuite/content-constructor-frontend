<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product;

class DiscountPercentage extends AbstractProductDirective
{
    /**
     * @var \MageSuite\Frontend\Helper\Product
     */
    protected $productHelper;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \MageSuite\Frontend\Helper\Product $productHelper
    )
    {
        parent::__construct($productRepository);

        $this->productHelper = $productHelper;
    }

    /**
     * @return int
     * @todo Extract discount logic to separate extension
     */
    public function getValue()
    {
        $product = $this->getProduct();

        $salePercentage = $this->productHelper->getSalePercentage($product);

        return (int)$salePercentage;
    }
}