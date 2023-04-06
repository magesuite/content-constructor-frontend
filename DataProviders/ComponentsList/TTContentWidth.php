<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class TTContentWidth extends DataProviderComponents
{
    public function getBlocks()
    {
        return [
            0 => [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component6381',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Teaser & Text component - Content width',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            1 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'componenta706',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Mobile: image (top) - text (bottom)',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            2 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'No optimizer',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 60,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Top-left',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            3 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate46787',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Top-center',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'No optimizer',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                                        'intensity' => 60,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            4 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate43516',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Overlay 60%, mirror image',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'enabled' => true,
                                        'intensity' => 60,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Top-right',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            5 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate3486',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Center-left',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                                'target' => false,
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Overlay 80%, mirror image',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                                        'enabled' => true,
                                        'intensity' => 80,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            6 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate13053',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Gradient shadow (bottom right) 80%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                                'target' => false,
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
                                        'intensity' => 80,
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
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'In the middle',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            7 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate45579',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Center-right',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Gradient shadow (left) 40%',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 40,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            8 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate53235',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Container 70%, mirror image',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 70,
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
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-left',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                                'target' => false,
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            9 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate94462',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-center',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
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
                            'description' => 'Container 40%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                                'target' => false,
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            10 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate77395',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ,,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'slogan' => 'Top-left',
                            'description' => 'Text shadow 90%',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => true,
                                        'intensity' => 90,
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
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-right',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            11 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate72949',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-left, dark - slogan only',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                                'target' => false,
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
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
                            'slogan' => 'Center-right',
                            'description' => 'Text shadow 100%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            12 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate78555',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
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
                            'slogan' => 'Top-left, dark, overlay 50% - slogan only',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => '',
                            'description' => 'Center-right, light - description only',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            13 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate11267',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'In the middle, dark - button only',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ,,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'slogan' => '',
                            'description' => 'Top-right, dark - description only',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            14 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate96222',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ,,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'In the middle,light, button only',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => '',
                            'description' => 'Center-left description',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                                'target' => false,
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            15 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'componenta706_duplicate1553',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Mobile: text (top) - image (bottom)',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            16 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate5115',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'No optimizer',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 60,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Top-left',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            17 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate87173',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Top-center',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'No optimizer',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                                        'intensity' => 60,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            18 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate25305',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Overlay 60%, mirror image',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'enabled' => true,
                                        'intensity' => 60,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Top-right',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            19 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate22367',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Center-left',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                                'target' => false,
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Overlay 80%, mirror image',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                                        'enabled' => true,
                                        'intensity' => 80,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            20 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate90045',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Gradient shadow (bottom right) 80%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                                'target' => false,
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
                                        'intensity' => 80,
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
                            'tracking_id' => '',
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'In the middle',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            21 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate89962',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Center-right',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Gradient shadow (left) 40%',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 40,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            22 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate65011',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'description' => 'Container 70%, mirror image',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 70,
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
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-left',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                                'target' => false,
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            23 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate63366',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-center',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
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
                            'description' => 'Container 40%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                                'target' => false,
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            24 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate80637',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ,,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'slogan' => 'Top-left',
                            'description' => 'Text shadow 90%',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_container',
                                            'label' => 'Container',
                                        ],
                                    ],
                                    'text_shadow' => [
                                        'enabled' => true,
                                        'intensity' => 90,
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
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-right',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit odio sodales urna rhoncus, vitae hendrerit ante facilisis. Sed faucibus elit erat, ac vestibulum lorem feugiat id.',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            25 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate82468',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'Bottom-left, dark - slogan only',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                                'target' => false,
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
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
                            'slogan' => 'Center-right',
                            'description' => 'Text shadow 100%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            26 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate67270',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
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
                            'slogan' => 'Top-left, dark, overlay 50% - slogan only',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => '',
                            'description' => 'Center-right, light - description only',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            27 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate88427',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'In the middle, dark - button only',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ,,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'slogan' => '',
                            'description' => 'Top-right, dark - description only',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            28 => [
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'id' => 'component53a9_duplicate75927',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ,,/key/a1414039cdd309479b1d186619639c0619e071b185ed9263198335f1aad6f7b7/',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Bottom right, dark, button only',
                                'href' => '#',
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
                                        'intensity' => 80,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => false,
                                        'intensity' => 40,
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
                                        'intensity' => 40,
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
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                            'slogan' => 'In the middle slogan',
                            'description' => '',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => false,
                            'id' => 'text-image',
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
            29 => [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component4712',
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
            30 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'componente3ac',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'test54664',
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
            31 => [
                'type' => 'teaser-and-text',
                'name' => 'Teaser and text',
                'id' => 'component56f6',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                                'fetch_priority' => false,
                                'lazyload' => true,
                                'eagerload' => false,
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
                            'slogan' => 'Center-right',
                            'description' => 'Dark',
                            'cta' => [
                                'label' => 'More',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'lazyload' => true,
                                'eagerload' => false,
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
                            'slogan' => 'Top-right',
                            'description' => 'Gradient shadow 70% right center direction, light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '#',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
            32 => [
                'name' => 'Paragraph',
                'type' => 'paragraph',
                'id' => 'componente3ac_duplicate9798',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'test54664',
                    'columns' => 'none',
                    'content' => '<p>Desktop/tablet: OFF<br>Mobile: ON</p>',
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
            33 => [
                'type' => 'teaser-and-text',
                'name' => 'Teaser and text',
                'id' => 'component56f6_duplicate15677',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                                'fetch_priority' => false,
                                'lazyload' => true,
                                'eagerload' => false,
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
                            'slogan' => 'Center-right',
                            'description' => 'Dark',
                            'cta' => [
                                'label' => 'More',
                                'href' => '#',
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
                            'teaserType' => 'text-only',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/f7dd12ef73b0f898f4c090e709cecf5247c4d30b7795be0064d43ae1ea68ffa2/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvZmVkZXJpY2EtZ2FsbGktNzAzNTcyLXVuc3BsYXNoLmpwZyJ9fQ',
                                'decoded' => '{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}',
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => false,
                                'lazyload' => true,
                                'eagerload' => false,
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
                            'slogan' => 'Top-right',
                            'description' => 'Gradient shadow 70% right center direction, light',
                            'cta' => [
                                'label' => 'More',
                                'href' => '#',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => false,
                            'id' => 'image-text',
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
        ];
    }
}
