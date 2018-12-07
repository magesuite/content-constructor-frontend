<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ImageTeaser extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/image_teaser.phtml';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser|null
     */
    protected $viewModel = null;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaserFactory $viewModelFactory,
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