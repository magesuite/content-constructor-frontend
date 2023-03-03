<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class HeroCarouselLarge extends DataProviderComponents
{
    public function getBlocks()
    {
        return [
            [
                'type' => 'headline',
                'id' => 'componentfc96',
                'section' => 'content',
                'data' => [
                    'title' => 'hero carousel',
                    'subtitle' => 'mobile scenario : large teaser',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'headline',
                'id' => 'component708c',
                'section' => 'content',
                'data' => [
                    'title' => 'optimizers test',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'hero-carousel',
                'id' => 'component7ff9',
                'section' => 'content',
                'data' => [
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'top left',
                            'description' => 'no optimizer, dark',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'middle left',
                            'description' => 'no optimizer, light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'bottom left',
                            'description' => 'overlay dark 50%',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'center top',
                            'description' => 'overlay light 30%',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 30,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'center',
                            'description' => 'container dark 60%',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'center bottom',
                            'description' => 'container light 60%',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'top right',
                            'description' => 'text shadow light 70%',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => true,
                                        'intensity' => 70,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'middle right',
                            'description' => 'text shadow dark 100%',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => true,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'bottom right',
                            'description' => 'mirrored image',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => true,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'headline',
                'id' => 'componentaa53',
                'section' => 'content',
                'data' => [
                    'title' => 'gradient test',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'hero-carousel',
                'id' => 'component7ff9_duplicate7419',
                'section' => 'content',
                'data' => [
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'top left',
                            'description' => 'gradient shadow 80%, <br>dark',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 80,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'middle left',
                            'description' => 'gradient shadow 70%, <br>light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 70,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 2,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'bottom left',
                            'description' => 'gradient shadow 70%, ',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 70,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 3,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'center top',
                            'description' => 'gradient shadow 100%, <br>light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 30,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 100,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'center',
                            'description' => 'gradient shadow 30%, <br>dark',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 30,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'center bottom',
                            'description' => 'gradient shadow 50%, <br>light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 3,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'top right',
                            'description' => 'gradient shadow 40%, <br>light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 30,
                                        'direction' => [
                                            'x' => 3,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 70,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'middle right',
                            'description' => 'gradient shadow 50%, <br>dark',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 3,
                                            'y' => 2,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'bottom right',
                            'description' => 'gradient shadow 80%, <br>light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => true,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 80,
                                        'direction' => [
                                            'x' => 3,
                                            'y' => 3,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'headline',
                'id' => 'componente835',
                'section' => 'content',
                'data' => [
                    'title' => 'text configuration',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'hero-carousel',
                'id' => 'component7ff9_duplicate2658',
                'section' => 'content',
                'data' => [
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan only',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 80,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'only description',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 70,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 2,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'slogan only',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 70,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 3,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'only description',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 30,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 100,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => 'slogan',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 30,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'only description',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 3,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'only button',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 30,
                                        'direction' => [
                                            'x' => 3,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 70,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'only description',
                            'cta' => [
                                'label' => 'and button',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 3,
                                            'y' => 2,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'slogan',
                            'description' => '',
                            'cta' => [
                                'label' => 'and button',
                                'href' => '/',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => true,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 80,
                                        'direction' => [
                                            'x' => 3,
                                            'y' => 3,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'headline',
                'id' => 'componentd0d5',
                'section' => 'content',
                'data' => [
                    'title' => 'no text',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'hero-carousel',
                'id' => 'component7ff9_duplicate46416',
                'section' => 'content',
                'data' => [
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 80,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 70,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 2,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 70,
                                        'direction' => [
                                            'x' => 3,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 30,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 100,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 30,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 2,
                                            'y' => 3,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 60,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component5d58_duplicate47945',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Hero carousel with 1 image',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component6f08',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component5d58_duplicate1074',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Hero carousel with 8 images',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component6f08_duplicate8097',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right, Mirror',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => true,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => true,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component5d58_duplicate27671',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Hero carousel with 9 images',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component6f08_duplicate98882',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Large teaser<br>',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right, Mirror',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => true,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => true,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-center',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component5d58_duplicate82558',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Display mode',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'component8a00',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '',
                    'columns' => 'none',
                    'content' => '<p>Desktop/tablet: OFF <br>Mobile: ON</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => true,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component6f08_duplicate51551',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right, Mirror',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => true,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => true,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-center',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => false,
                    ],
                ],
            ],
            [
                'name' => 'Paragraph',
                'type' => 'paragraph',
                'id' => 'component8a00_duplicate8980',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '',
                    'columns' => 'none',
                    'content' => '<p>Desktop/tablet: ON<br>Mobile: OFF</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => true,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component6f08_duplicate2984',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Large teaser<br>',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right, Mirror',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => true,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 2,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 100,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => true,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Large teaser',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => true,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/federica-galli-703572-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-center',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 2,
                                'y' => 3,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'mobile' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'tablet' => [
                                    'raw' => '',
                                    'decoded' => '',
                                    'aspect_ratio' => '',
                                ],
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/annie-spratt-294450-unsplash.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay',
                            'cta' => [
                                'label' => 'Light',
                                'href' => 'https://magesuite-test.magesuite.net/',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 3,
                                'y' => 1,
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => 2,
                                'y' => 1,
                            ],
                            'row' => 1,
                            'position' => 'left',
                            'isAvailableForMobile' => 1,
                            'optimizers' => [
                                'color_scheme' => 'dark',
                                'mirror_image' => false,
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => false,
                                        'intensity' => 'disabled',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                    ],
                                    'overlay' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                        'configurator' => [
                                            'icon' => '#contrast_gradient',
                                            'label' => 'Gradient shadow',
                                        ],
                                    ],
                                    'container' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => false,
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                        ],
                    ],
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => false,
                        'desktop' => true,
                    ],
                ],
            ],
        ];
    }

}
