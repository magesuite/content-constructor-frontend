<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class CategoryLinks extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/category_links.phtml';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\CategoryLinks|null
     */
    protected $viewModel = null;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Model\Component\CategoryLinksFactory $viewModelFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->viewModelFactory = $viewModelFactory;
    }

    /**
     * @return \MageSuite\ContentConstructorFrontend\Model\Component\CategoryLinks|null
     */
    public function getViewModel() {
        if($this->viewModel === null) {
            $this->viewModel = $this->viewModelFactory->create(['data' => $this->getData()]);
        }

        return $this->viewModel;
    }
}