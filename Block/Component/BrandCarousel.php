<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class BrandCarousel extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/brand_carousel.phtml';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\BrandCarousel|null
     */
    protected $viewModel = null;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Model\Component\BrandCarouselFactory $viewModelFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->viewModelFactory = $viewModelFactory;
    }

    /**
     * @return \MageSuite\ContentConstructorFrontend\Model\Component\BrandCarousel|null
     */
    public function getViewModel() {
        if($this->viewModel === null) {
            $this->viewModel = $this->viewModelFactory->create(['data' => $this->getData()]);
        }

        return $this->viewModel;
    }
}