<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductGridNoIT extends DataProviderComponents
{
    public function getBlocks()
    {
        return [
            [
                'id' => 'componentd562',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Products grid without image teaser',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'component2170',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '1/1/1',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '1',
                    'rows_tablet' => '1',
                    'rows_mobile' => '1',
                    'skus' => '',
                    'limit' => '4',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'id' => 'component7d9d',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '2/2/2',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd_duplicate',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '2',
                    'rows_tablet' => '2',
                    'rows_mobile' => '2',
                    'skus' => '',
                    'limit' => '8',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'id' => 'component755b',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '3/3/3',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd_duplicate_duplicate',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '3',
                    'rows_tablet' => '3',
                    'rows_mobile' => '3',
                    'skus' => '',
                    'limit' => '12',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'id' => 'component0bbf',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '4/4/4',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd_duplicate_duplicate_duplicate',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '4',
                    'rows_tablet' => '4',
                    'rows_mobile' => '4',
                    'skus' => '',
                    'limit' => '16',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'id' => 'component6c43',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '5/5/5',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd_duplicate_duplicate_duplicate_duplicate',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '5',
                    'rows_tablet' => '5',
                    'rows_mobile' => '5',
                    'skus' => '',
                    'limit' => '20',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'id' => 'component0c66',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '2/3/4',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd_duplicate_duplicate_duplicate_duplicate_duplicate',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '4',
                    'rows_tablet' => '3',
                    'rows_mobile' => '2',
                    'skus' => '',
                    'limit' => '16',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'id' => 'component80a7',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '4/3/2',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd_duplicate_duplicate_duplicate_duplicate_duplicate_duplicate',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '2',
                    'rows_tablet' => '3',
                    'rows_mobile' => '4',
                    'skus' => '',
                    'limit' => '16',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'id' => 'component345f',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '6/8/10',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            [
                'id' => 'componentc7fd_duplicate_duplicate_duplicate_duplicate_duplicate_duplicate_duplicate',
                'section' => 'content',
                'type' => 'product-grid',
                'data' => [
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => '10',
                    'rows_tablet' => '8',
                    'rows_mobile' => '6',
                    'skus' => '',
                    'limit' => '40',
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => '',
                                'decoded' => '',
                                'aspect_ratio' => '',
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
                                    [
                                        'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                    ],
                                    [
                                        'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
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
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componenta0c6',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Products grid + Categories: Default category + filter ‘new products’',
                        'subtitle' => '',
                        'headingTag' => 'h2',
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'component54fc',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'category_id' => $this->getMainCategoryId(),
                        'filter' => 'new_products',
                        'order_by' => 'creation_date',
                        'order_type' => 'ASC',
                        'rows_desktop' => 1,
                        'rows_tablet' => 1,
                        'rows_mobile' => 1,
                        'skus' => '',
                        'limit' => 4,
                        'useTeaser' => '',
                        'scenario' =>
                            [
                                'contentPlacement' =>
                                    [
                                        'id' => 'over',
                                    ],
                            ],
                        'items' =>
                            [

                                [
                                    'image' =>
                                        [
                                            'raw' => '',
                                            'decoded' => '',
                                            'aspect_ratio' => '',
                                            'mobile' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                            'tablet' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                        ],
                                    'video' =>
                                        [
                                            'url' => '',
                                            'type' => '',
                                        ],
                                    'slogan' => '',
                                    'description' => '',
                                    'cta' =>
                                        [
                                            'label' => 'More',
                                            'href' => '',
                                        ],
                                    'content_align' =>
                                        [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                    'sizeSelect' => '2x1',
                                    'size' =>
                                        [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                    'row' => 1,
                                    'position' => 'left',
                                    'isAvailableForMobile' => 1,
                                    'optimizers' =>
                                        [
                                            'color_scheme' => 'dark',
                                            'mirror_image' => false,
                                            'scenarios' =>
                                                [
                                                    'none' =>
                                                        [
                                                            'enabled' => true,
                                                            'intensity' => 'disabled',
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_none',
                                                                    'label' => 'None',
                                                                ],
                                                        ],
                                                    'overlay' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_overlay',
                                                                    'label' => 'Overlay',
                                                                ],
                                                        ],
                                                    'gradient' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' =>
                                                                [
                                                                    'x' => 1,
                                                                    'y' => 1,
                                                                ],
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_gradient',
                                                                    'label' => 'Gradient shadow',
                                                                ],
                                                        ],
                                                    'container' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_container',
                                                                    'label' => 'Container',
                                                                ],
                                                        ],
                                                    'text_shadow' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_text-shadow',
                                                                    'label' => 'Text shadow',
                                                                ],
                                                        ],
                                                ],
                                        ],
                                    'teaserType' => 'full',
                                    'cc_css_classes' => '',
                                ],
                            ],
                        'isError' => false,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentf419',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Products grid + Categories: Default category + filter ‘Daily Deal’ + order by Offer to / ascending',
                        'subtitle' => '',
                        'headingTag' => 'h2',
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'component2137c',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'category_id' => $this->getMainCategoryId(),
                        'filter' => 'daily_deal',
                        'order_by' => 'creation_date',
                        'order_type' => 'ASC',
                        'rows_desktop' => 1,
                        'rows_tablet' => 1,
                        'rows_mobile' => 1,
                        'skus' => '',
                        'limit' => 4,
                        'useTeaser' => '',
                        'scenario' =>
                            [
                                'contentPlacement' =>
                                    [
                                        'id' => 'over',
                                    ],
                            ],
                        'items' =>
                            [

                                [
                                    'image' =>
                                        [
                                            'raw' => '',
                                            'decoded' => '',
                                            'aspect_ratio' => '',
                                            'mobile' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                            'tablet' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                        ],
                                    'video' =>
                                        [
                                            'url' => '',
                                            'type' => '',
                                        ],
                                    'slogan' => '',
                                    'description' => '',
                                    'cta' =>
                                        [
                                            'label' => 'More',
                                            'href' => '',
                                        ],
                                    'content_align' =>
                                        [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                    'sizeSelect' => '2x1',
                                    'size' =>
                                        [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                    'row' => 1,
                                    'position' => 'left',
                                    'isAvailableForMobile' => 1,
                                    'optimizers' =>
                                        [
                                            'color_scheme' => 'dark',
                                            'mirror_image' => false,
                                            'scenarios' =>
                                                [
                                                    'none' =>
                                                        [
                                                            'enabled' => true,
                                                            'intensity' => 'disabled',
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_none',
                                                                    'label' => 'None',
                                                                ],
                                                        ],
                                                    'overlay' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_overlay',
                                                                    'label' => 'Overlay',
                                                                ],
                                                        ],
                                                    'gradient' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' =>
                                                                [
                                                                    'x' => 1,
                                                                    'y' => 1,
                                                                ],
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_gradient',
                                                                    'label' => 'Gradient shadow',
                                                                ],
                                                        ],
                                                    'container' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_container',
                                                                    'label' => 'Container',
                                                                ],
                                                        ],
                                                    'text_shadow' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_text-shadow',
                                                                    'label' => 'Text shadow',
                                                                ],
                                                        ],
                                                ],
                                        ],
                                    'teaserType' => 'full',
                                    'cc_css_classes' => '',
                                ],
                            ],
                        'isError' => false,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'name' => 'Products grid',
                'type' => 'product-grid',
                'id' => 'componentd16a',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '',
                    'filter' => '',
                    'order_by' => 'created_at',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 3,
                    'useTeaser' => 'true',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
                            'image' => [
                                'raw' => 'https://magesuite-test.magesuite.net/mgsadmin/content-constructor/image/show/key/d480cb2ea772266c514769c7285ed6617c52f78acb10c40a2c7bebb97015dd49/image/e3ttZWRpYSB1cmw9Ind5c2l3eWcvWnJ6dXRfZWtyYW51XzIwMjItMDUtMTNfb18xNC41OS4wMS5wbmcifX0',
                                'decoded' => '{{media url="wysiwyg/Zrzut_ekranu_2022-05-13_o_14.59.01.png"}}',
                                'aspect_ratio' => '133:150',
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
                                'image' => 'https://d37asyxolk5ohw.cloudfront.net/wysiwyg/Zrzut_ekranu_2022-05-13_o_14.59.01.png',
                            ],
                            'video' => [
                                'url' => '',
                                'type' => '',
                            ],
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
                                'href' => '',
                                'target' => false,
                                'link' => false,
                            ],
                            'content_align' => [
                                'x' => 1,
                                'y' => 1,
                            ],
                            'sizeSelect' => '1x1',
                            'size' => [
                                'x' => '1',
                                'y' => '1',
                            ],
                            'row' => 1,
                            'position' => 'right',
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
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentfcff',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Products grid + order by Product name / ascending',
                        'subtitle' => '',
                        'headingTag' => 'h2',
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'componentd635',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'category_id' => '',
                        'filter' => '',
                        'order_by' => 'name',
                        'order_type' => 'ASC',
                        'rows_desktop' => 1,
                        'rows_tablet' => 1,
                        'rows_mobile' => 1,
                        'skus' => '',
                        'limit' => 4,
                        'useTeaser' => '',
                        'scenario' =>
                            [
                                'contentPlacement' =>
                                    [
                                        'id' => 'over',
                                    ],
                            ],
                        'items' =>
                            [

                                [
                                    'image' =>
                                        [
                                            'raw' => '',
                                            'decoded' => '',
                                            'aspect_ratio' => '',
                                            'mobile' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                            'tablet' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                        ],
                                    'video' =>
                                        [
                                            'url' => '',
                                            'type' => '',
                                        ],
                                    'slogan' => '',
                                    'description' => '',
                                    'cta' =>
                                        [
                                            'label' => 'More',
                                            'href' => '',
                                        ],
                                    'content_align' =>
                                        [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                    'sizeSelect' => '2x1',
                                    'size' =>
                                        [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                    'row' => 1,
                                    'position' => 'left',
                                    'isAvailableForMobile' => 1,
                                    'optimizers' =>
                                        [
                                            'color_scheme' => 'dark',
                                            'mirror_image' => false,
                                            'scenarios' =>
                                                [
                                                    'none' =>
                                                        [
                                                            'enabled' => true,
                                                            'intensity' => 'disabled',
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_none',
                                                                    'label' => 'None',
                                                                ],
                                                        ],
                                                    'overlay' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_overlay',
                                                                    'label' => 'Overlay',
                                                                ],
                                                        ],
                                                    'gradient' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' =>
                                                                [
                                                                    'x' => 1,
                                                                    'y' => 1,
                                                                ],
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_gradient',
                                                                    'label' => 'Gradient shadow',
                                                                ],
                                                        ],
                                                    'container' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_container',
                                                                    'label' => 'Container',
                                                                ],
                                                        ],
                                                    'text_shadow' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_text-shadow',
                                                                    'label' => 'Text shadow',
                                                                ],
                                                        ],
                                                ],
                                        ],
                                    'teaserType' => 'full',
                                    'cc_css_classes' => '',
                                ],
                            ],
                        'isError' => false,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component81ab',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Products grid + order by Product name / descending',
                        'subtitle' => '',
                        'headingTag' => 'h2',
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'componenta8a4',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'category_id' => '',
                        'filter' => '',
                        'order_by' => 'name',
                        'order_type' => 'DESC',
                        'rows_desktop' => 1,
                        'rows_tablet' => 1,
                        'rows_mobile' => 1,
                        'skus' => '',
                        'limit' => 4,
                        'useTeaser' => '',
                        'scenario' =>
                            [
                                'contentPlacement' =>
                                    [
                                        'id' => 'over',
                                    ],
                            ],
                        'items' =>
                            [

                                [
                                    'image' =>
                                        [
                                            'raw' => '',
                                            'decoded' => '',
                                            'aspect_ratio' => '',
                                            'mobile' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                            'tablet' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                        ],
                                    'video' =>
                                        [
                                            'url' => '',
                                            'type' => '',
                                        ],
                                    'slogan' => '',
                                    'description' => '',
                                    'cta' =>
                                        [
                                            'label' => 'More',
                                            'href' => '',
                                        ],
                                    'content_align' =>
                                        [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                    'sizeSelect' => '2x1',
                                    'size' =>
                                        [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                    'row' => 1,
                                    'position' => 'left',
                                    'isAvailableForMobile' => 1,
                                    'optimizers' =>
                                        [
                                            'color_scheme' => 'dark',
                                            'mirror_image' => false,
                                            'scenarios' =>
                                                [
                                                    'none' =>
                                                        [
                                                            'enabled' => true,
                                                            'intensity' => 'disabled',
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_none',
                                                                    'label' => 'None',
                                                                ],
                                                        ],
                                                    'overlay' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_overlay',
                                                                    'label' => 'Overlay',
                                                                ],
                                                        ],
                                                    'gradient' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' =>
                                                                [
                                                                    'x' => 1,
                                                                    'y' => 1,
                                                                ],
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_gradient',
                                                                    'label' => 'Gradient shadow',
                                                                ],
                                                        ],
                                                    'container' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_container',
                                                                    'label' => 'Container',
                                                                ],
                                                        ],
                                                    'text_shadow' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_text-shadow',
                                                                    'label' => 'Text shadow',
                                                                ],
                                                        ],
                                                ],
                                        ],
                                    'teaserType' => 'full',
                                    'cc_css_classes' => '',
                                ],
                            ],
                        'isError' => false,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component1012',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Products grid + order by Price / ascending',
                        'subtitle' => '',
                        'headingTag' => 'h2',
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'component99d0',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'category_id' => '',
                        'filter' => '',
                        'order_by' => 'price',
                        'order_type' => 'ASC',
                        'rows_desktop' => 1,
                        'rows_tablet' => 1,
                        'rows_mobile' => 1,
                        'skus' => '',
                        'limit' => 4,
                        'useTeaser' => '',
                        'scenario' =>
                            [
                                'contentPlacement' =>
                                    [
                                        'id' => 'over',
                                    ],
                            ],
                        'items' =>
                            [
                                [
                                    'image' =>
                                        [
                                            'raw' => '',
                                            'decoded' => '',
                                            'aspect_ratio' => '',
                                            'mobile' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                            'tablet' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                        ],
                                    'video' =>
                                        [
                                            'url' => '',
                                            'type' => '',
                                        ],
                                    'slogan' => '',
                                    'description' => '',
                                    'cta' =>
                                        [
                                            'label' => 'More',
                                            'href' => '',
                                        ],
                                    'content_align' =>
                                        [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                    'sizeSelect' => '2x1',
                                    'size' =>
                                        [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                    'row' => 1,
                                    'position' => 'left',
                                    'isAvailableForMobile' => 1,
                                    'optimizers' =>
                                        [
                                            'color_scheme' => 'dark',
                                            'mirror_image' => false,
                                            'scenarios' =>
                                                [
                                                    'none' =>
                                                        [
                                                            'enabled' => true,
                                                            'intensity' => 'disabled',
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_none',
                                                                    'label' => 'None',
                                                                ],
                                                        ],
                                                    'overlay' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_overlay',
                                                                    'label' => 'Overlay',
                                                                ],
                                                        ],
                                                    'gradient' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' =>
                                                                [
                                                                    'x' => 1,
                                                                    'y' => 1,
                                                                ],
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_gradient',
                                                                    'label' => 'Gradient shadow',
                                                                ],
                                                        ],
                                                    'container' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_container',
                                                                    'label' => 'Container',
                                                                ],
                                                        ],
                                                    'text_shadow' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_text-shadow',
                                                                    'label' => 'Text shadow',
                                                                ],
                                                        ],
                                                ],
                                        ],
                                    'teaserType' => 'full',
                                    'cc_css_classes' => '',
                                ],
                            ],
                        'isError' => false,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component0e4b',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Products grid + order by Price / descending',
                        'subtitle' => '',
                        'headingTag' => 'h2',
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'component52c9',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'category_id' => '',
                        'filter' => '',
                        'order_by' => 'price',
                        'order_type' => 'DESC',
                        'rows_desktop' => 1,
                        'rows_tablet' => 1,
                        'rows_mobile' => 1,
                        'skus' => '',
                        'limit' => 4,
                        'useTeaser' => '',
                        'scenario' =>
                            [
                                'contentPlacement' =>
                                    [
                                        'id' => 'over',
                                    ],
                            ],
                        'items' =>
                            [
                                [
                                    'image' =>
                                        [
                                            'raw' => '',
                                            'decoded' => '',
                                            'aspect_ratio' => '',
                                            'mobile' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                            'tablet' =>
                                                [
                                                    'raw' => '',
                                                    'decoded' => '',
                                                    'aspect_ratio' => '',
                                                ],
                                        ],
                                    'video' =>
                                        [
                                            'url' => '',
                                            'type' => '',
                                        ],
                                    'slogan' => '',
                                    'description' => '',
                                    'cta' =>
                                        [
                                            'label' => 'More',
                                            'href' => '',
                                        ],
                                    'content_align' =>
                                        [
                                            'x' => 1,
                                            'y' => 1,
                                        ],
                                    'sizeSelect' => '2x1',
                                    'size' =>
                                        [
                                            'x' => 2,
                                            'y' => 1,
                                        ],
                                    'row' => 1,
                                    'position' => 'left',
                                    'isAvailableForMobile' => 1,
                                    'optimizers' =>
                                        [
                                            'color_scheme' => 'dark',
                                            'mirror_image' => false,
                                            'scenarios' =>
                                                [
                                                    'none' =>
                                                        [
                                                            'enabled' => true,
                                                            'intensity' => 'disabled',
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_none',
                                                                    'label' => 'None',
                                                                ],
                                                        ],
                                                    'overlay' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_overlay',
                                                                    'label' => 'Overlay',
                                                                ],
                                                        ],
                                                    'gradient' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' =>
                                                                [
                                                                    'x' => 1,
                                                                    'y' => 1,
                                                                ],
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_gradient',
                                                                    'label' => 'Gradient shadow',
                                                                ],
                                                        ],
                                                    'container' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_container',
                                                                    'label' => 'Container',
                                                                ],
                                                        ],
                                                    'text_shadow' =>
                                                        [
                                                            'enabled' => false,
                                                            'intensity' => 50,
                                                            'direction' => 'disabled',
                                                            'configurator' =>
                                                                [
                                                                    'icon' => '#contrast_text-shadow',
                                                                    'label' => 'Text shadow',
                                                                ],
                                                        ],
                                                ],
                                        ],
                                    'teaserType' => 'full',
                                    'cc_css_classes' => '',
                                ],
                            ],
                        'isError' => false,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component3ee6',
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
            [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'componentb64d',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'test65754t',
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
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'componentf9e9',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '2',
                    'filter' => '',
                    'order_by' => 'creation_date',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 4,
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
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
                    'isError' => false,
                    'cc_css_classes' => '',
                    'componentVisibility' => [
                        'mobile' => false,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                'name' => 'Paragraph',
                'type' => 'paragraph',
                'id' => 'componentb64d_duplicate13021',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => 'test65754t',
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
            [
                'type' => 'product-grid',
                'name' => 'Products grid',
                'id' => 'componentf9e9_duplicate83045',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'category_id' => '2',
                    'filter' => '',
                    'order_by' => 'creation_date',
                    'order_type' => 'ASC',
                    'rows_desktop' => 1,
                    'rows_tablet' => 1,
                    'rows_mobile' => 1,
                    'skus' => '',
                    'limit' => 4,
                    'useTeaser' => '',
                    'scenario' => [
                        'contentPlacement' => [
                            'id' => 'over',
                        ],
                    ],
                    'items' => [
                        [
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
                            'slogan' => '',
                            'description' => '',
                            'cta' => [
                                'label' => 'More',
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
