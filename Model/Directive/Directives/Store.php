<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives;

class Store extends \MageSuite\ContentConstructorFrontend\Model\Directive\Directive
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
        $urlArgument = isset($arguments['url']) ? $arguments['url'] : '';

        return $this->urlInterface->getUrl($urlArgument);
    }
}