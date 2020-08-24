<?php

namespace MageSuite\ContentConstructorFrontend\Observer;

class AddConstructorContentToBrandLayout implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * @var \Magento\Framework\View\Layout\LayoutCacheKeyInterface
     */
    protected $layoutCacheKey;

    public function __construct(
        \Magento\Framework\Registry $registry,
        \Magento\Framework\View\Layout\LayoutCacheKeyInterface $layoutCacheKey
    ) {
        $this->registry = $registry;
        $this->layoutCacheKey = $layoutCacheKey;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $event = $observer->getEvent();
        $action = $event->getData('full_action_name');
        $brand = $this->registry->registry(\MageSuite\BrandManagement\Controller\Index\Index::CURRENT_BRAND);

        if ($action == 'brands_index_index' && $brand) {
            $components = $brand->getLayoutUpdateXml();
            $this->layoutCacheKey->addCacheKeys(md5($components));
        }
    }
}
