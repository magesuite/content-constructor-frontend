<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class CmsPageRenderer
{
    /**
     * @var array
     */
    protected $themesCache = [];

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var \Magento\Framework\View\Design\Theme\ThemeProviderInterface
     */
    protected $themeProvider;

    /**
     * @var \Magento\Framework\View\Design
     */
    protected $design;

    /**
     * @var \Magento\Framework\View\Element\BlockFactory
     */
    protected $blockFactory;

    /**
     * @var \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper
     */
    protected $xmlToComponentConfigurationMapper;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Design\Theme\ThemeProviderInterface $themeProvider,
        \Magento\Framework\View\DesignInterface $design,
        \Magento\Framework\View\Element\BlockFactory $blockFactory,
        \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper $xmlToComponentConfigurationMapper,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->themeProvider = $themeProvider;
        $this->design = $design;
        $this->blockFactory = $blockFactory;
        $this->xmlToComponentConfigurationMapper = $xmlToComponentConfigurationMapper;
        $this->logger = $logger;
    }

    public function renderPageContents($layoutUpdateXml, $storeId)
    {
        $this->setTheme($storeId);

        $components = $this->getComponentsFromXml($layoutUpdateXml);

        if(empty($components)){
            return '';
        }

        $content = $this->renderComponents($components);

        return $content;
    }

    protected function getTheme($themeId)
    {
        if (!isset($this->themesCache[$themeId])) {
            $this->themesCache[$themeId] = $this->themeProvider->getThemeById($themeId);
        }

        return $this->themesCache[$themeId];
    }

    public function setTheme($storeId)
    {
        $themeId = $this->scopeConfig->getValue(
            \Magento\Framework\View\DesignInterface::XML_PATH_THEME_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        );

        /** @var $theme \Magento\Framework\View\Design\ThemeInterface */
        $theme = $this->getTheme($themeId);

        $this->design->setDesignTheme($theme);
    }

    public function getComponentsFromXml($layoutUpdateXml)
    {
        if(!$layoutUpdateXml){
            return [];
        }

        return $this->xmlToComponentConfigurationMapper->map($layoutUpdateXml);
    }

    public function renderComponents($components)
    {
        $content = '';

        if (empty($components)) {
            return $content;
        }

        foreach ($components as $component) {
            try {
                $block = $this->getComponentBlock($component);
                $content .= $block->toHtml();
            } catch(\Exception $e) {
                $this->logger->error($e);
            }
        }

        return $content;
    }

    public function getComponentBlock($component)
    {
        return $this->blockFactory->createBlock(\MageSuite\ContentConstructorFrontend\Block\Component::class, [
            'data' => $component
        ]);
    }
}