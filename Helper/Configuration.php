<?php

namespace MageSuite\ContentConstructorFrontend\Helper;

class Configuration
{
    public const CUSTOM_URL = 'cc_frontend_extension/configuration/custom_url';
    public const INSTAGRAM_ACCESS_TOKEN = 'cc_frontend_extension/instagram_component/access_token';
    public const INSTAGRAM_ACCESS_TOKEN_AUTO_REFRESH = 'cc_frontend_extension/instagram_component/access_token_enable_auto_refresh';
    public const INSTAGRAM_ACCESS_TOKEN_EXPIRATION_DATE = 'cc_frontend_extension/instagram_component/access_token_expiration_date';
    public const INSTAGRAM_ACCESS_TOKEN_REFRESH_THRESHOLD = 'cc_frontend_extension/instagram_component/access_token_refresh_threshold';
    public const INSTAGRAM_USER_ID = 'cc_frontend_extension/instagram_component/user_id';
    public const INSTAGRAM_MEDIA_API_URL = 'cc_frontend_extension/instagram_component/media_api_url';
    public const INSTAGRAM_USER_ID_API_URL = 'cc_frontend_extension/instagram_component/user_id_api_url';
    public const INSTAGRAM_REFRESH_ACCESS_TOKEN_URL = 'cc_frontend_extension/instagram_component/refresh_access_token_url';
    public const PRELOAD_IMAGE_ENABLED_PATH = 'cc_frontend_extension/preload_image/enabled';

    protected \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface;
    protected \Magento\Framework\App\Config\Storage\WriterInterface $configWriter;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface,
        \Magento\Framework\App\Config\Storage\WriterInterface $configWriter
    ) {
        $this->scopeInterface = $scopeInterface;
        $this->configWriter = $configWriter;
    }

    public function getInstagramAccessToken(): ?string
    {
        return $this->scopeInterface->getValue(self::INSTAGRAM_ACCESS_TOKEN, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function setInstagramAccessToken(string $accessToken): void
    {
        $this->configWriter->save(self::INSTAGRAM_ACCESS_TOKEN, $accessToken);
    }

    public function isInstagramAccessTokenAutoRefreshEnabled(): bool
    {
        return $this->scopeInterface->isSetFlag(self::INSTAGRAM_ACCESS_TOKEN_AUTO_REFRESH, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getInstagramAccessTokenExpirationDate(): ?string
    {
        return $this->scopeInterface->getValue(self::INSTAGRAM_ACCESS_TOKEN_EXPIRATION_DATE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function setInstagramAccessTokenExpirationDate(string $expirationDate): void
    {
        $this->configWriter->save(self::INSTAGRAM_ACCESS_TOKEN_EXPIRATION_DATE, $expirationDate);
    }

    public function getInstagramAccessTokenRefreshThreshold(): ?int
    {
        return (int) $this->scopeInterface->getValue(self::INSTAGRAM_ACCESS_TOKEN_EXPIRATION_DATE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getInstagramUserId(): ?string
    {
        return $this->scopeInterface->getValue(self::INSTAGRAM_USER_ID, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function setInstagramUserId(string $userId): void
    {
        $this->configWriter->save(self::INSTAGRAM_USER_ID, $userId);
    }

    public function getInstagramMediaApiUrl(string $userId, string $token): string
    {
        $config = $this->scopeInterface->getValue(self::INSTAGRAM_MEDIA_API_URL, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        return sprintf($config, $userId, $token);
    }

    public function getInstagramUserIdApiUrl(string $token): string
    {
        $config = $this->scopeInterface->getValue(self::INSTAGRAM_USER_ID_API_URL, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        return sprintf($config, $token);
    }

    public function getInstagramRefreshAccessTokenUrl(): string
    {
        return $this->scopeInterface->getValue(self::INSTAGRAM_REFRESH_ACCESS_TOKEN_URL, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function isPreloadImageEnabled(): bool
    {
        return $this->scopeInterface->isSetFlag(self::PRELOAD_IMAGE_ENABLED_PATH, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getCustomUrl(): string
    {
        return (string) $this->scopeInterface->getValue(self::CUSTOM_URL);
    }
}
