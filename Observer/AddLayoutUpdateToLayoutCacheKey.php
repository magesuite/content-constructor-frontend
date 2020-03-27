<?php

namespace MageSuite\ContentConstructorFrontend\Observer;

class AddLayoutUpdateToLayoutCacheKey implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Magento\Framework\View\Layout\LayoutCacheKeyInterface
     */
    protected $layoutCacheKey;

    /**
     * @var \MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper
     */
    protected $componentConfigurationToXmlMapper;

    public function __construct(
        \Magento\Framework\View\Layout\LayoutCacheKeyInterface $layoutCacheKey,
        \MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper $componentConfigurationToXmlMapper
    )
    {
        $this->layoutCacheKey = $layoutCacheKey;
        $this->componentConfigurationToXmlMapper = $componentConfigurationToXmlMapper;
    }

    /**
     * This observer adds md5 of contents of layout update xml so cms page is correctly refreshed when layout update xml
     * is changed during cms page save or staging event
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var \Magento\Cms\Model\Page $page */
        $page = $observer->getEvent()->getPage();

        if ($page == null) {
            return;
        }

        $contentConstructorContent = $page->getContentConstructorContent();
        if (empty($contentConstructorContent)) {
            return;
        }

        $configuration = json_decode($contentConstructorContent, true);
        $updateLayoutXml = $this->componentConfigurationToXmlMapper->map($configuration);

        $currentLayoutUpdateXml = $page->getLayoutUpdateXml();

        $page->setLayoutUpdateXml($currentLayoutUpdateXml .$updateLayoutXml);
        $this->layoutCacheKey->addCacheKeys(md5($updateLayoutXml));
    }
}
