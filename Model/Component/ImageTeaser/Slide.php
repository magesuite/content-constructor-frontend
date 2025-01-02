<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser;

class Slide extends \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
{
    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver,
        protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide\CanBeDisplayedInterface $canBeDisplayed,
        array $data = []
    ) {
        parent::__construct($urlResolver, $mediaResolver, $data);
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

        if (isset($teaser['image_alt']) and !empty($teaser['image_alt'])) {
            return $teaser['image_alt'];
        } else if (isset($teaser['slogan']) and !empty($teaser['slogan'])) {
            return $teaser['slogan'];
        } else if (isset($teaser['description']) and !empty($teaser['description'])) {
            return $teaser['description'];
        }

        return  __('Teaser image');
    }

    public function canBeDisplayed(): bool
    {
        return $this->canBeDisplayed->execute($this);
    }
}
