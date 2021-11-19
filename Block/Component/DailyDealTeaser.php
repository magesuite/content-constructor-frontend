<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class DailyDealTeaser extends AbstractComponent implements \Magento\Framework\DataObject\IdentityInterface
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/daily_deal_teaser.phtml';

    public function getIdentities()
    {
        $identities = parent::getIdentities();
        $identities[] = \MageSuite\DailyDeal\Model\Offer::CACHE_TAG;

        /** @var \MageSuite\ContentConstructorFrontend\Model\Component\DailyDealTeaser $viewModel */
        $viewModel = $this->getViewModel();
        $product = $viewModel->getProduct();

        if (!$product) {
            return $identities;
        }

        if (!is_array($product) || !isset($product['productObject'])) {
            return $identities;
        }

        $identities = array_merge($identities, $product['productObject']->getIdentities());
        $identities = array_diff($identities, [\Magento\Catalog\Model\Product::CACHE_TAG]);

        return $identities;
    }
}
