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

    public function canBeDisplayed(): bool
    {
        return $this->canBeDisplayed->execute($this);
    }
}
