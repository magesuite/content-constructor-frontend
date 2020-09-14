<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product;

class DiscountPercentage extends AbstractProductDirective
{
    /**
     * @var \MageSuite\Discount\Helper\Discount
     */
    protected $discountHelper;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \MageSuite\Discount\Helper\Discount $discountHelper
    ) {
        parent::__construct($productRepository);

        $this->discountHelper = $discountHelper;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        $product = $this->getProduct();

        $salePercentage = $this->discountHelper->getSalePercentage($product);

        return (int)$salePercentage;
    }
}
