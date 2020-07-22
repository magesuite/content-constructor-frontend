<?php
namespace MageSuite\ContentConstructorFrontend\Helper;

class Configuration
{
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
        return $this->scopeInterface->getValue('cc_frontend_extension/instagram_component/access_token', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getInstagramUserId()
    {
        return $this->scopeInterface->getValue('cc_frontend_extension/instagram_component/user_id', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function setInstagramUserId($userId)
    {
        return $this->configWriter->save('cc_frontend_extension/instagram_component/user_id', $userId);
    }
}
