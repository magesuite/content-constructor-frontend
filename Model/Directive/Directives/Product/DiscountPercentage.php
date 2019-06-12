<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product;

class DiscountPercentage extends \MageSuite\ContentConstructorFrontend\Model\Directive\Directive
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
     * @var \MageSuite\Frontend\Helper\Product
     */
    protected $productHelper;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \MageSuite\Frontend\Helper\Product $productHelper
    )
    {
        $this->productRepository = $productRepository;
        $this->productHelper = $productHelper;
    }

    protected function getProduct() {
        if($this->product == null) {
            $arguments = $this->getArguments();

            $this->product = $this->productRepository->get($arguments['sku']);
        }

        return $this->product;
    }

    /**
     * @todo Extract discount logic to separate extension
     * @return float|string|null
     */
    public function getValue()
    {
        $product = $this->getProduct();

        return (int)$this->productHelper->getSalePercentage($product);
    }

    public function getIdentities()
    {
        $product = $this->getProduct();

        return $product->getIdentities();
    }
}