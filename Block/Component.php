<?php

namespace MageSuite\ContentConstructorFrontend\Block;

class Component extends \Magento\Framework\View\Element\AbstractBlock implements \Magento\Framework\View\Element\BlockInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_LIFETIME = 86400;
    const CACHE_KEY = 'component_html_%s_%s';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ComponentPool
     */
    protected $componentPool;

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
        if (!$this->component) {
            return [];
        }

        $tags = [];

        foreach ($this->component->getIdentities() as $identities) {

            if (is_string($identities)) {
                $identities = [$identities];
            }

            $tags = array_merge($tags, $identities);
        }

        return $tags;
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

        return $this->getLayout()
            ->createBlock($componentClassName, '', ['data' => $componentData])
            ->toHtml();
    }
}
