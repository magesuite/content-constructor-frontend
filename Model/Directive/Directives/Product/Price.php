<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product;

class Price extends AbstractProductDirective
{
    /**
     * @var \Magento\Framework\Pricing\Helper\Data
     */
    protected $pricingHelper;

    /**
     * @var \Magento\Directory\Model\Currency
     */
    protected $currency;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\Helper\Data $pricingHelper,
        \Magento\Directory\Model\Currency $currency
    )
    {
        parent::__construct($productRepository);

        $this->pricingHelper = $pricingHelper;
        $this->currency = $currency;
    }

    public function getValue()
    {
        $product = $this->getProduct();
        $price = $product->getFinalPrice();

        if($price == 0) {
            return "";
        }

        $arguments = $this->getArguments();

        if (isset($arguments['withCurrency']) and !filter_var($arguments['withCurrency'], FILTER_VALIDATE_BOOLEAN)) {
            $formattedPrice = $this->currency->format($price, ['display' => \Magento\Framework\Currency::NO_SYMBOL], false);
        } else {
            $formattedPrice = $this->pricingHelper->currency($price, true, false);
        }

        if (isset($arguments['format']) and strpos($arguments['format'], "%s") !== false) {
            $formattedPrice = sprintf($arguments['format'], $formattedPrice);
        }

        return $formattedPrice;
    }
}
