<?php
namespace MageSuite\ContentConstructorFrontend\Helper;

class Configuration
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeInterface;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface)
    {
        $this->scopeInterface = $scopeInterface;
    }

    public function getInstagramAccessToken()
    {
        return $this->scopeInterface->getValue('cc_frontend_extension/instagram_component/access_token', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
