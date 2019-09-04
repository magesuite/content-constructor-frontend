<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives\Product;

class AbstractProductDirective extends \MageSuite\DynamicDirectives\Model\Directive
{
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var \Magento\Catalog\Api\Data\ProductInterface
     */
    protected $product;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    protected function getProduct()
    {
        if ($this->product == null) {
            $arguments = $this->getArguments();

            $this->product = $this->productRepository->get($arguments['sku']);
        }

        return $this->product;
    }

    public function getIdentities()
    {
        $product = $this->getProduct();

        return $product->getIdentities();
    }
}
