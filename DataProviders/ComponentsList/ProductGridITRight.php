<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductGridITRight extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'id' => 'component6220',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Product grid with image teaser on the right',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            1 => [
                'id' => 'componente54a',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '1/1/1',
                    'subtitle' => '1x1 / 1st row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            2 => [
                'id' => 'componenta423',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '1',
                    'rows_tablet' => '1',
                    'rows_mobile' => '1',
                    'skus' => '',
                    'limit' => '3',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' =>  $this->getDecodedImage('kyle-frederick-1180064-unsplash.jpg'),
                                'aspect_ratio' => '1:1',
                                'image' => $this->getImage('kyle-frederick-1180064-unsplash.jpg'),
                            ],
                            'slogan' => 'Top - left',
                            'description' => 'Overlay 50%<br>Show in mobiles: No',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'sizeSelect' => '1x1',
                            'size' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'row' => '1',
                            'position' => 'right',
                            'isAvailableForMobile' => '',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            3 => [
                'id' => 'componentec87',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '2/2/2',
                    'subtitle' => '1x2 / 1st row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            4 => [
                'id' => 'componente1a2',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '2',
                    'rows_tablet' => '2',
                    'rows_mobile' => '2',
                    'skus' => '',
                    'limit' => '6',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('eneko-urunuela-646064-unsplash.jpg'),
                                'aspect_ratio' => '369:953',
                                'image' => $this->getImage('eneko-urunuela-646064-unsplash.jpg'),
                            ],
                            'slogan' => 'Top - center',
                            'description' => 'Show in mobiles: No',
                            'cta' => [
                                'label' => 'Dark',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '1',
                            ],
                            'sizeSelect' => '1x2',
                            'size' => [
                                'x' => '1',
                                'y' => '2',
                            ],
                            'row' => '1',
                            'position' => 'right',
                            'isAvailableForMobile' => '',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            5 => [
                'id' => 'componentbee3',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '3/3/3',
                    'subtitle' => '2x1 / 1st row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            6 => [
                'id' => 'component1a7e',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '3',
                    'rows_tablet' => '3',
                    'rows_mobile' => '3',
                    'skus' => '',
                    'limit' => '10',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' =>  $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Top - right',
                            'description' => 'Container 70%<br>Show in mobiles: No',
                            'cta' => [
                                'label' => 'Dark',
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
                            'position' => 'right',
                            'isAvailableForMobile' => '',
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
                                        'intensity' => '70',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            7 => [
                'id' => 'component837f',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '4/4/4',
                    'subtitle' => '2x2 / 1st row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            8 => [
                'id' => 'componentdf05',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '4',
                    'rows_tablet' => '4',
                    'rows_mobile' => '4',
                    'skus' => '',
                    'limit' => '14',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' =>  $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                                'aspect_ratio' => '574:571',
                                'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                            ],
                            'slogan' => 'Center - left',
                            'description' => 'Gradient shadow center - left 80% <br>Show in mobiles: No',
                            'cta' => [
                                'label' => 'Dark',
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
                            'position' => 'right',
                            'isAvailableForMobile' => '',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            9 => [
                'id' => 'component4351',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '5/5/5',
                    'subtitle' => '2x2 / 4th row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            10 => [
                'id' => 'componentfb53',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '5',
                    'rows_tablet' => '5',
                    'rows_mobile' => '5',
                    'skus' => '',
                    'limit' => '16',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' =>  $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                                'aspect_ratio' => '574:571',
                                'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Container 60%<br>Show in mobiles: No',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '2',
                            ],
                            'sizeSelect' => '2x2',
                            'size' => [
                                'x' => '2',
                                'y' => '2',
                            ],
                            'row' => '4',
                            'position' => 'right',
                            'isAvailableForMobile' => '',
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
                                        'intensity' => '60',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            11 => [
                'id' => 'component86ff',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '2/3/4',
                    'subtitle' => '2x1 / 4th row (last)',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            12 => [
                'id' => 'component68f4',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '4',
                    'rows_tablet' => '3',
                    'rows_mobile' => '2',
                    'skus' => '',
                    'limit' => '14',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' =>  $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Center - right',
                            'description' => 'Text shadow 100%<br>Show in mobiles: No',
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
                            'position' => 'right',
                            'isAvailableForMobile' => '',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            13 => [
                'id' => 'component7e26',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '4/3/2',
                    'subtitle' => '1x2 / 1st row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            14 => [
                'id' => 'component6209',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '2',
                    'rows_tablet' => '3',
                    'rows_mobile' => '4',
                    'skus' => '',
                    'limit' => '14',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' => $this->getDecodedImage('eneko-urunuela-646064-unsplash.jpg'),
                                'aspect_ratio' => '369:953',
                                'image' => $this->getImage('eneko-urunuela-646064-unsplash.jpg'),
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
                            'sizeSelect' => '1x2',
                            'size' => [
                                'x' => '1',
                                'y' => '2',
                            ],
                            'row' => '1',
                            'position' => 'right',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            15 => [
                'id' => 'component4a06',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '6/8/10',
                    'subtitle' => '1x1 / 5th row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            16 => [
                'id' => 'componentd839',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '10',
                    'rows_tablet' => '8',
                    'rows_mobile' => '6',
                    'skus' => '',
                    'limit' => '39',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' =>  $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                                'aspect_ratio' => '574:571',
                                'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                            ],
                            'slogan' => 'Bottom - center',
                            'description' => '',
                            'cta' => [
                                'label' => 'Light',
                                'href' => '#',
                            ],
                            'content_align' => [
                                'x' => '2',
                                'y' => '3',
                            ],
                            'sizeSelect' => '1x1',
                            'size' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'row' => '5',
                            'position' => 'right',
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
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            17 => [
                'id' => 'componentad40',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '9/5/3',
                    'subtitle' => '2x1 / 2nd row',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            18 => [
                'id' => 'component6646',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '3',
                    'rows_tablet' => '5',
                    'rows_mobile' => '9',
                    'skus' => '',
                    'limit' => '34',
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'decoded' =>  $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                'aspect_ratio' => '1163:780',
                                'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                            ],
                            'slogan' => 'Bottom - right',
                            'description' => 'Gradient shadow bottom - right 50%<br>Show in mobiles: No',
                            'cta' => [
                                'label' => 'Light',
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
                            'row' => '2',
                            'position' => 'right',
                            'isAvailableForMobile' => '',
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
                                        'intensity' => '50',
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