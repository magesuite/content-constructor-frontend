<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ImageTeaser extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/image_teaser.phtml';

    public function getIdentities(): array
    {
        $identities = parent::getIdentities();

        $viewModel = $this->getViewModel();

        if (!$viewModel instanceof \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser) {
            return $identities;
        }

        $identities = array_merge($identities, $viewModel->getPinIdentities());

        return array_unique(array_diff($identities, [\Magento\Catalog\Model\Product::CACHE_TAG]));
    }
}
