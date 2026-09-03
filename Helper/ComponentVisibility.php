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

    public function getVisibilityClass(array $componentConfiguration): string
    {
        $viewConfig = $this->viewConfig->getViewConfig();

        if (!isset($componentConfiguration['componentVisibility'])) {
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

    public function getVisibilityMediaQuery(array $componentConfiguration): string
    {
        if (!isset($componentConfiguration['componentVisibility'])) {
            return '';
        }

        $isVisibleOnMobile = (bool)($componentConfiguration['componentVisibility']['mobile'] ?? false);
        $isVisibleOnDesktop = (bool)($componentConfiguration['componentVisibility']['desktop'] ?? false);

        if ($isVisibleOnMobile === $isVisibleOnDesktop) {
            return '';
        }

        $tabletBreakpoint = (int)$this->viewConfig->getViewConfig()
            ->getVarValue('Magento_Theme', 'breakpoints/tablet');

        if (!$tabletBreakpoint) {
            return '';
        }

        $tabletBreakpointInEm = $tabletBreakpoint / 16;

        if ($isVisibleOnDesktop) {
            return sprintf('(min-width: %sem)', $tabletBreakpointInEm);
        }

        return sprintf('(max-width: %sem)', $tabletBreakpointInEm - 0.01);
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
