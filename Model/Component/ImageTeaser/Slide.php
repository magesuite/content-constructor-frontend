<?php

declare(strict_types=1);

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

    public function getSrc(): ?string
    {
        $data = $this->getData();

        if (!empty($data['image']['decoded'])) {
            return $this->mediaResolver->resolve($data['image']['decoded']);
        }

        return null;
    }

    public function getSrcSet(): ?string
    {
        $data = $this->getData();

        if (!empty($data['image']['decoded'])) {
            return $this->mediaResolver->resolveSrcSet($data['image']['decoded']);
        }

        return null;
    }

    public function canBeDisplayed(): bool
    {
        return $this->canBeDisplayed->execute($this);
    }

    public function hasPins(): bool
    {
        return !empty($this->_getData('pins')['items']);
    }
}
