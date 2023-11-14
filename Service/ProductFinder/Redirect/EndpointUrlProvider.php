<?php

namespace MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect;

class EndpointUrlProvider implements \MageSuite\ContentConstructor\Components\ProductFinder\EndpointUrlProvider
{
    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $url;

    public function __construct(\Magento\Framework\UrlInterface $url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url->getUrl('contentconstructor/finder/redirect');
    }
}
