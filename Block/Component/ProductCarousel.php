<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ProductCarousel extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/product_carousel.phtml';

    public function getIdentities()
    {
        /** @var \MageSuite\ContentConstructorFrontend\Model\Component\ProductCarousel $viewModel */
        $viewModel = $this->getViewModel();

        $products = $viewModel->getProducts();

        if(empty($products)) {
            return [];
        }

        $identities = parent::getIdentities();

        /** @var \Magento\Catalog\Model\Product $product */
        foreach($products as $product) {
            $identities = array_merge($identities, $product->getIdentities());
        }

        return $identities;
    }
}