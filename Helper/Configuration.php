<?php
namespace MageSuite\ContentConstructorFrontend\Helper;

class Configuration
{
    const INSTAGRAM_ACCESS_TOKEN = 'cc_frontend_extension/instagram_component/access_token';
    const INSTAGRAM_USER_ID = 'cc_frontend_extension/instagram_component/user_id';
    const INSTAGRAM_MEDIA_API_URL = 'cc_frontend_extension/instagram_component/media_api_url';
    const INSTAGRAM_USER_ID_API_URL = 'cc_frontend_extension/instagram_component/user_id_api_url';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeInterface;

    /**
     * @var \Magento\Framework\App\Config\Storage\WriterInterface
     */
    protected $configWriter;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface,
        \Magento\Framework\App\Config\Storage\WriterInterface $configWriter
    )
    {
        $this->scopeInterface = $scopeInterface;
        $this->configWriter = $configWriter;
    }

    public function getInstagramAccessToken()
    {
        return $this->scopeInterface->getValue(self::INSTAGRAM_ACCESS_TOKEN, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getInstagramUserId()
    {
        return $this->scopeInterface->getValue(self::INSTAGRAM_USER_ID, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function setInstagramUserId($userId)
    {
        return $this->configWriter->save(self::INSTAGRAM_USER_ID, $userId);
    }

    public function getInstagramMediaApiUrl($userId, $token)
    {
        $config = $this->scopeInterface->getValue(self::INSTAGRAM_MEDIA_API_URL, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return sprintf($config, $userId, $token);
    }

    public function getInstagramUserIdApiUrl($token)
    {
        $config = $this->scopeInterface->getValue(self::INSTAGRAM_USER_ID_API_URL, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return sprintf($config, $token);
    }
}
