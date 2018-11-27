<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ITWindowWidth extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [];
        $blocks[] = Index::getHeadlineBlock('Image teasers for window width');

        $blocks[] = Index::getHeadlineBlock('1 in row');
        $blocks[] = [
            'id' => 'component52cf',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Large teaser on mobile',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1'
                    ],
                ]
            ]
        ];

        $blocks[] = [
            'id' => 'component4618',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Large teaser on mobile',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1'
                    ],
                ]
            ]
        ];

        $blocks[] = [
            'id' => 'componentab50',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Large teaser on mobile',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1'
                    ],
                ]
            ]
        ];

        $blocks[] = [
            'id' => 'componentd580',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Large teaser on mobile',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1'
                    ],
                ]
            ]
        ];

        $blocks[] = Index::getHeadlineBlock('2 in row');
        $blocks[] = [
            'id' => 'componenta505',
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
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'component597b',
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
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Teasers in row',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                        'displayVariant' => '4',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'component71ed',
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
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '2',
                        'colorScheme' => 'light'
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'componentfff9',
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
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '1',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'component620a',
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
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
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
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
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
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'displayVariant' => '3',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'componentcf27',
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
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'componentf7d5',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                        'displayVariant' => '3',
                        'colorScheme' => 'light',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Big, two small',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                    ],
                    1 => [
                        'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                        'colorScheme' => 'light',
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Big, two small',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                    ],
                    2 => [
                        'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Big, two small',
                        'paragraph' => 'Text over image',
                        'colorScheme' => 'light',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511'
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'componentb035',
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
                    2 => [
                        'image' => $this->getImage('jan-losert-633960-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('jan-losert-633960-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Headline',
                        'subheadline' => 'Teasers in column',
                        'paragraph' => 'Text below image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '1920x1022px (960:511)',
                        'aspectRatio' => '960:511',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'componentfaa0',
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
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'dark',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '573x571px (573:571)',
                        'aspectRatio' => '573:571',
                        'colorScheme' => 'dark',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Slider',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'dark',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'componentb6a1',
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
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => '2 in row, 2 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'light',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => '2 in row, 2 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '573x571px (573:571)',
                        'aspectRatio' => '573:571',
                        'colorScheme' => 'light',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => '2 in row, 2 rows',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                        'colorScheme' => 'light',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'component0795',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Text vertically centered on the left',
                        'subheadline' => 'Big, two small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'colorScheme' => 'dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                    1 => [
                        'image' => $this->getImage('alexandru-acea-1160461-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('alexandru-acea-1160461-unsplash.jpg'),
                        'displayVariant' => '2',
                        'headline' => 'Text on the bottom, left corner',
                        'subheadline' => 'Big, two small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'colorScheme' => 'dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Text vertically centered in the middle',
                        'subheadline' => 'Big, two small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'colorScheme' => 'dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Text on the bottom - centered',
                        'subheadline' => 'Big, two small, big',
                        'paragraph' => 'Text over image',
                        'ctaLabel' => 'Dark',
                        'colorScheme' => 'dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
            'id' => 'component5a4d',
            'section' => 'content',
            'type' => 'image-teaser',
            'data' => [
                'items' => [
                    0 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '1',
                        'headline' => 'Headline',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'colorScheme' => 'dark',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                    1 => [
                        'image' => $this->getImage('alexandru-acea-1160461-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('alexandru-acea-1160461-unsplash.jpg'),
                        'displayVariant' => '2',
                        'headline' => 'Headline',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'colorScheme' => 'dark',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                    2 => [
                        'image' => $this->getImage('estee-janssens-745861-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('estee-janssens-745861-unsplash.jpg'),
                        'displayVariant' => '3',
                        'headline' => 'Headline',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'colorScheme' => 'dark',
                        'ctaLabel' => 'Dark',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                    3 => [
                        'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'decodedImage' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                        'displayVariant' => '4',
                        'headline' => 'Headline',
                        'subheadline' => 'Text below image',
                        'paragraph' => 'Teasers in column',
                        'colorScheme' => 'light',
                        'ctaLabel' => 'Light',
                        'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                        'sizeInfo' => '574x571px (574:571)',
                        'aspectRatio' => '574:571',
                    ],
                ],
                'ignoredItems' => [],
                'currentScenario' => [
                    'teaserWidth' => [
                        'name' => 'Window width',
                        'iconId' => 'tw_window-width',
                        'disabled' => '',
                        'teasersLimit' => '1',
                        'id' => 'w',
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
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ]
        ];
        
        return $blocks;
    }

}
