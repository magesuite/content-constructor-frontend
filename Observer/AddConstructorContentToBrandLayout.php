<?php

namespace MageSuite\ContentConstructorFrontend\Observer;

class AddConstructorContentToBrandLayout implements \Magento\Framework\Event\ObserverInterface
{
    protected \MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper $configurationToXmlMapper;

    protected \Magento\Framework\Registry $registry;

    protected \Magento\Framework\View\Layout\LayoutCacheKeyInterface $layoutCacheKey;

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
        $action = $event->getData('full_action_name');
        $brand = $this->registry->registry(\MageSuite\BrandManagement\Controller\Index\Index::CURRENT_BRAND);

        if ($action != 'brands_index_index' || !$brand) {
            return;
        }

        $contentConstructorContent = $brand->getContentConstructorContent();

        if (empty($contentConstructorContent)) {
            return;
        }

        $components = json_decode($contentConstructorContent, true);
        $layoutUpdateXml = $this->configurationToXmlMapper->map($components);

        $layout = $event->getData('layout');
        $layout->getUpdate()->addUpdate($layoutUpdateXml);

        $this->layoutCacheKey->addCacheKeys(md5($layoutUpdateXml)); //phpcs:ignore
    }
}
