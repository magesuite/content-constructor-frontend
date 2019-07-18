<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser;

class Slide extends \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
{
    public function __construct(
        \MageSuite\ContentConstructor\Service\UrlResolver $urlResolver,
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        array $data = []
    ) {
        parent::__construct($urlResolver, $mediaResolver, $data);
        $this->urlResolver = $urlResolver;
        $this->mediaResolver = $mediaResolver;
    }

    public function getSrc()
    {
        $data = $this->getData();

        if (!empty($data['image']['decoded'])) {
            return $this->mediaResolver->resolve($data['image']['decoded']);
        }
    }

    public function getSrcSet()
    {
        $data = $this->getData();

        if (!empty($data['image']['decoded'])) {
            return $this->mediaResolver->resolveSrcSet($data['image']['decoded']);
        }
    }

    public function getAlt()
    {
        $teaser = $this->getData();

        if (isset($teaser['image']['alt']) and !empty($teaser['image']['alt'])) {
            return $teaser['image']['alt'];
        } else if (isset($teaser['headline']) and !empty($teaser['headline'])) {
            return $teaser['headline'];
        } else if (isset($teaser['subheadline']) and !empty($teaser['subheadline'])) {
            return $teaser['subheadline'];
        }

        return  __('Teaser image');
    }
}