<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class TTWindowWidth extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'id' => 'component421f',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Teaser & text component',
                    'subtitle' => 'Window width',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            1 => [
                'id' => 'componentcb4e',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Mobile: image top - text bottom',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            2 => [
                'id' => 'component80a7',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                                        'intensity' => '90',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Top - left',
                            'description' => 'Gradient shadow left 90%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            3 => [
                'id' => 'component6792',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Top - center',
                            'description' => '',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'Container 50%<br>Dark text style<br>Bottom - right',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '3',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            4 => [
                'id' => 'component3655',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Top - right<br>Dark text style',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            5 => [
                'id' => 'component4571',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Center - left',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            6 => [
                'id' => 'component005e',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            7 => [
                'id' => 'component2228',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Center - right',
                            'description' => 'Gradient shadow right 70%',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            8 => [
                'id' => 'component1fd1',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => 'Container 20%<br>Light text style<br>Top - center<br>Mirror image',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
                            'optimizers' => [
                                'color_scheme' => 'light',
                                'mirror_image' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Bottom - left',
                            'description' => '',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '3',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            9 => [
                'id' => 'component2cb8',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Bottom - center<br>Light text style',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '3',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            10 => [
                'id' => 'componentca2d',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Bottom - right',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '3',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Image (top) - text (bottom)',
                            'iconId' => 'mb_1',
                            'disabled' => '',
                            'id' => 'image-text',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            11 => [
                'id' => 'component3d74',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Mobile: text top - image bottom',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            12 => [
                'id' => 'component5224',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Top - left',
                            'description' => 'Overlay 50%',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            13 => [
                'id' => 'component626a',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Top - center',
                            'description' => '',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Text shadow 100%<br>Center - right<br>Dark text style',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                                        'configurator' => [
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            14 => [
                'id' => 'component8fe2',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Top - right<br>Dark text style',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            15 => [
                'id' => 'component18dc',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Center - left',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            16 => [
                'id' => 'component70d0',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            17 => [
                'id' => 'component0dea',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Center - right',
                            'description' => 'Overlay 70%',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                                        'enabled' => '1',
                                        'intensity' => '70',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            18 => [
                'id' => 'component13ac',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Text shadow 100%<br>Center - left<br>Light text style',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                                        'intensity' => '100',
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_text-shadow',
                                            'label' => 'Text shadow',
                                        ],
                                    ],
                                ],
                            ],
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => 'Bottom - left',
                            'description' => '',
                            'cta' => [
                                'label' => 'Light ',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '3',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            19 => [
                'id' => 'component0c5a',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Bottom - center<br>Light text style',
                            'cta' => [
                                'label' => '',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '3',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            20 => [
                'id' => 'component5381',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('annie-spratt-294450-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('annie-spratt-294450-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Bottom - right',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '3',
                                'y' => '3',
                            ],
                            'sizeSelect' => '2x1',
                            'size' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'left',
                            'isAvailableForMobile' => '1',
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
                            'badge' => [
                                'value' => '',
                                'align' => [
                                    'x' => '1',
                                    'y' => '1',
                                ],
                                'examples' => [
                                    0 => [
                                        'text' => '<small>Only</small><br> {{price sku="some_sku"}}',
                                    ],
                                    1 => [
                                        'text' => '{{sku sku="some_sku"}}',
                                    ],
                                    2 => [
                                        'text' => '<big>Only</big> {{qty sku="some_sku"}} left',
                                    ],
                                ],
                            ],
                            'teaserType' => 'full',
                            'cc_css_classes' => '',
                        ],
                    ],
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Browser width',
                            'iconId' => 'tw_window-width',
                            'disabled' => '',
                            'id' => 'window',
                        ],
                        'desktopLayout' => [
                        ],
                        'contentPlacement' => [
                        ],
                        'mobileLayout' => [
                            'name' => 'Text (top) - image (bottom)',
                            'iconId' => 'mb_2',
                            'disabled' => '',
                            'id' => 'text-image',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
        ];

        return $blocks;
    }
}
