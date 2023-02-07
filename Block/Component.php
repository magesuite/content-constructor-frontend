<?php

namespace MageSuite\ContentConstructorFrontend\Block;

class Component extends \Magento\Framework\View\Element\AbstractBlock implements \Magento\Framework\View\Element\BlockInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_LIFETIME = 86400;
    const CACHE_KEY = 'component_html_%s_%s';

    const CACHE_IDENTIFIER_PREFIX = 'identifier_';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ComponentPool
     */
    protected $componentPool;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Block\Component\AbstractComponent
     */
    protected $component;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $customerSession;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Service\ComponentPool $componentPool,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->storeManager = $storeManager;
        $this->customerSession = $customerSession;
        $this->componentPool = $componentPool;

        $componentHash = substr(md5(serialize($this->getData())), 0, 8);
        $store = $this->storeManager->getStore();

        $cacheKey = sprintf(
            self::CACHE_KEY,
            $componentHash,
            $store->getId()
        );

        $cacheKeyAdditionalElements = [
            $store->getCurrentCurrencyCode(),
            $this->customerSession->getCustomerGroupId()
        ];

        $serverName = $context->getRequest()->getServer('HTTP_HOST');
        $actionName = $this->getRequest()->getFullActionName();

        if ($serverName != null and !empty($serverName)) {
            $cacheKeyAdditionalElements[] = $serverName;
        }

        $cacheKey .= '_' . md5(implode('|', $cacheKeyAdditionalElements));

        if ($actionName != 'content_constructor_preview_view') {
            $this->setData('cache_key', $cacheKey);
            $this->setData('cache_lifetime', self::CACHE_LIFETIME);
        }
    }

    public function getIdentities()
    {
        $identitiesIdentifier = self::CACHE_IDENTIFIER_PREFIX . $this->getCacheKey();

        if (!$this->component) {
            $identitiesString = $this->_cache->load($identitiesIdentifier);
            return $identitiesString ? explode(',', $identitiesString) : [];
        }

        try {
            $identities = $this->component->getIdentities();
        }
        catch(\Exception | \Error $e) {
            $this->_logger->critical(sprintf(
                'Error during Content Constructor component identities fetching: %s',
                $e->getMessage()
            ));

            $identities = [];
        }

        if (is_string($identities)) {
            $identities = [$identities];
        }

        $identitiesString = implode(',', $identities);
        $this->_cache->save($identitiesString, $identitiesIdentifier, $identities);

        return $identities;
    }

    public function _toHtml()
    {
        if (!$this->hasData('type')) {
            throw new \InvalidArgumentException("Block must receive it's type in configuration");
        }

        $type = $this->getData('type');
        $componentData = $this->getData('data');

        $componentClassName = $this->componentPool->getClassName($type);

        if ($componentClassName == null) {
            return '';
        }

        try {
            $this->component = $this
                ->getLayout()
                ->createBlock($componentClassName, '', ['data' => $componentData]);

            $html = $this->component->toHtml();
        }
        catch(\Exception | \Error $e) {
            $this->_logger->critical(sprintf(
                'Error during Content Constructor component rendering: %s',
                $e->getMessage()
            ));

            $html = '';
        }

        return $html;
    }

    public function getComponent()
    {
        return $this->component;
    }
}
