<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Helper\Configuration;

class ProductImage
{
    public const XML_PATH_CC_FRONTEND_SWATCH_PREVIEW_IMAGE_ENABLED = 'cc_frontend_extension/swatch_preview_image/enabled';

    public function __construct(protected \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface)
    {
    }

    public function isSwatchPreviewImageEnabled(?int $storeId = null): bool
    {
        return $this->scopeInterface->isSetFlag(
            self::XML_PATH_CC_FRONTEND_SWATCH_PREVIEW_IMAGE_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
