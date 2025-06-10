<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Setup\Patch\Data;

class CleanInstagramData implements \Magento\Framework\Setup\Patch\DataPatchInterface
{
    public function __construct(
        protected \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface,
        protected \Magento\Framework\App\Config\Storage\WriterInterface $configWriter,
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfiguration,
    ) {}

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    public function apply(): void
    {
        $accessToken = $this->scopeInterface->getValue(\MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram::XML_PATH_CC_FRONTEND_INSTAGRAM_ACCESS_TOKEN);
        $this->instagramConfiguration->setAccessToken($accessToken);

        $this->configWriter->delete('cc_frontend_extension/instagram_component/access_token_refresh_threshold');
        $this->configWriter->delete('cc_frontend_extension/instagram_component/media_api_url');
        $this->configWriter->delete('cc_frontend_extension/instagram_component/user_id_api_url');
    }
}
