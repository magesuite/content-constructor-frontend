<?php

namespace MageSuite\ContentConstructorFrontend\Helper;

class ComponentVisibility extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\View\ConfigInterface
     */
    protected $viewConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\View\ConfigInterface $viewConfig
    )
    {
        parent::__construct($context);

        $this->viewConfig = $viewConfig;
    }

    public function getVisibilityClass($componentConfiguration) {
        $viewConfig = $this->viewConfig->getViewConfig();

        if(!isset($componentConfiguration['componentVisibility'])) {
            return '';
        }

        $mobileComponentVisibility = $componentConfiguration['componentVisibility']['mobile'] ?? false;
        $desktopComponentVisibility = $componentConfiguration['componentVisibility']['desktop'] ?? false;
        $visibilityClasses = [];

        if (!$mobileComponentVisibility) {
            $visibilityClasses[] = $viewConfig->getVarValue('MageSuite_ContentConstructorFrontend', 'component_hidden_classes/mobile');
        }

        if (!$desktopComponentVisibility) {
            $visibilityClasses[] = $viewConfig->getVarValue('MageSuite_ContentConstructorFrontend', 'component_hidden_classes/desktop');
        }

        return implode(' ', $visibilityClasses);
    }

    public function isComponentVisibleAtAll($componentConfiguration)
    {
        if (!isset($componentConfiguration['componentVisibility'])) {
            return true;
        }

        $mobileComponentVisibility = $componentConfiguration['componentVisibility']['mobile'] ?? false;
        $desktopComponentVisibility = $componentConfiguration['componentVisibility']['desktop'] ?? false;

        return $mobileComponentVisibility || $desktopComponentVisibility;
    }
}
