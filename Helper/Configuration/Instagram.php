<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Helper\Configuration;

class Instagram
{
    public const XML_PATH_CC_FRONTEND_INSTAGRAM_CLIENT_ID = 'cc_frontend_extension/instagram_component/client_id';
    public const XML_PATH_CC_FRONTEND_INSTAGRAM_CLIENT_SECRET = 'cc_frontend_extension/instagram_component/client_secret';
    public const XML_PATH_CC_FRONTEND_INSTAGRAM_ACCESS_TOKEN = 'cc_frontend_extension/instagram_component/access_token';
    public const XML_PATH_CC_FRONTEND_INSTAGRAM_USER_ID = 'cc_frontend_extension/instagram_component/user_id';
    public const XML_PATH_CC_FRONTEND_INSTAGRAM_CONSENT_REQUIRED = 'cc_frontend_extension/instagram_component/consent_required';
    public const AUTHORIZATION_ENDPOINT = 'contentconstructor/instagram/authorize';

    public function __construct(
        protected \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface,
        protected \Magento\Framework\App\Config\Storage\WriterInterface $configWriter,
        protected \Magento\Framework\Encryption\EncryptorInterface $encryptor,
        protected \Magento\Framework\UrlInterface $urlBuilder,
    ) {}

    public function getInstagramUserId(): ?int
    {
        $userId = $this->scopeInterface->getValue(self::XML_PATH_CC_FRONTEND_INSTAGRAM_USER_ID);

        return $userId ? (int)$userId : null;
    }

    public function setInstagramUserId(int $userId): void
    {
        $this->configWriter->save(self::XML_PATH_CC_FRONTEND_INSTAGRAM_USER_ID, $userId);
    }

    public function getAccessToken(): ?string
    {
        $token = $this->scopeInterface->getValue(self::XML_PATH_CC_FRONTEND_INSTAGRAM_ACCESS_TOKEN);

        if (empty($this)) {
            return null;
        }

        return $this->encryptor->decrypt($token);
    }

    public function setAccessToken(?string $accessToken): void
    {
        if ($accessToken) {
            $token = $this->encryptor->encrypt($accessToken);
            $this->configWriter->save(self::XML_PATH_CC_FRONTEND_INSTAGRAM_ACCESS_TOKEN, $token);

            return;
        }

        $this->configWriter->delete(self::XML_PATH_CC_FRONTEND_INSTAGRAM_ACCESS_TOKEN);
    }

    public function getClientId(): ?string
    {
        return $this->scopeInterface->getValue(self::XML_PATH_CC_FRONTEND_INSTAGRAM_CLIENT_ID);
    }

    public function getClientSecret(): ?string
    {
        $token = $this->scopeInterface->getValue(self::XML_PATH_CC_FRONTEND_INSTAGRAM_CLIENT_SECRET);

        if (empty($this)) {
            return null;
        }

        return $this->encryptor->decrypt($token);
    }

    public function setClientSecret(string $accessToken): void
    {
        $token = $this->encryptor->encrypt($accessToken);

        $this->configWriter->save(self::XML_PATH_CC_FRONTEND_INSTAGRAM_CLIENT_SECRET, $token);
    }

    public function getRedirectUrl(): string
    {
        $url = $this->urlBuilder->getUrl(self::AUTHORIZATION_ENDPOINT, ['_type' => \Magento\Framework\UrlInterface::URL_TYPE_DIRECT_LINK]);
        $url = rtrim($url, '/');

        return $url;
    }

    public function isInstagramConsentRequired(): bool
    {
        return $this->scopeInterface->isSetFlag(self::XML_PATH_CC_FRONTEND_INSTAGRAM_CONSENT_REQUIRED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
