<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives;

class Store extends \MageSuite\DynamicDirectives\Model\Directive
{
    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $urlInterface;

    /**
     * Store constructor.
     * @param \Magento\Framework\UrlInterface $urlInterface
     */
    public function __construct(\Magento\Framework\UrlInterface $urlInterface)
    {
        $this->urlInterface = $urlInterface;
    }

    public function getValue()
    {
        $arguments = $this->getArguments();

        if (isset($arguments['direct_url'])) {
            return $this->urlInterface->getDirectUrl($arguments['direct_url']);
        } else if ( isset($arguments['url'])) {
            return $this->urlInterface->getUrl($arguments['url']);
        } else {
            return '';
        }
    }
}
