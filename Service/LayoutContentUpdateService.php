<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class LayoutContentUpdateService
{
    /**
     * @var \MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper
     */
    protected $configurationToXmlMapper;

    public function __construct(\MageSuite\ContentConstructorAdmin\Repository\Xml\ComponentConfigurationToXmlMapper $configurationToXmlMapper)
    {
        $this->configurationToXmlMapper = $configurationToXmlMapper;
    }

    public function addContentConstructorToUpdateLayout(\Magento\Framework\View\Result\Page &$resultPage, $subject)
    {
        $updateContentJson = $subject->getContentConstructorContent();
        $updateContentXml = $this->configurationToXmlMapper->map(json_decode($updateContentJson, true), $subject->getLayoutUpdateXml());

        $resultPage->getLayout()->getUpdate()->addUpdate($updateContentXml);
    }
}