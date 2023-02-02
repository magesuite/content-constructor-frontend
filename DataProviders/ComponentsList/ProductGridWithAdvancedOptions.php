<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductGridWithAdvancedOptions extends DataProviderComponents
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
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'componentfeed',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate7154',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'right',
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
                                        'enabled' => true,
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate64911',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate80709',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate98758',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'right',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate22407',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate95855',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
            10 => [
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate85406',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate86644',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate8881',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'right',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate10235',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate7842',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
            16 => [
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate68048',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate11782',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate22524',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate47795',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'right',
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
                            'cc_css_classes' => '',
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
            21 => [
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate81479',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate51932',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate55520',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'center',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate2643',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'right',
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
                            'cc_css_classes' => '',
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
            26 => [
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate80550',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'cc_css_classes' => '',
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
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentfeed_duplicate93406',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '20',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 2,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/1805417d4cb5e0fa255b1c8237a02edf5904071cf1c62cb1607641c4b0af7e5f/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvYW5uaWUtc3ByYXR0LTI5NDQ1MC11bnNwbGFzaC5qcGcifX0',
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
                            'position' => 'right',
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
                                        'enabled' => true,
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
                            'cc_css_classes' => '',
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
