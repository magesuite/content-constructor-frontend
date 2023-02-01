<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class HeroCarouselWithAdvancedOptions extends DataProviderComponents
{
    public function getBlocks(): array
    {
        return [
            0 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component3098',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '↓ High fetch priority',
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
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate76526',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'High fetch priority: NO',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => true,
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
                            'slogan' => 'High fetch priority: YES',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
            2 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate43616',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'id' => 'slider',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => true,
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
                            'slogan' => 'High fetch priority: YES',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'High fetch priority: NO',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                        2 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
                                'decoded' => '{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}',
                                'aspect_ratio' => '960:511',
                                'fetch_priority' => true,
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
                            'slogan' => 'High fetch priority: YES',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
            3 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component3098_duplicate75521',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '↓ Alts',
                    'subtitle' => 'Alt: - (nothing)',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            4 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate23800',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
            5 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate56173',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'id' => 'slider',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Slogan',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => '',
                            'description' => 'Description',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
            6 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate65467',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button',
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Slogan',
                            'description' => 'Description',
                            'cta' => [
                                'label' => 'Button',
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
            7 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component3098_duplicate36165',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '',
                    'subtitle' => 'Alt: TEST',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            8 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate38346',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                            'image_alt' => 'TEST',
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
            9 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate38716',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'id' => 'slider',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Slogan',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                            'image_alt' => 'TEST',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => '',
                            'description' => 'Description',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                            'image_alt' => 'TEST',
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
            10 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate6198',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button',
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
                            'image_alt' => 'TEST',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Slogan',
                            'description' => 'Description',
                            'cta' => [
                                'label' => 'Button',
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
                            'image_alt' => 'TEST',
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
            11 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component3098_duplicate52043',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '↓ CTA',
                    'subtitle' => 'Button: - (nothing)',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            12 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate20304',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: NO<br>Link only CTA button: NO',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
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
            13 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate2187',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'id' => 'slider',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: YES<br>Link only CTA button: NO',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
                                'target' => true,
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: NO<br>Link only CTA button: YES',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
                                'target' => false,
                                'link' => true,
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
            14 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate46120',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: YES<br>Link only CTA button: YES',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
                                'target' => true,
                                'link' => true,
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
            15 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component3098_duplicate73309',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '',
                    'subtitle' => 'Button: Button',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            16 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate56058',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: NO<br>Link only CTA button: NO',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
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
            17 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate61571',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'id' => 'slider',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: YES<br>Link only CTA button: NO',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
                                'target' => true,
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: NO<br>Link only CTA button: YES',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
                                'target' => false,
                                'link' => true,
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
            18 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate11203',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Open link in new tab: YES<br>Link only CTA button: YES',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button',
                                'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="1"}}',
                                'target' => true,
                                'link' => true,
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
            19 => [
                'name' => 'Headline',
                'type' => 'headline',
                'id' => 'component3098_duplicate69683',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '↓ Promotion tracking',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            20 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate80773',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Large teaser',
                        'iconId' => 'ml_col',
                        'id' => 'list',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Tracking ID: - (nothing)',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
            21 => [
                'name' => 'Hero Carousel',
                'type' => 'hero-carousel',
                'id' => 'component4fed_duplicate80200',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'mobileDisplayVariant' => [
                        'name' => 'Slider',
                        'iconId' => 'ml_slider',
                        'id' => 'slider',
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Tracking ID: TEST',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
                            'tracking_id' => 'TEST',
                            'teaserType' => 'full',
                            'image_alt' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a56a5fd200581160b2648fbcd87dc58ed51ae2dc22ab2453074b167a42ba0ba/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'slogan' => 'Tracking ID: - (nothing)',
                            'description' => '',
                            'cta' => [
                                'label' => '',
                                'href' => '',
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
        ];
    }
}
