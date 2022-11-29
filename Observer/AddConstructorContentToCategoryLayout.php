<?php

namespace MageSuite\ContentConstructorFrontend\Observer;

class AddConstructorContentToCategoryLayout implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper
     */
    protected $configurationToXmlMapper;

    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * @var \Magento\Framework\View\Layout\LayoutCacheKeyInterface
     */
    protected $layoutCacheKey;

    public function __construct(
        \MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper $configurationToXmlMapper,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\View\Layout\LayoutCacheKeyInterface $layoutCacheKey
    ) {
        $this->configurationToXmlMapper = $configurationToXmlMapper;
        $this->registry = $registry;
        $this->layoutCacheKey = $layoutCacheKey;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $event = $observer->getEvent();
        $action = $event->getData("full_action_name");
        $category = $this->registry->registry("current_category");

        if ($action === 'catalog_category_view' && $category && $category->getContentConstructorContent() !== null) {
            $components = json_decode($category->getContentConstructorContent(), true);
            $layoutUpdateXml = $this->configurationToXmlMapper->map($components);

            /** @var \Magento\Framework\View\Layout $layout */
            $layout = $event->getData("layout");
            $layout->getUpdate()->addUpdate($layoutUpdateXml);
            $this->layoutCacheKey->addCacheKeys(md5($layoutUpdateXml));
        }
    }
}
