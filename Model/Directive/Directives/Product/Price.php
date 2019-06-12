<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product;

class Price extends \MageSuite\ContentConstructorFrontend\Model\Directive\Directive
{
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var \Magento\Catalog\Api\Data\ProductInterface
     */
    protected $product;

    /**
     * @var \Magento\Framework\Pricing\Helper\Data
     */
    protected $pricingHelper;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\Helper\Data $pricingHelper
    )
    {
        $this->productRepository = $productRepository;
        $this->pricingHelper = $pricingHelper;
    }

    protected function getProduct() {
        if($this->product == null) {
            $arguments = $this->getArguments();

            $this->product = $this->productRepository->get($arguments['sku']);
        }

        return $this->product;
    }

    public function getValue()
    {
        $product = $this->getProduct();
        $price = $product->getFinalPrice();

        $arguments = $this->getArguments();

        if(isset($arguments['withCurrency']) and !filter_var($arguments['withCurrency'], FILTER_VALIDATE_BOOLEAN)) {
            return $price;
        }

        return $this->pricingHelper->currency($price, true, false);;
    }

    public function getIdentities()
    {
        $product = $this->getProduct();

        return $product->getIdentities();
    }
}