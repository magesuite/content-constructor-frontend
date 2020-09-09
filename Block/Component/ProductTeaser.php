<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ProductTeaser extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/product_teaser.phtml';

    public function getIdentities()
    {
        /** @var \MageSuite\ContentConstructorFrontend\Model\Component\ProductTeaser $viewModel */
        $viewModel = $this->getViewModel();

        $product = $viewModel->getProductData();

        return $product['identities'];
    }
}
