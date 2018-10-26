<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid;

class Hero extends \Magento\Framework\DataObject
{
    /**
     * @var \MageSuite\ContentConstructor\Service\UrlResolver
     */
    protected $urlResolver;
    /**
     * @var Hero\ImageFactory
     */
    protected $imageFactory;

    public function __construct(
        \MageSuite\ContentConstructor\Service\UrlResolver $urlResolver,
        \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\Hero\ImageFactory $imageFactory,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->urlResolver = $urlResolver;
        $this->imageFactory = $imageFactory;
    }

    /**
     * @return \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\Hero\Image
     */
    public function getImage() {
        return $this->imageFactory->create(['data' => $this->getData()]);
    }

    public function getHref()
    {
        $hero = $this->getData();

        if (isset($hero['href']) and !empty($hero['href'])) {
            return $this->urlResolver->resolve($hero['href']);
        }

        return null;
    }

    public function isEnabled() {
        $hero = $this->getData();

        return isset($hero['position']) and !empty($hero['position']);
    }


    public function getButtonLabel() {
        $hero = $this->getData();

        if(isset($hero['button']['label']) and !empty($hero['button']['label'])) {
            return $hero['button']['label'];
        }

        return null;
    }
}