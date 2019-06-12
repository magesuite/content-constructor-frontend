<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product;

class Price extends AbstractProductDirective
{
    /**
     * @var \Magento\Framework\Pricing\Helper\Data
     */
    protected $pricingHelper;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\Helper\Data $pricingHelper
    )
    {
        parent::__construct($productRepository);

        $this->pricingHelper = $pricingHelper;
    }

    public function getValue()
    {
        $product = $this->getProduct();
        $price = $product->getFinalPrice();

        $arguments = $this->getArguments();

        if (isset($arguments['withCurrency']) and !filter_var($arguments['withCurrency'], FILTER_VALIDATE_BOOLEAN)) {
            return $price;
        }

        return $this->pricingHelper->currency($price, true, false);
    }
}