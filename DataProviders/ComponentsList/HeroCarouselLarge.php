<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class HeroCarouselLarge extends HeroCarousel
{
    public function __construct()
    {
        $this->mobileDisplayVariant = [
            'name' => 'Large teaser',
            'iconId' => 'ml_col',
            'id' => 'list',
        ];
    }

}
