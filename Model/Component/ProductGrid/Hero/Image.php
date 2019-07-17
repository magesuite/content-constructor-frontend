<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\Hero;

class Image extends \Magento\Framework\DataObject
{
    /**
     * @var \MageSuite\ContentConstructor\Service\MediaResolver
     */
    protected $mediaResolver;

    public function __construct(
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        array $data = [])
    {
        parent::__construct($data);

        $this->mediaResolver = $mediaResolver;
    }
    public function getSrc()
    {
        $hero = $this->getData();

        if (!empty($hero['decoded_image'])) {
            return $this->mediaResolver->resolve($hero['decoded_image']);
        }
    }

    public function getSrcSet()
    {
        $hero = $this->getData();

        if (!empty($hero['decoded_image'])) {
            return $this->mediaResolver->resolveSrcSet($hero['decoded_image']);
        }
    }

    public function getWebpSrcSet()
    {
        $srcSet = $this->getSrcSet();

        return $this->mediaResolver->resolveWebpSrcSet($srcSet);
    }

    public function getAlt()
    {
        $hero = $this->getData();

        if (isset($hero['image']['alt']) and !empty($hero['image']['alt'])) {
            return $hero['image']['alt'];
        } else if (isset($hero['headline']) and !empty($hero['headline'])) {
            return $hero['headline'];
        } else if (isset($hero['subheadline']) and !empty($hero['subheadline'])) {
            return $hero['subheadline'];
        }

        return  __('Teaser image');
    }
}