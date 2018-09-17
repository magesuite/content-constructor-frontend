<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class HeroCarouselHidden extends HeroCarousel
{
    public function __construct()
    {
        $this->subtitle = 'Hidden mobile scenario';

        $this->mobileDisplayVariant = [
            'name' => 'Hidden',
            'iconId' => 'ml_hidden',
            'id' => 'hidden',
        ];
    }

}