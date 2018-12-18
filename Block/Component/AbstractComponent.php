<?php


namespace MageSuite\ContentConstructorFrontend\Block\Component;

class AbstractComponent extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\ComponentVisibility
     */
    protected $componentVisibilityHelper;

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var string
     */
    protected $viewModel;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Helper\ComponentVisibility $componentVisibilityHelper,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        string $viewModel = '',
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->componentVisibilityHelper = $componentVisibilityHelper;
        $this->objectManager = $objectManager;
        $this->viewModel = $viewModel;
    }

    /**
     * @return \MageSuite\ContentConstructorFrontend\Model\Component\ViewModel|null
     */
    public function getViewModel()
    {
        return $this->objectManager->create($this->viewModel, ['data' => $this->getData()]);
    }

    public function getVisibilityClass() {
        return $this->componentVisibilityHelper->getVisibilityClass($this->getData());
    }
}
