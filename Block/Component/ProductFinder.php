<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ProductFinder extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/product_finder.phtml';

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\EndpointUrlProvider
     */
    protected $endpointUrlProvider;

    /**
     * @var \MageSuite\ContentConstructor\Service\MediaResolver
     */
    protected $mediaResolver;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\EndpointUrlProvider $endpointUrlProvider,
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->endpointUrlProvider = $endpointUrlProvider;
        $this->mediaResolver = $mediaResolver;
    }

    public function getRedirectEndpointUrl() {
        return $this->endpointUrlProvider->getUrl();
    }

    public function getSteps() {
        $steps = $this->getData('steps');
        $steps = $this->mediaResolver->resolveInArray($steps);

        return $steps;
    }
}