<?php

namespace MageSuite\ContentConstructorFrontend\Observer\Product;

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
     * This observer adds md5 of contents of layout update xml so product page is correctly refreshed when layout update xml
     * is changed during product save or staging event
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();

        if($product == null) {
            return;
        }

        $layoutUpdate = $product->getCustomLayoutUpdate();

        if(empty($layoutUpdate))  {
            return;
        }

        $this->layoutCacheKey->addCacheKeys(md5($layoutUpdate));
    }
}