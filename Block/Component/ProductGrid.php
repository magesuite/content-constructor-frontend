<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ProductGrid extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/product_grid.phtml';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid|null
     */
    protected $viewModel = null;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ProductGridFactory
     */
    protected $viewModelFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Model\Component\ProductGridFactory $viewModelFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->viewModelFactory = $viewModelFactory;
    }

    public function getViewModel() {
        if($this->viewModel === null) {
            $this->viewModel = $this->viewModelFactory->create(['data' => $this->getData()]);
        }

        return $this->viewModel;
    }
}