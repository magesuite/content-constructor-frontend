<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class CmsTeaser extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/cms_teaser.phtml';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaser|null
     */
    protected $viewModel = null;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaserFactory
     */
    protected $viewModelFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaserFactory $viewModelFactory,
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