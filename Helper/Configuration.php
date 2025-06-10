<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Helper;

class Configuration
{
    public const XML_PATH_CC_FRONTEND_CONFIGURATION_CUSTOM_URL = 'cc_frontend_extension/configuration/custom_url';
    public const XML_PATH_CC_FRONTEND_CONFIGURATION_SORT_ALPHABETICALLY_CONFIG_PATH = 'cc_frontend_extension/configuration/sort_alphabetically';
    public const XML_PATH_CC_FRONTEND_PRELOAD_IMAGE_ENABLED = 'cc_frontend_extension/preload_image/enabled';

    public function __construct(
        protected \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface,
        protected \Magento\Framework\App\Config\Storage\WriterInterface $configWriter
    ) {}

    public function getCustomUrl(): string
    {
        return (string)$this->scopeInterface->getValue(self::XML_PATH_CC_FRONTEND_CONFIGURATION_CUSTOM_URL);
    }

    public function isSortAlphabeticallyEnabled(): bool
    {
        return $this->scopeInterface->isSetFlag(self::XML_PATH_CC_FRONTEND_CONFIGURATION_SORT_ALPHABETICALLY_CONFIG_PATH);
    }

    public function isPreloadImageEnabled(): bool
    {
        return $this->scopeInterface->isSetFlag(self::XML_PATH_CC_FRONTEND_PRELOAD_IMAGE_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
