<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ProductFinder extends \Magento\Framework\DataObject
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\EndpointUrlProvider
     */
    protected $endpointUrlProvider;

    /**
     * @var \MageSuite\ContentConstructor\Service\MediaResolver
     */
    protected $mediaResolver;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\EndpointUrlProvider $endpointUrlProvider,
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        array $data = []
    )
    {
        parent::__construct($data);
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
