<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ITLegacyContainerWidth extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [];
        $blocks[] = Index::getHeadlineBlock('Image Teasers Legacy for container width');

        $blocks[] = Index::getHeadlineBlock('1 in row');
        $blocks[] = [
            'id' => 'componente2ca',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = [
            'id' => 'component1118',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = [
            'id' => 'component9416',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = [
            'id' => 'component5564',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = [
            'id' => 'component5ef0',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = [
            'id' => 'component78d4',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = [
            'id' => 'component4a42',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = [
            'id' => 'component000b',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];

        $blocks[] = Index::getHeadlineBlock('2 in row');
        $blocks[] = [
            'id' => 'component3cc8',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '2',
                        'subheadline' => 'Slider',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '2 in row',
                        'iconId' => 'dl_2',
                        'disabled' => '',
                        'teasersNum' => '2',
                        'id' => '2',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'component44e9',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Teasers in row',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Text on the bottom - cectered',
                        'subheadline' => 'Teasers in row',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                        'displayVariant' => '4'
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '2 in row',
                        'iconId' => 'dl_2',
                        'disabled' => '',
                        'teasersNum' => '2',
                        'id' => '2',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Teasers in row',
                        'iconId' => 'ml_2-2',
                        'disabled' => '',
                        'id' => 'row',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'component0925',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light'
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '2 in row',
                        'iconId' => 'dl_2',
                        'disabled' => '',
                        'teasersNum' => '2',
                        'id' => '2',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'col',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'componenta816',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Headline',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Headline',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '2',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '2 in row',
                        'iconId' => 'dl_2',
                        'disabled' => '',
                        'teasersNum' => '2',
                        'id' => '2',
                    ],
                    'textPositioning' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'textPosition' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'col',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('3 in row');
        $blocks[] = [
            'id' => 'componentb64e',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '2',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => '',
                        'teasersNum' => '3',
                        'id' => '3',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'component31c4',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                    2 => [
                        'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '3',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => '',
                        'teasersNum' => '3',
                        'id' => '3',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'col',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'componentf168',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'colorScheme' => 'dark',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Big and two small',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '#',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '2',
                        'colorScheme' => 'dark',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Big and two small',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511'
                    ],
                    2 => [
                        'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Big and two small',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511'
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => '',
                        'teasersNum' => '3',
                        'id' => '3',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Big, two small',
                        'iconId' => 'ml_1-2',
                        'disabled' => '',
                        'id' => '1-2',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'component9632',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Headline',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Headline',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '2',
                        'subheadline' => 'Teasers in column',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                        'headline' => 'Headline',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '3',
                        'subheadline' => 'Teasers in column',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '3 in row',
                        'iconId' => 'dl_3',
                        'disabled' => '',
                        'teasersNum' => '3',
                        'id' => '3',
                    ],
                    'textPositioning' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'textPosition' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'col',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('4 in row');
        $blocks[] = [
            'id' => 'component047f',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('alexandru-acea-1160461-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('alexandru-acea-1160461-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '2',
                        'subheadline' => 'Slider',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '573x571px (573:571)',
                        'aspectRatio' => '573:571',
                        'displayVariant' => '3',
                        'subheadline' => 'Slider',
                        'colorScheme' => 'light',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'headline' => 'Text on the bottom - centered',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '4',
                        'colorScheme' => 'dark',
                        'subheadline' => 'Slider',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '4 in row',
                        'iconId' => 'dl_4',
                        'disabled' => '',
                        'teasersNum' => '4',
                        'id' => '4',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'component8662',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => '2 in row, 2 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'light',
                    ],
                    1 => [
                        'image' => $this->getImage('alexandru-acea-1160461-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('alexandru-acea-1160461-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => '2 in row, 2 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '2',
                        'colorScheme' => 'light',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => '2 in row, 2 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '573x571px (573:571)',
                        'aspectRatio' => '573:571',
                        'displayVariant' => '3',
                        'colorScheme' => 'light',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => '2 in row, 2 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '4',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '4 in row',
                        'iconId' => 'dl_4',
                        'disabled' => '',
                        'teasersNum' => '4',
                        'id' => '4',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => '2 in row, 2 rows',
                        'iconId' => 'ml_2-2',
                        'disabled' => '',
                        'id' => '2-2',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'component6345',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Big, 2 small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('alexandru-acea-1160461-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('alexandru-acea-1160461-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Big, 2 small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '2',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Big, 2 small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '573x571px (573:571)',
                        'aspectRatio' => '573:571',
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Big, 2 small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '4',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '4 in row',
                        'iconId' => 'dl_4',
                        'disabled' => '',
                        'teasersNum' => '4',
                        'id' => '4',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Big, two small, big',
                        'iconId' => 'ml_1-2',
                        'disabled' => '',
                        'id' => '1-2-1',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'component512f',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('alexandru-acea-1160461-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('alexandru-acea-1160461-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '2',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '573x571px (573:571)',
                        'aspectRatio' => '573:571',
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'displayVariant' => '4',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '4 in row',
                        'iconId' => 'dl_4',
                        'disabled' => '',
                        'teasersNum' => '4',
                        'id' => '4',
                    ],
                    'textPositioning' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'textPosition' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Teasers in column',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'col',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('6 in row');
        $blocks[] = [
            'id' => 'component623e',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '2',
                        'subheadline' => 'Slider',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '3',
                        'subheadline' => 'Slider',
                        'colorScheme' => 'dark',
                    ],
                    3 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => 'Text on the bottom - centered',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '4',
                        'subheadline' => 'Slider',
                        'colorScheme' => 'dark',
                    ],
                    4 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => '',
                        'paragraph' => '',
                        'ctaLabel' => '',
                        'href' => '',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'subheadline' => '',
                        'colorScheme' => 'light',
                    ],
                    5 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => '',
                        'paragraph' => '',
                        'ctaLabel' => '',
                        'href' => '',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'subheadline' => '',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '6 in row',
                        'iconId' => 'dl_6',
                        'disabled' => '',
                        'teasersNum' => '6',
                        'id' => '6',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'componentd931',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => '2 in row, 3 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'colorScheme' => 'light',
                    ],
                    1 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => '2 in row, 3 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '2',
                        'colorScheme' => 'light',
                    ],
                    2 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => '2 in row, 3 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '3',
                        'colorScheme' => 'light',
                    ],
                    3 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => '2 in row, 3 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '4',
                        'colorScheme' => 'light',
                    ],
                    4 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => '',
                        'subheadline' => '',
                        'paragraph' => '',
                        'ctaLabel' => '',
                        'href' => '',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                    5 => [
                        'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                        'headline' => '',
                        'subheadline' => '',
                        'paragraph' => '',
                        'ctaLabel' => '',
                        'href' => '',
                        'sizeInfo' => '500x500px (1:1)',
                        'aspectRatio' => '1:1',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '6 in row',
                        'iconId' => 'dl_6',
                        'disabled' => '',
                        'teasersNum' => '6',
                        'id' => '6',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => '2 in row, 3 rows',
                        'iconId' => 'ml_2-2',
                        'disabled' => '',
                        'id' => '2-2-2',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'componenta8ab',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMS5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/1.png"}}',
                        'displayVariant' => '1',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMi5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/2.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '2',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNi5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/6.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                    ],
                    3 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNS5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/5.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '4',
                        'colorScheme' => 'dark',
                    ],
                    4 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNC5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/4.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                    5 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMy5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/3.png"}}',
                        'headline' => '',
                        'subheadline' => '',
                        'paragraph' => '',
                        'ctaLabel' => '',
                        'href' => '',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '1',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '6 in row',
                        'iconId' => 'dl_6',
                        'disabled' => '',
                        'teasersNum' => '6',
                        'id' => '6',
                    ],
                    'textPositioning' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'textPosition' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = [
            'id' => 'componentabe2',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMS5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/1.png"}}',
                        'displayVariant' => '1',
                        'headline' => 'Headline',
                        'subheadline' => '2 in row, 3 rows',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMi5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/2.png"}}',
                        'headline' => 'Headline',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'subheadline' => '2 in row, 3 rows',
                        'displayVariant' => '2',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNi5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/6.png"}}',
                        'headline' => 'Headline',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'subheadline' => '2 in row, 3 rows',
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                    ],
                    3 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNS5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/5.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => '2 in row, 3 rows',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '4',
                        'colorScheme' => 'dark',
                    ],
                    4 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNC5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/4.png"}}',
                        'headline' => 'Headline',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'subheadline' => '2 in row, 3 rows',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                    5 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMy5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/3.png"}}',
                        'headline' => '',
                        'subheadline' => '',
                        'paragraph' => '',
                        'ctaLabel' => '',
                        'href' => '',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '6 in row',
                        'iconId' => 'dl_6',
                        'disabled' => '',
                        'teasersNum' => '6',
                        'id' => '6',
                    ],
                    'textPositioning' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'textPosition' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => '2 in row, 3 rows',
                        'iconId' => 'ml_2-2',
                        'disabled' => '',
                        'id' => '2-2-2',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('8 in row');
        $blocks[] = [
            'id' => 'componenta8ab',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMi5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/2.png"}}',
                        'displayVariant' => '1',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMy5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/3.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '2',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNC5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/4.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                    ],
                    3 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNi5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/6.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '4',
                        'colorScheme' => 'dark',
                    ],
                    4 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvNS5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/5.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                    5 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMS5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/1.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '2',
                        'colorScheme' => 'light',
                    ],
                    6 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMi5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/2.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '3',
                        'colorScheme' => 'light',
                    ],
                    7 => [
                        'image' => '/admin/content-constructor/image/show/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvMy5wbmcifX0',
                        'decodedImage' => '{{media url="creative_components/3.png"}}',
                        'headline' => 'Headline',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '195x90px (13:6)',
                        'aspectRatio' => '13:6',
                        'displayVariant' => '4',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '8 in row',
                        'iconId' => 'dl_8',
                        'disabled' => '',
                        'teasersNum' => '8',
                        'id' => '8',
                    ],
                    'textPositioning' => [
                        'name' => 'Text below image',
                        'iconId' => 'tl_under',
                        'disabled' => '',
                        'textPosition' => '',
                        'id' => 'under',
                    ],
                    'mobileLayout' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'disabled' => '',
                        'id' => 'slider',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        return $blocks;
    }

    public static function addOneRowImageTeaser(
        $id, $headline, $displayVariant, $ctaLabel, $colorScheme, $image, $decodedImage
    )
    {
        return [
            'id' => $id,
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $image,
                        'decodedImage' => $decodedImage,
                        'displayVariant' => $displayVariant,
                        'headline' => $headline,
                        'subheadline' => 'Large teaser',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => $ctaLabel,
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => $colorScheme,
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'c',
                    ],
                    'desktopLayout' => [
                        'name' => '1 in row',
                        'iconId' => 'dl_1',
                        'disabled' => '',
                        'teasersNum' => '1',
                        'id' => '1',
                    ],
                    'textPositioning' => [
                        'name' => 'Text over image',
                        'iconId' => 'tl_over',
                        'disabled' => '',
                        'textPosition' => '1',
                        'id' => 'over',
                    ],
                    'mobileLayout' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'disabled' => '',
                        'id' => 'large',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];
    }

}
