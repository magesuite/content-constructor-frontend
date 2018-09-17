<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class HeroCarouselSlider extends HeroCarousel
{
    public function __construct()
    {
        $this->subtitle = 'Slider mobile scenario';
        
        $this->mobileDisplayVariant = [
            'name' => 'Slider',
            'iconId' => 'ml_slider',
            'id' => 'slider',
        ];
    }

}
