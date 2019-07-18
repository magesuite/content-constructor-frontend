<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class GenericSlide extends \Magento\Framework\DataObject
{
    /**
     * @var \MageSuite\ContentConstructor\Service\UrlResolver
     */
    protected $urlResolver;

    /**
     * @var \MageSuite\ContentConstructor\Service\MediaResolver
     */
    protected $mediaResolver;

    public function __construct(
        \MageSuite\ContentConstructor\Service\UrlResolver $urlResolver,
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->urlResolver = $urlResolver;
        $this->mediaResolver = $mediaResolver;
    }

    public function getCta() {
        $data = $this->getData();

        if (!isset($data['cta'])) {
            return null;
        }

        $cta = $data['cta'];
        if (isset($cta['href']) && !empty($cta['href'])) {
            $cta['href'] = $this->urlResolver->resolve($cta['href']);
        }

        return $cta;
    }

    public function getSrc()
    {
        $data = $this->getData();

        if (!empty($data['decodedImage'])) {
            return $this->mediaResolver->resolve($data['decodedImage']);
        }
    }

    public function getSrcSet()
    {
        $data = $this->getData();

        if (!empty($data['decodedImage'])) {
            return $this->mediaResolver->resolveSrcSet($data['decodedImage']);
        }
    }

    public function getWebpSrcSet()
    {
        $srcSet = $this->getSrcSet();

        return $this->mediaResolver->resolveWebpSrcSet($srcSet);
    }

    public function isSvg() {
        $src = $this->getSrc();

        if (empty($src)) {
            return false;
        }

        $extension = pathinfo($src, PATHINFO_EXTENSION);

        return strtolower($extension) == 'svg';
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