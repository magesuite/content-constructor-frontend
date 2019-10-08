<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

abstract class HeroCarousel extends DataProviderComponents
{
    protected $mobileDisplayVariant = '';
    protected $subtitle = '';
    protected $optimizers = [
        'color_scheme' => 'dark',
        'mirror_image' => '',
        'scenarios' => [
            'none' => [
                'enabled' => '1',
                'intensity' => 'disabled',
                'direction' => 'disabled',
                'configurator' => [
                    'icon' => '#contrast_none',
                    'label' => 'None'
                ]
            ],
            'overlay' => [
                'enabled' => '',
                'intensity' => '50',
                'direction' => 'disabled',
                'configurator' => [
                    'icon' => '#contrast_overlay',
                    'label' => 'Overlay'
                ]
            ],
            'gradient' => [
                'enabled' => '',
                'intensity' => '50',
                'direction' => [
                    'x' => 1,
                    'y' => 1
                ],
                'configurator' => [
                    'icon' => '#contrast_gradient',
                    'label' => 'Gradient shadow'
                ]
            ],
            'container' => [
                'enabled' => '',
                'intensity' => '50',
                'direction' => 'disabled',
                'configurator' => [
                    'icon' => '#contrast_container',
                    'label' => 'Container'
                ]
            ],
            'text_shadow' => [
                'enabled' => '',
                'intensity' => '50',
                'direction' => 'disabled',
                'configurator' => [
                    'icon' => '#contrast_text-shadow',
                    'label' => 'Text shadow'
                ]
            ]
        ]
    ];
    
    public function getBlocks()
    {
        $blocks = [];
        $blocks[] = Index::getHeadlineBlock('Hero Carousel scenarios', $this->subtitle);

        $imageTeaseConfiguration = [
            'image' => [
                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                'aspect_ratio' => '583:390',
                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
            ],
            'slogan' => 'Text vertically centered on the left',
            'description' => 'Test description - description',
            'cta' => [
                'label' => 'Dark',
                'href' => 'http://www.creativestyle.pl/'
            ],
            'content_align' => [
                'x' => 1,
                'y' => 2
            ],
            'sizeSelect' => '2x1',
            'size' => [
                'x' => 2,
                'y' => 1
            ],
            'row' => '1',
            'position' => 'left',
            'isAvailableForMobile' => '1',
            'optimizers' => $this->optimizers,
            'teaserType' => 'full',
        ];

        $blocks['componentea06'] = [
            'id' => 'componentea06',
            'section' => 'content',
            'type' => 'hero-carousel',
            'data' => [
                'mobileDisplayVariant' => $this->mobileDisplayVariant,
                'items' => [
                    0 => $imageTeaseConfiguration,
                    1 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Text on the bottom, left corner',
                            'content_align' => [
                                'x' => 1,
                                'y' => 3
                            ],
                        ]
                    ),
                    2 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'slogan' => 'Text vertically centered in the middle',
                            'content_align' => [
                                'x' => 2,
                                'y' => 2
                            ],
                        ]
                    ),
                    3 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Text on the bottom - centered',
                            'content_align' => [
                                'x' => 2,
                                'y' => 3
                            ],
                        ]
                    ),
                ],
                'scenario' => [
                    'teaserWidth' => [],
                    'desktopLayout' => [],
                    'contentPlacement' => [],
                    'mobileLayout' => []
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ]
            ],
        ];

        $blocks[] = [
            'id' => 'componentcceb',
            'section' => 'content',
            'type' => 'hero-carousel',
            'data' => [
                'mobileDisplayVariant' => $this->mobileDisplayVariant,
                'items' => [
                    0 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'slogan' => 'Test headline',
                            'description' => 'Text vertically centered on the left',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => 'Light',
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    1 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Test headline',
                            'description' => 'Text on the bottom, left corner',
                            'content_align' => [
                                'x' => 1,
                                'y' => 3
                            ],
                            'cta' => [
                                'label' => 'Light',
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    2 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => 'Test headline',
                            'description' => 'Text vertically centered in the middle',
                            'content_align' => [
                                'x' => 2,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => 'Light',
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    3 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Test headline',
                            'description' => 'Text on the bottom, centered',
                            'content_align' => [
                                'x' => 2,
                                'y' => 3
                            ],
                            'cta' => [
                                'label' => 'Light',
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                ],
                'scenario' => [
                    'teaserWidth' => [],
                    'desktopLayout' => [],
                    'contentPlacement' => [],
                    'mobileLayout' => []
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ]
            ],
        ];

        $blocks[] = [
            'id' => 'componentf13e',
            'section' => 'content',
            'type' => 'hero-carousel',
            'data' => [
                'mobileDisplayVariant' => $this->mobileDisplayVariant,
                'items' => [
                    0 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    1 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    2 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    3 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                ],
                'scenario' => [
                    'teaserWidth' => [],
                    'desktopLayout' => [],
                    'contentPlacement' => [],
                    'mobileLayout' => []
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ]
            ],
        ];

        $blocks[] = [
            'id' => 'component77be',
            'section' => 'content',
            'type' => 'hero-carousel',
            'data' => [
                'mobileDisplayVariant' => $this->mobileDisplayVariant,
                'items' => [
                    0 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan only',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                        ]
                    ),
                    1 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan only',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                        ]
                    ),
                    2 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan only',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    3 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan only',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                        ]
                    ),
                    4 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan',
                            'description' => 'Description',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                        ]
                    ),
                    5 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan',
                            'description' => 'Description',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                        ]
                    ),
                    6 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan',
                            'description' => 'Description',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    7 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan',
                            'description' => 'Description',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    8 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Only really long description here. Only really long description here. Only really long description here. Only really long description here. Only really long description here. Only really long description here.',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                        ]
                    ),
                    9 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => 'Button only',
                                'href' => 'http://www.creativestyle.pl/'
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                    10 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Slogan',
                            'description' => 'Description',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => 'Button only',
                                'href' => 'http://www.creativestyle.pl/'
                            ],
                        ]
                    ),
                    11 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Only really long description here. Only really long description here. Only really long description here. Only really long description here. Only really long description here. Only really long description here.',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => '',
                                'href' => ''
                            ],
                        ]
                    ),
                    12 => array_merge(
                        $imageTeaseConfiguration,
                        [
                            'image' => [
                                'decoded' => $this->getDecodedImage('henry-ascroft-1154105-unsplash.jpg'),
                                'aspect_ratio' => '583:390',
                                'image' => $this->getImage('henry-ascroft-1154105-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'content_align' => [
                                'x' => 1,
                                'y' => 2
                            ],
                            'cta' => [
                                'label' => 'Button only',
                                'href' => 'http://www.creativestyle.pl/'
                            ],
                            'optimizers' => array_merge(
                                $this->optimizers,
                                ['color_scheme' => 'light']
                            ),
                        ]
                    ),
                ],
                'scenario' => [
                    'teaserWidth' => [],
                    'desktopLayout' => [],
                    'contentPlacement' => [],
                    'mobileLayout' => []
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ]
            ],
        ];

        return $blocks;
    }
}
