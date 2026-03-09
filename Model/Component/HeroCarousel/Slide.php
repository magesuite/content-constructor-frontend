<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\HeroCarousel;

class Slide extends \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
{
    public function getHref(): ?string
    {
        $hero = $this->getData();

        if (isset($hero['href']) and !empty($hero['href'])) {
            return $this->urlResolver->resolve($hero['href']);
        }

        return null;
    }
}
