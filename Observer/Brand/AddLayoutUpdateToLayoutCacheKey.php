<?php

namespace MageSuite\ContentConstructorFrontend\Observer\Brand;

class AddLayoutUpdateToLayoutCacheKey implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Magento\Framework\View\Layout\LayoutCacheKeyInterface
     */
    protected $layoutCacheKey;

    public function __construct(\Magento\Framework\View\Layout\LayoutCacheKeyInterface $layoutCacheKey)
    {
        $this->layoutCacheKey = $layoutCacheKey;
    }

    /**
     * This observer adds md5 of contents of layout update xml so brand page is correctly refreshed when layout update xml
     * is changed during brand save or staging event
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $brand = $observer->getEvent()->getBrand();

        if ($brand == null) {
            return;
        }

        $contentConstructorContent = $brand->getLayoutUpdateXml();

        if (empty($contentConstructorContent)) {
            return;
        }

        $this->layoutCacheKey->addCacheKeys(md5($contentConstructorContent));
    }
}
