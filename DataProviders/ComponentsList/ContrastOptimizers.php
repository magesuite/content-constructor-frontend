<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ContrastOptimizers extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [];
        $blocks[] = Index::getHeadlineBlock('Contrast Optimizers');

        $blocks[] = Index::getHeadlineBlock('Overlay');
        $blocks[] = [
            'id' => 'component24fb',
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
                        'slogan' => 'Overlay 50%',
                        'description' => '',
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
                                    'enabled' => '',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' =>
                                        [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                ],
                                'overlay' => [
                                    'enabled' => '1',
                                    'intensity' => '50',
                                    'direction' => 'disabled',
                                    'configurator' =>
                                        [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                ],
                                'gradient' => [
                                    'enabled' => '',
                                    'intensity' => '50',
                                    'direction' =>
                                        [
                                            'x' => '1',
                                            'y' => '1',
                                        ],
                                    'configurator' =>
                                        [
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
                        'slogan' => 'Overlay 50%',
                        'description' => '',
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
                                    'enabled' => '',
                                    'intensity' => 'disabled',
                                    'direction' => 'disabled',
                                    'configurator' =>
                                        [
                                            'icon' => '#contrast_none',
                                            'label' => 'None',
                                        ],
                                ],
                                'overlay' => [
                                    'enabled' => '1',
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
                                    'configurator' =>
                                        [
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
                        'name' => 'Content width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'id' => 'container',
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
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'mobile-in-columns',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('Gradient shadow');
        $blocks[] = [
            'id' => 'componenta658',
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
                        'slogan' => 'Gradient shadow 80',
                        'description' => 'Top-left shadow',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '80',
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
                        'slogan' => 'Gradient shadow 80',
                        'description' => 'Top-center shadow',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '2',
                            'y' => '1',
                        ],
                        'optimizers' =>
                            [
                                'color_scheme' => 'dark',
                                'mirror_image' => '',
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => '',
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
                                        'enabled' => '1',
                                        'intensity' => '80',
                                        'direction' => [
                                            'x' => '2',
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
                        'slogan' => 'Gradient shadow 80',
                        'description' => 'Top-right shadow',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '1',
                        ],
                        'optimizers' =>
                            [
                                'color_scheme' => 'dark',
                                'mirror_image' => '',
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => '',
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
                                        'enabled' => '1',
                                        'intensity' => '80',
                                        'direction' => [
                                            'x' => '3',
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
                        'slogan' => 'Gradient shadow 80',
                        'description' => 'Center-left shadow',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '1',
                            'y' => '2',
                        ],
                        'optimizers' =>
                            [
                                'color_scheme' => 'dark',
                                'mirror_image' => '',
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => '',
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
                                        'enabled' => '1',
                                        'intensity' => '80',
                                        'direction' => [
                                            'x' => '1',
                                            'y' => '2',
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
                        'slogan' => 'Gradient shadow 80',
                        'description' => 'Center-right shadow',
                        'cta' => [
                            'label' => 'Dark',
                            'href' => '#',
                        ],
                        'content_align' => [
                            'x' => '3',
                            'y' => '2',
                        ],
                        'optimizers' =>
                            [
                                'color_scheme' => 'dark',
                                'mirror_image' => '',
                                'scenarios' => [
                                    'none' => [
                                        'enabled' => '',
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
                                        'enabled' => '1',
                                        'intensity' => '80',
                                        'direction' => [
                                            'x' => '3',
                                            'y' => '2',
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
                        'slogan' => 'Gradient shadow 80',
                        'description' => 'Bottom-left shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '80',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '3',
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
                    6 =>
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'Gradient shadow 80',
                            'description' => 'Bottom-center shadow',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '3',
                            ],
                            'optimizers' =>
                                [
                                    'color_scheme' => 'dark',
                                    'mirror_image' => '',
                                    'scenarios' => [
                                        'none' => [
                                            'enabled' => '',
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
                                            'enabled' => '1',
                                            'intensity' => '80',
                                            'direction' => [
                                                'x' => '2',
                                                'y' => '3',
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
                        'slogan' => 'Gradient shadow 80',
                        'description' => 'Bottom-right shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '80',
                                    'direction' => [
                                        'x' => '3',
                                        'y' => '3',
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
                        'name' => 'Content width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'id' => 'container',
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
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'mobile-in-columns',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];


        $blocks[] = [
            'id' => 'component0dcb',
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
                        'slogan' => 'Gradient shadow 70',
                        'description' => 'Top-left shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '70',
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
                        'slogan' => 'Gradient shadow 70',
                        'description' => 'Top-center shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '70',
                                    'direction' => [
                                        'x' => '2',
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
                        'slogan' => 'Gradient shadow 70',
                        'description' => 'Top-right shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '70',
                                    'direction' => [
                                        'x' => '3',
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
                    3 =>
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                            ],
                            'slogan' => 'Gradient shadow 70',
                            'description' => 'Center-left shadow',
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
                                        'enabled' => '',
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
                                        'enabled' => '1',
                                        'intensity' => '70',
                                        'direction' => [
                                            'x' => '1',
                                            'y' => '2',
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
                        'slogan' => 'Gradient shadow 70',
                        'description' => 'Center-right shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '70',
                                    'direction' => [
                                        'x' => '3',
                                        'y' => '2',
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
                        'slogan' => 'Gradient shadow 70',
                        'description' => 'Bottom-left shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '70',
                                    'direction' => [
                                        'x' => '1',
                                        'y' => '3',
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
                        'slogan' => 'Gradient shadow 70',
                        'description' => 'Bottom-center shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '70',
                                    'direction' => [
                                        'x' => '2',
                                        'y' => '3',
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
                        'slogan' => 'Gradient shadow 70',
                        'description' => 'Bottom-right shadow',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '70',
                                    'direction' => [
                                        'x' => '3',
                                        'y' => '3',
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
                        'name' => 'Content width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'id' => 'container',
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
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'mobile-in-columns',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('Container');
        $blocks[] = [
            'id' => 'component4642',
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
                        'slogan' => 'Container 100',
                        'description' => 'Center-right text',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '100',
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
                        'slogan' => 'Container 100',
                        'description' => 'Bottom-right text',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
                                    'intensity' => '100',
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
                        'name' => 'Content width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'id' => 'container',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'contentPlacement' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'contentPlacement' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'mobile-in-columns',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1',
                ],
            ],
        ];
        $blocks[] = [
            'id' => 'component7e89',
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
                        'slogan' => 'Container 50',
                        'description' => 'Bottom-left text',
                        'cta' => [
                            'label' => 'More',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
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
                        'slogan' => 'Container 50',
                        'description' => 'Top-left text',
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
                                    'enabled' => '',
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
                                    'enabled' => '1',
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
                        'name' => 'Browser width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'id' => 'window',
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

        $blocks[] = Index::getHeadlineBlock('Text shadow');
        $blocks[] = [
            'id' => 'componente424',
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
                        'slogan' => 'Text shadow 100',
                        'description' => 'Center-right text',
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
                                    'enabled' => '',
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
                                    'configurator' =>
                                        [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                ],
                                'text_shadow' => [
                                    'enabled' => '1',
                                    'intensity' => '100',
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
                        'slogan' => 'Text shadow 100',
                        'description' => 'Top-left text',
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
                                    'enabled' => '',
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
                                    'configurator' =>
                                        [
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
                                    'enabled' => '1',
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
                        'name' => 'Content width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'id' => 'container',
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
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'mobile-in-columns',
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
