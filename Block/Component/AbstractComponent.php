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
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\RenderedStylesState
     */
    protected $renderedStyles;

    /**
     * @var string
     */
    protected $viewModel;

    protected $viewModelInstance;

    /**
     * @var array
     */
    protected $identities = [];

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Helper\ComponentVisibility $componentVisibilityHelper,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \MageSuite\ContentConstructorFrontend\Model\Component\RenderedStylesState $renderedStyles,
        string $viewModel = '',
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->componentVisibilityHelper = $componentVisibilityHelper;
        $this->objectManager = $objectManager;
        $this->renderedStyles = $renderedStyles;
        $this->viewModel = $viewModel;
    }

    /**
     * @return \MageSuite\ContentConstructorFrontend\Model\Component\ViewModel|null
     */
    public function getViewModel()
    {
        if (!$this->viewModelInstance) {
            $this->viewModelInstance = $this->objectManager->create($this->viewModel, ['data' => $this->getData()]);
        }

        return $this->viewModelInstance;
    }

    public function getVisibilityClass()
    {
        return $this->componentVisibilityHelper->getVisibilityClass($this->getData());
    }

    public function getCssOnce($cssPath) {
        $css = '';

        if (!$this->renderedStyles->wasRendered($cssPath)) {
            $this->renderedStyles->addRendered($cssPath);
            $css = '<link rel="stylesheet" href="' . $this->getViewFileUrl($cssPath) . '"/>
            <script>/* defer-ignore */</script>';
        }

        return $css;
    }

    public function addIdentities($identities)
    {
        $this->identities = array_merge($this->identities, $identities);
    }

    public function getIdentities()
    {
        return $this->identities;
    }

    public function toHtml()
    {
        if ($this->componentVisibilityHelper->isComponentVisibleAtAll($this->getData())) {
            return parent::toHtml();
        }

        return '';
    }
}
