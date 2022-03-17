<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class StaticBlock extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/static_block.phtml';

    public function getIdentities()
    {
        /** @var \MageSuite\ContentConstructorFrontend\Model\Component\StaticBlock $viewModel */
        $viewModel = $this->getViewModel();

        return $viewModel->getIdentities();
    }
}
