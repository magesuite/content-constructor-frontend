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

    public function __construct(
        \MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper $configurationToXmlMapper,
        \Magento\Framework\Registry $registry
    ) {
        $this->configurationToXmlMapper = $configurationToXmlMapper;
        $this->registry = $registry;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $event = $observer->getEvent();
        $action = $event->getData("full_action_name");
        $category = $this->registry->registry("current_category");

        if ($action == 'catalog_category_view' && $category) {
            $components = json_decode($category->getContentConstructorContent(), true);
            $layoutUpdateXml = $this->configurationToXmlMapper->map($components);

            /** @var \Magento\Framework\View\Layout $layout */
            $layout = $event->getData("layout");
            $layout->getUpdate()->addUpdate($layoutUpdateXml);
        }
    }
}
