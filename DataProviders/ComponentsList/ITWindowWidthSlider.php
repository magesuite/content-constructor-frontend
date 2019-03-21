<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ITWindowWidthSlider extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [];
        $blocks[] = Index::getHeadlineBlock('Image Teasers for window width slider');

        $blocks[] = Index::getHeadlineBlock('2 in row');
        $blocks[] = [
            'id' => 'componentfeed',
            'section' => 'content',
            'type' => 'image-teaser-2',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Top left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    1 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Top center',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Top right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Center left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'In the middle',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Center right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom center',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ignoredItems' => [],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => '',
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '2 in row',
                        'iconId' => 'dl_2',
                        'disabled' => '',
                        'teasersNum' => '2',
                        'id' => '2',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'contentPlacement' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'mobile-slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];
        $blocks[] = [
            'id' => 'componentd56a',
            'section' => 'content',
            'type' => 'image-teaser-2',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    1 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ignoredItems' => [],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => '',
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '2 in row',
                        'iconId' => 'dl_2',
                        'disabled' => '',
                        'teasersNum' => '2',
                        'id' => '2',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'contentPlacement' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'mobile-slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('3 in row');
        $blocks[] = [
            'id' => 'component95e0',
            'section' => 'content',
            'type' => 'image-teaser-2',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Top left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    1 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Top center',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Top right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Center left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'In the middle',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Center right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom center',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ignoredItems' => [],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => '',
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => '',
                        'teasersNum' => '3',
                        'id' => '3',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'contentPlacement' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'mobile-slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];
        $blocks[] = [
            'id' => 'component3773',
            'section' => 'content',
            'type' => 'image-teaser-2',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    1 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ignoredItems' => [],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => '',
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => '',
                        'teasersNum' => '3',
                        'id' => '3',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'contentPlacement' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'mobile-slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('4 in row');
        $blocks[] = [
            'id' => 'component6972',
            'section' => 'content',
            'type' => 'image-teaser-2',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Top left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    1 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Top center',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Top right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Center left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'In the middle',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Center right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '2',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom center',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Bottom right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '3',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ignoredItems' => [],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => '',
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '4 in row',
                        'iconId' => 'dl_4',
                        'disabled' => '',
                        'teasersNum' => '4',
                        'id' => '4',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'contentPlacement' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'mobile-slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];
        $blocks[] = [
            'id' => 'component3773_duplicate',
            'section' => 'content',
            'type' => 'image-teaser-2',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    1 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    2 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'dark',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    3 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    4 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => '',
                        'description' => '',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    5 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => '',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    6 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => '',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    7 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => 'Slider',
                        'description' => 'Text below image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    8 => [
                        'image' => [
                            'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                            'aspect_ratio' => '960:511',
                            'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        ],
                        'slogan' => '',
                        'description' => '',
                        'cta' => [
                            'label' => '',
                            'href' => '',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '1',
                        ],
                        'optimizers' => [
                            'color_scheme' => 'light',
                            'mirror_image' => '',
                            'scenarios' => [
                                'none' => [
                                    'enabled' => '1',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_none',
                                        'label' => 'None',
                                    ],
                                ],
                                'overlay' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '1',
                                    ],
                                    'configurator' => [
                                        'icon' => '#contrast_gradient',
                                        'label' => 'Gradient shadow',
                                    ],
                                ],
                                'container' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_container',
                                        'label' => 'Container',
                                    ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_text-shadow',
                                        'label' => 'Text shadow',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'ignoredItems' => [],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => '',
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '4 in row',
                        'iconId' => 'dl_4',
                        'disabled' => '',
                        'teasersNum' => '4',
                        'id' => '4',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'contentPlacement' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'mobile-slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];


        return $blocks;
    }

}
