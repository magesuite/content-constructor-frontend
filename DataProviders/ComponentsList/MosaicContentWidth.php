<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class MosaicContentWidth extends DataProviderComponents
{
    public function getBlocks()
    {
        return [
            0 => [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componenta550',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'Mosaic - Content width',
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
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentcea5',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '2/3 teaser on the left',
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
                'type' => 'mosaic',
                'name' => 'Mosaic',
                'id' => 'componentd4aa',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'No optimizer',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right',
                            'description' => 'No optimizer',
                            'cta' => [
                                'label' => 'Dark',
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
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            3 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate67775',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'No optimizer',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-right',
                            'description' => 'No optimizer',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            4 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate42579',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay 80%',
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-center',
                            'description' => 'Overlay 30%',
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
                                        'intensity' => 30,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            5 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate29236',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-left',
                            'description' => 'Overlay 40%',
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
                                        'intensity' => 40,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay 70%',
                            'cta' => [
                                'label' => 'Light',
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
                                        'enabled' => true,
                                        'intensity' => 70,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            6 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate71443',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Gradient shadow 80%, direction top-right, mirror',
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
                                        'intensity' => 50,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Gradient shadow 50%, direction bottom-center',
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
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 2,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            7 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate9074',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-right',
                            'description' => 'Gradient shadow 60%, direction top-left',
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
                                        'intensity' => 60,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Gradient shadow 90%, direction center-right, mirror',
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
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 90,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            8 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate90321',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Container 70%',
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Container 20%',
                            'cta' => [
                                'label' => 'Dark',
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
                                        'intensity' => 20,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            9 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate43944',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-center',
                            'description' => 'Container 100%, mirror',
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
                                        'intensity' => 100,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Container 50%',
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
                    'ignoredItems' => [
                    ],
                    'scenario' => [
                        'teaserWidth' => [
                            'name' => 'Content width',
                            'iconId' => 'tw_content-width',
                            'disabled' => false,
                            'id' => 'container',
                        ],
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            10 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate2766',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right',
                            'description' => 'Text shadow 90%, mirror',
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-left',
                            'description' => 'Text shadow 100%',
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
                                        'enabled' => false,
                                        'intensity' => 50,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            11 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate22736',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Text shadow 100%',
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
                                        'enabled' => false,
                                        'intensity' => 50,
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Text shadow 80%',
                            'cta' => [
                                'label' => 'Dark',
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
                                        'enabled' => true,
                                        'intensity' => 80,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            12 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate1855',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Slogan only',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button only',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            13 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate74789',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Description only',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Slogan only',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            14 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate64161',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button only',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Description only',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            15 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate21755',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            16 => [
                'type' => 'mosaic',
                'name' => 'Mosaic',
                'id' => 'componented11',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text below image',
                            'iconId' => 'tl_under',
                            'disabled' => false,
                            'contentPlacement' => false,
                            'id' => 'under',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            17 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componented11_duplicate33496',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image, mirror',
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
                                'mirror_image' => true,
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image, mirror',
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
                                'mirror_image' => true,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text below image',
                            'iconId' => 'tl_under',
                            'disabled' => false,
                            'contentPlacement' => false,
                            'id' => 'under',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            18 => [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component2904',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '2/3 teaser on the right',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            19 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate17441',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right',
                            'description' => 'No optimizer',
                            'cta' => [
                                'label' => 'Dark',
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'No optimizer',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            20 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate46130',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-right',
                            'description' => 'No optimizer',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'No optimizer',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            21 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate25782',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-center',
                            'description' => 'Overlay 30%',
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
                                        'intensity' => 30,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay 80%',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            22 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate64525',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Overlay 70%',
                            'cta' => [
                                'label' => 'Light',
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
                                        'enabled' => true,
                                        'intensity' => 70,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-left',
                            'description' => 'Overlay 40%',
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
                                        'intensity' => 40,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            23 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate28131',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Gradient shadow 50%, direction bottom-center',
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
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 50,
                                        'direction' => [
                                            'x' => 2,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Gradient shadow 80%, direction top-right, mirror',
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
                                        'intensity' => 50,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            24 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate33043',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'In the middle',
                            'description' => 'Gradient shadow 90%, direction center-right, mirror',
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
                                        'intensity' => 50,
                                        'direction' => 'disabled',
                                        'configurator' => [
                                            'icon' => '#contrast_overlay',
                                            'label' => 'Overlay',
                                        ],
                                    ],
                                    'gradient' => [
                                        'enabled' => true,
                                        'intensity' => 90,
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-right',
                            'description' => 'Gradient shadow 60%, direction top-left',
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
                                        'intensity' => 60,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            25 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate46772',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Container 20%',
                            'cta' => [
                                'label' => 'Dark',
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
                                        'intensity' => 20,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-left',
                            'description' => 'Container 70%',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            26 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate1089',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Container 50%',
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-center',
                            'description' => 'Container 100%, mirror',
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
                                        'intensity' => 100,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            27 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate31553',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-left',
                            'description' => 'Text shadow 100%',
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
                                        'enabled' => false,
                                        'intensity' => 50,
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
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Bottom-right',
                            'description' => 'Text shadow 90%, mirror',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            28 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate64544',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-center',
                            'description' => 'Text shadow 80%',
                            'cta' => [
                                'label' => 'Dark',
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
                                        'enabled' => true,
                                        'intensity' => 80,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-right',
                            'description' => 'Text shadow 100%',
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
                                        'enabled' => false,
                                        'intensity' => 50,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            29 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate77184',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button only',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Slogan only',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            30 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate34898',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Slogan only',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Description only',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            31 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate69815',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => 'Description only',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'Button only',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate3930',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            33 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componented11_duplicate65418',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image',
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image',
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text below image',
                            'iconId' => 'tl_under',
                            'disabled' => false,
                            'contentPlacement' => false,
                            'id' => 'under',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            34 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componented11_duplicate65013',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMi5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image, mirror',
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
                                'mirror_image' => true,
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
                            'teaserType' => 'full',
                            'image_alt' => '',
                            'cc_css_classes' => '',
                        ],
                        1 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/cms/wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWRhcmstMS5qcGcifX0,/key/38f83c538d90ba6642337b54f786092a90d7e638818e1c2aaeb46ecf35614859/',
                                'decoded' => '{{media url="creative_components/mosaic-dark-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-dark-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Mosaic',
                            'description' => 'Text below image, mirror',
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
                                'mirror_image' => true,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_2',
                            'disabled' => false,
                            'id' => '2',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text below image',
                            'iconId' => 'tl_under',
                            'disabled' => false,
                            'contentPlacement' => false,
                            'id' => 'under',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            35 => [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentf138',
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
            36 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'componentac05',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'test564',
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
            37 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate63568',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Text over image, Container 70%',
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
                                        'intensity' => 90,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-right',
                            'description' => 'Gradient shadow 80%, top-center direction',
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
                                        'intensity' => 80,
                                        'direction' => [
                                            'x' => 2,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
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
            38 => [
                'name' => 'Paragraph',
                'type' => 'paragraph',
                'id' => 'componentac05_duplicate28445',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'test564',
                    'columns' => 'none',
                    'content' => '<p>Desktop/tablet: OFF<br>Mobile: OFF</p>',
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
            39 => [
                'name' => 'Mosaic',
                'type' => 'mosaic',
                'id' => 'componentd4aa_duplicate89294',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'items' => [
                        0 => [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTEuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-1.jpg"}}',
                                'aspect_ratio' => '2:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-1.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Top-left',
                            'description' => 'Text over image, Container 70%',
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
                                        'intensity' => 90,
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
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/2a095df17197e22ce2dc702e501f3cf0aaee5e06f1172679b8bdc25d75bfe35c/image/e3ttZWRpYSB1cmw9ImNyZWF0aXZlX2NvbXBvbmVudHMvbW9zYWljLWxpZ2h0LTIuanBnIn19',
                                'decoded' => '{{media url="creative_components/mosaic-light-2.jpg"}}',
                                'aspect_ratio' => '1:1',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/creative_components/mosaic-light-2.jpg',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => 'Center-right',
                            'description' => 'Gradient shadow 80%, top-center direction',
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
                                        'intensity' => 80,
                                        'direction' => [
                                            'x' => 2,
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
                        'proportions' => [
                            'name' => '',
                            'iconId' => 'proportion_1',
                            'disabled' => false,
                            'id' => '1',
                        ],
                        'contentPlacement' => [
                            'name' => 'Text over image',
                            'iconId' => 'tl_over',
                            'disabled' => false,
                            'contentPlacement' => true,
                            'id' => 'over',
                        ],
                        'desktopLayout' => [
                            'id' => '2',
                        ],
                        'mobileLayout' => [
                            'id' => 'mobile-in-columns',
                        ],
                    ],
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => false,
                        'desktop' => false,
                    ],
                ],
            ],
        ];
    }
}
