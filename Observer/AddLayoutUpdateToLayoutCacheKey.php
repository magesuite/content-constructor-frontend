<?php

namespace MageSuite\ContentConstructorFrontend\Observer;

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
     * This observer adds md5 of contents of layout update xml so cms page is correctly refreshed when layout update xml
     * is changed during cms page save or staging event
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $page = $observer->getEvent()->getPage();

        if($page == null) {
            return;
        }

        $layoutUpdate = $page->getLayoutUpdateXml();

        if(empty($layoutUpdate))  {
            return;
        }

        $this->layoutCacheKey->addCacheKeys(md5($layoutUpdate));
    }
}