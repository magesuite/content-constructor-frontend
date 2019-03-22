<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ProductGrid extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/product_grid.phtml';

    public function getIdentities()
    {
        /** @var \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid $viewModel */
        $viewModel = $this->getViewModel();

        $products = $viewModel->getProducts();

        if(empty($products)) {
            return [];
        }

        $identities = [];

        /** @var \Magento\Catalog\Model\Product $product */
        foreach($products as $product) {
            $identities = array_merge($identities, $product->getIdentities());
        }

        return $identities;
    }
}