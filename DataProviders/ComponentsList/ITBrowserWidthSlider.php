<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ITBrowserWidthSlider extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [];
        $blocks[] = Index::getHeadlineBlock('Image Teasers for browser width slider');

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

        $blocks[] = Index::getHeadlineBlock('Display Mode');
        $blocks[] = [
            'type' => 'paragraph',
            'name' => 'Paragraph',
            'id' => 'componentd087_duplicate42836',
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
        ];
        $blocks[] = [
            'name' => 'Image Teaser',
            'type' => 'image-teaser-2',
            'id' => 'component1160_duplicate67510',
            'section' => 'content',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
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
                        'description' => 'Slider<br>Text over image',
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
                                    'intensity' => 30,
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => false,
                                    'intensity' => 100,
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
                        'cc_css_classes' => '',
                    ],
                    1 => [
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
                        'slogan' => 'Center-left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => 'https://magesuite-test.magesuite.net/',
                            'target' => true,
                            'link' => false,
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
                        'tracking_id' => '',
                        'teaserType' => 'full',
                        'image_alt' => '',
                        'cc_css_classes' => '',
                    ],
                    2 => [
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
                        'slogan' => 'Center-right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => 'https://magesuite-test.magesuite.net/',
                            'target' => false,
                            'link' => false,
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
                        'cc_css_classes' => '',
                    ],
                    3 => [
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
                            'image' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/4e2a9edb2ff529629a95e39bfb4a16d635357c3f4d5ef18fb5390e0a0f14914f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
                        ],
                        'video' => [
                            'url' => '',
                            'type' => '',
                        ],
                        'slogan' => 'Top left',
                        'description' => 'Slider<br>Text over image',
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
                        'cc_css_classes' => '',
                    ],
                    4 => [
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
                            'image' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/4e2a9edb2ff529629a95e39bfb4a16d635357c3f4d5ef18fb5390e0a0f14914f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                        ],
                        'video' => [
                            'url' => '',
                            'type' => '',
                        ],
                        'slogan' => 'Bottom right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
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
                        'cc_css_classes' => '',
                    ],
                    5 => [
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
                        ],
                        'video' => [
                            'url' => '',
                            'type' => '',
                        ],
                        'slogan' => 'Top center',
                        'description' => 'Slider<br>Text over image',
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
                        'cc_css_classes' => '',
                    ],
                ],
                'ignoredItems' => [
                ],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => false,
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => false,
                        'teasersNum' => 3,
                        'id' => '3',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => false,
                        'contentPlacement' => true,
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => false,
                        'id' => 'mobile-slider',
                    ],
                ],
                'isError' => false,
                'cc_css_classes' => '',
                'componentVisibility' => [
                    'mobile' => true,
                    'desktop' => false,
                ],
            ],
        ];
        $blocks[] = [
            'name' => 'Paragraph',
            'type' => 'paragraph',
            'id' => 'componentd087_duplicate88655',
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
        ];
        $blocks[] = [
            'name' => 'Image Teaser',
            'type' => 'image-teaser-2',
            'id' => 'component1160_duplicate69728',
            'section' => 'content',
            'data' => [
                'customCssClass' => '',
                'items' => [
                    0 => [
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
                        'description' => 'Slider<br>Text over image',
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
                                    'intensity' => 30,
                                    'direction' => 'disabled',
                                    'configurator' => [
                                        'icon' => '#contrast_overlay',
                                        'label' => 'Overlay',
                                    ],
                                ],
                                'gradient' => [
                                    'enabled' => false,
                                    'intensity' => 100,
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
                        'cc_css_classes' => '',
                    ],
                    1 => [
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
                        'slogan' => 'Center-left',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Light',
                            'href' => 'https://magesuite-test.magesuite.net/',
                            'target' => true,
                            'link' => false,
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
                        'tracking_id' => '',
                        'teaserType' => 'full',
                        'image_alt' => '',
                        'cc_css_classes' => '',
                    ],
                    2 => [
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
                        'slogan' => 'Center-right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => 'https://magesuite-test.magesuite.net/',
                            'target' => false,
                            'link' => false,
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
                        'cc_css_classes' => '',
                    ],
                    3 => [
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
                            'image' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/4e2a9edb2ff529629a95e39bfb4a16d635357c3f4d5ef18fb5390e0a0f14914f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
                        ],
                        'video' => [
                            'url' => '',
                            'type' => '',
                        ],
                        'slogan' => 'Top left',
                        'description' => 'Slider<br>Text over image',
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
                        'cc_css_classes' => '',
                    ],
                    4 => [
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
                            'image' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/4e2a9edb2ff529629a95e39bfb4a16d635357c3f4d5ef18fb5390e0a0f14914f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                        ],
                        'video' => [
                            'url' => '',
                            'type' => '',
                        ],
                        'slogan' => 'Bottom right',
                        'description' => 'Slider<br>Text over image',
                        'cta' => [
                            'label' => 'Dark',
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
                        'cc_css_classes' => '',
                    ],
                    5 => [
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
                        ],
                        'video' => [
                            'url' => '',
                            'type' => '',
                        ],
                        'slogan' => 'Top center',
                        'description' => 'Slider<br>Text over image',
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
                        'cc_css_classes' => '',
                    ],
                ],
                'ignoredItems' => [
                ],
                'scenario' => [
                    'teaserWidth' => [
                        'name' => 'Browser width Slider',
                        'iconId' => 'tw_window-slider',
                        'disabled' => false,
                        'id' => 'window-slider',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => false,
                        'teasersNum' => 3,
                        'id' => '3',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => false,
                        'contentPlacement' => true,
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => false,
                        'id' => 'mobile-slider',
                    ],
                ],
                'isError' => false,
                'cc_css_classes' => '',
                'componentVisibility' => [
                    'mobile' => false,
                    'desktop' => true,
                ],
            ],
        ];

        return $blocks;
    }

}
