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
        $identities = isset($product['identities']) ? (array)$product['identities'] : [];
        $identities = array_diff($identities, [\Magento\Catalog\Model\Product::CACHE_TAG]);

        return $identities;
    }
}
