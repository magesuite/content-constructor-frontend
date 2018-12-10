<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class Button extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/button.phtml';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\Button|null
     */
    protected $viewModel = null;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Model\Component\ButtonFactory $viewModelFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->viewModelFactory = $viewModelFactory;
    }

    /**
     * @return \MageSuite\ContentConstructorFrontend\Model\Component\Button|null
     */
    public function getViewModel() {
        if($this->viewModel === null) {
            $this->viewModel = $this->viewModelFactory->create(['data' => $this->getData()]);
        }

        return $this->viewModel;
    }
}