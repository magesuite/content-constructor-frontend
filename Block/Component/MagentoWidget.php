<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class MagentoWidget extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/magento_widget.phtml';

    public function getIdentities(): array
    {
        /** @var \MageSuite\ContentConstructorFrontend\Model\Component\MagentoWidget $viewModel */
        $viewModel = $this->getViewModel();

        return $viewModel->getIdentities();
    }
}
