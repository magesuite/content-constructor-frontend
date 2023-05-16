<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\HeroCarousel;

class Slide extends \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
{
    public function getHref() {
        $hero = $this->getData();

        if (isset($hero['href']) and !empty($hero['href'])) {
            return $this->urlResolver->resolve($hero['href']);
        }

        return null;
    }
}
