<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class TTContainerWidth extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'id' => 'componentb317',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Teaser & text component',
                    'subtitle' => 'Container width',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            1 => [
                'id' => 'component6cce',
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
                'id' => 'component7ac0',
                'section' => 'content',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                                        'intensity' => '60',
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
                            'slogan' => 'Top-left',
                            'description' => 'Gradient shadow top 60%',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component600d',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Container 50%<br>Dark text style<br>Top - left',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component16b3',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'description' => 'Top-right<br>Dark text style',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component9136',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                                'label' => 'Center-left',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component8b33',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component605a',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                            'slogan' => 'Center-right',
                            'description' => 'Gradient shadow bottom 80%',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'componentfeba',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Container 20%<br>Light text style<br>Top - right<br>Mirror image<br>',
                            'cta' => [
                                'label' => 'More',
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
                                        'intensity' => '20',
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
                            'slogan' => 'Bottom-left',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component4015',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                            'description' => 'Bottom -  center<br>Light text style',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component4ba5',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'componentb6dc',
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
                'id' => 'componentaa0a',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                                        'intensity' => '30',
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
                            'description' => 'Overlay 30%',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'componentfeb6',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Text shadow 80%<br>In the middle<br>Dark text style',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
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
                                        'intensity' => '80',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component25a8',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                                'href' => '#',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component1590',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'componentf8ff',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component0fae',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                            'description' => 'Overlay 60%',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                                        'intensity' => '60',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component6565',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
                            ],
                            'slogan' => '',
                            'description' => 'Text shadow 50%<br>Bottom - left<br>Light text style',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component6547',
                'section' => 'content',
                'name' => 'Teaser and text',
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
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
                'id' => 'component5966',
                'section' => 'content',
                'name' => 'Teaser and text',
                'type' => 'teaser-and-text',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('federica-galli-703572-unsplash.jpg'),
                                'aspect_ratio' => '960:511',
                                'image' => $this->getImage('federica-galli-703572-unsplash.jpg'),
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
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => '',
                            'id' => 'container',
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
