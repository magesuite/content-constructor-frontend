<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class DailyDealTeaser extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/daily_deal_teaser.phtml';

    public function getIdentities()
    {
        $identities = parent::getIdentities();

        /** @var \MageSuite\ContentConstructorFrontend\Model\Component\DailyDealTeaser $viewModel */
        $viewModel = $this->getViewModel();

        $product = $viewModel->getProduct();

        if($product == null) {
            return $identities;
        }

        if(!isset($product['productObject'])) {
            return $identities;
        }

        return array_merge($identities, $product['productObject']->getIdentities());
    }
}
