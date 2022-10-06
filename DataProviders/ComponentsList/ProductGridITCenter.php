<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductGridITCenter extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 =>
                [
                    'id' => 'component546rr0d18',
                    'section' => 'content',
                    'type' => 'headline',
                    'data' =>
                        [
                            'title' => 'Product grid with image teaser on the left',
                            'subtitle' => '',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            1 =>
                [
                    'type' => 'headline',
                    'id' => 'component546rr969f',
                    'section' => 'content',
                    'data' =>
                        [
                            'title' => '1/1/1',
                            'subtitle' => '',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                            'cc_css_classes' => '',
                        ],
                ],
            2 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rr3df2',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 1, tablet: 1, desktop: 1 + Teaser size: 1x1 + Row: 1 (first) + Show in mobiles: Yes',
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
            3 =>
                [
                    'type' => 'product-grid',
                    'id' => 'component546rr33a0',
                    'section' => 'content',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '1',
                            'rows_tablet' => '1',
                            'rows_mobile' => '1',
                            'skus' => '',
                            'limit' => 3,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_1.jpg'),
                                                    'aspect_ratio' => '574:571',
                                                    'image' => $this->getImage('teaser_1.jpg'),
                                                ],
                                            'slogan' => 'Top - left',
                                            'description' => 'Overlay 20%<br>Show in mobiles: No',
                                            'cta' =>
                                                [
                                                    'label' => 'Dark',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '1',
                                                ],
                                            'sizeSelect' => '1x1',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '1',
                                                ],
                                            'row' => '1',
                                            'position' => 'center',
                                            'isAvailableForMobile' => true,
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'dark',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '',
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
                                                                    'enabled' => '1',
                                                                    'intensity' => '20',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '1',
                                                                            'y' => '1',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                            'cc_css_classes' => '',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                            'isError' => false,
                            'cc_css_classes' => '',
                        ],
                ],
            4 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rrcb3f',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 1, tablet: 1, desktop: 1 + Teaser size: 2x1 + Row: 1 + Show in mobiles: No',
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
            5 =>
                [
                    'name' => 'Products grid',
                    'type' => 'product-grid',
                    'id' => 'component546rr34f8',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => 1,
                            'rows_tablet' => 1,
                            'rows_mobile' => 1,
                            'skus' => '',
                            'limit' => 2,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_grid_2x1.jpg'),
                                                    'aspect_ratio' => '8:23',
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
                                                    'image' => $this->getImage('teaser_grid_2x1.jpg'),
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
                                            'position' => 'center',
                                            'isAvailableForMobile' => false,
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
            6 =>
                [
                    'type' => 'headline',
                    'id' => 'component546rr5d5a',
                    'section' => 'content',
                    'data' =>
                        [
                            'title' => '2/2/2',
                            'subtitle' => '',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                            'cc_css_classes' => '',
                        ],
                ],
            7 =>
                [
                    'name' => 'Headline',
                    'type' => 'headline',
                    'id' => 'component546rr1c10',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 2, tablet: 2, desktop: 2 + Teaser size: 1x2 + Row: 1 (first) + Show in mobiles: Yes',
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
            8 =>
                [
                    'type' => 'product-grid',
                    'id' => 'component546rr91de',
                    'section' => 'content',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '2',
                            'rows_tablet' => '2',
                            'rows_mobile' => '2',
                            'skus' => '',
                            'limit' => 6,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_grid_2x1.jpg'),
                                                    'aspect_ratio' => '369:953',
                                                    'image' => $this->getImage('teaser_grid_2x1.jpg')
                                                ],
                                            'slogan' => 'Top - center',
                                            'description' => 'Show in mobiles: Yes',
                                            'cta' =>
                                                [
                                                    'label' => 'Dark',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '1',
                                                ],
                                            'sizeSelect' => '1x2',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '2',
                                                ],
                                            'row' => '1',
                                            'position' => 'center',
                                            'isAvailableForMobile' => true,
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'dark',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => false,
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
                                                                    'intensity' => '50',
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
                                                                    'intensity' => '50',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '1',
                                                                            'y' => '1',
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
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => true,
                                                                    'intensity' => 40,
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                            'cc_css_classes' => '',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                            'isError' => false,
                            'cc_css_classes' => '',
                        ],
                ],
            9 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rr762a',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 2, tablet: 2, desktop: 2 + Teaser size: 1x1 + Row: 2 (last) + Show in mobiles: Yes',
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
            10 =>
                [
                    'name' => 'Products grid',
                    'type' => 'product-grid',
                    'id' => 'component546rrc4e8',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '2',
                            'rows_tablet' => '2',
                            'rows_mobile' => '2',
                            'skus' => '',
                            'limit' => 7,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_1.jpg'),
                                                    'aspect_ratio' => '573:571',
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
                                                    'image' => $this->getImage('teaser_1.jpg'),
                                                ],
                                            'video' =>
                                                [
                                                    'url' => '',
                                                    'type' => '',
                                                ],
                                            'slogan' => 'test',
                                            'description' => 'test',
                                            'cta' =>
                                                [
                                                    'label' => 'More',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => 1,
                                                    'y' => 1,
                                                ],
                                            'sizeSelect' => '1x1',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '1',
                                                ],
                                            'row' => '2',
                                            'position' => 'center',
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
            11 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rr26eb',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 2, tablet: 2, desktop: 2 + Teaser size: 2x1 + Row: 2 (last) + Show in mobiles: No',
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
            12 =>
                [
                    'name' => 'Products grid',
                    'type' => 'product-grid',
                    'id' => 'component546rr1df4',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '2',
                            'rows_tablet' => '2',
                            'rows_mobile' => '2',
                            'skus' => '',
                            'limit' => 6,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_grid_2x1.jpg'),
                                                    'aspect_ratio' => '574:571',
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
                                                    'image' => $this->getImage('teaser_grid_2x1.jpg'),
                                                ],
                                            'video' =>
                                                [
                                                    'url' => '',
                                                    'type' => '',
                                                ],
                                            'slogan' => 'test',
                                            'description' => 'test',
                                            'cta' =>
                                                [
                                                    'label' => 'More',
                                                    'href' => '#',
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
                                            'row' => '2',
                                            'position' => 'center',
                                            'isAvailableForMobile' => false,
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
            13 =>
                [
                    'id' => 'component546rr32ea',
                    'section' => 'content',
                    'type' => 'headline',
                    'data' =>
                        [
                            'title' => '3/3/3',
                            'subtitle' => '2x1 / 1st row',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            14 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rr5d31',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 3, tablet: 3, desktop: 3 + Teaser size: 2x1 + Row: 1 + Show in mobiles: No',
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
            15 =>
                [
                    'type' => 'product-grid',
                    'id' => 'component546rr4834',
                    'section' => 'content',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '3',
                            'rows_tablet' => '3',
                            'rows_mobile' => '3',
                            'skus' => '',
                            'limit' => 10,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_grid_2x1.jpg'),
                                                    'aspect_ratio' => '1163:780',
                                                    'image' => $this->getImage('teaser_grid_2x1.jpg')
                                                ],
                                            'slogan' => 'Top - right',
                                            'description' => 'Container 100%<br>Show in mobiles: No',
                                            'cta' =>
                                                [
                                                    'label' => 'Dark',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '3',
                                                    'y' => '1',
                                                ],
                                            'sizeSelect' => '2x1',
                                            'size' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '1',
                                                ],
                                            'row' => '1',
                                            'position' => 'center',
                                            'isAvailableForMobile' => '',
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'dark',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '',
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
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '1',
                                                                            'y' => '1',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '1',
                                                                    'intensity' => '100',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                            'cc_css_classes' => '',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                            'isError' => false,
                            'cc_css_classes' => '',
                        ],
                ],
            16 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rrac84',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 3, tablet: 3, desktop: 3 + Teaser size: 1x1 + Row: 2 + Show in mobiles: Yes',
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
            17 =>
                [
                    'name' => 'Products grid',
                    'type' => 'product-grid',
                    'id' => 'component546rra1b9',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '3',
                            'rows_tablet' => '3',
                            'rows_mobile' => '3',
                            'skus' => '',
                            'limit' => 11,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_2.jpg'),
                                                    'aspect_ratio' => '574:571',
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
                                                    'image' => $this->getImage('teaser_2.jpg'),
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
                                            'sizeSelect' => '1x1',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '1',
                                                ],
                                            'row' => '2',
                                            'position' => 'center',
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
            18 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rrea4a',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 3, tablet: 3, desktop: 3 + Teaser size: 1x2 + Row: 3 (last) + Show in mobiles: Yes',
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
            19 =>
                [
                    'name' => 'Products grid',
                    'type' => 'product-grid',
                    'id' => 'component546rr9af4',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '3',
                            'rows_tablet' => '3',
                            'rows_mobile' => '3',
                            'skus' => '',
                            'limit' => 10,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_grid_2x1.jpg'),
                                                    'aspect_ratio' => '574:571',
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
                                                    'image' => $this->getImage('teaser_grid_2x1.jpg'),
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
                                            'sizeSelect' => '1x2',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '2',
                                                ],
                                            'row' => '3',
                                            'position' => 'center',
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
            20 =>
                [
                    'type' => 'headline',
                    'id' => 'component546rr4fb8',
                    'section' => 'content',
                    'data' =>
                        [
                            'title' => '4/4/4',
                            'subtitle' => '',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                            'cc_css_classes' => '',
                        ],
                ],
            21 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rrd2b8',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 4, tablet: 4, desktop: 4 + Teaser size: 2x2 + Row: 1 + Show in mobiles: Yes',
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
            22 =>
                [
                    'type' => 'product-grid',
                    'id' => 'component546rra3bf',
                    'section' => 'content',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '4',
                            'rows_tablet' => '4',
                            'rows_mobile' => '4',
                            'skus' => '',
                            'limit' => 12,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_grid_2x2.jpg'),
                                                    'aspect_ratio' => '574:571',
                                                    'image' => $this->getImage('teaser_grid_2x2.jpg')
                                                ],
                                            'slogan' => 'Center - left',
                                            'description' => 'Gradient shadow bottom - center 100%<br>Show in mobiles: No',
                                            'cta' =>
                                                [
                                                    'label' => 'Dark',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '2',
                                                ],
                                            'sizeSelect' => '2x2',
                                            'size' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '2',
                                                ],
                                            'row' => '1',
                                            'position' => 'center',
                                            'isAvailableForMobile' => '',
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'dark',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '',
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
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '1',
                                                                    'intensity' => '100',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '2',
                                                                            'y' => '3',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                            'cc_css_classes' => '',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                            'isError' => false,
                            'cc_css_classes' => '',
                        ],
                ],
            23 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rr4a8b',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Product grid + mobile: 4, tablet: 4, desktop: 4 + Teaser size: 1x2 + Row: 2 + Show in mobiles: Yes',
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
            24 =>
                [
                    'type' => 'product-grid',
                    'name' => 'Products grid',
                    'id' => 'component546rra52e',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'creation_date',
                            'order_type' => 'ASC',
                            'rows_desktop' => '4',
                            'rows_tablet' => '4',
                            'rows_mobile' => '4',
                            'skus' => '',
                            'limit' => 14,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_grid_1x1.jpg'),
                                                    'aspect_ratio' => '',
                                                    'image' => $this->getImage('teaser_grid_1x1.jpg'),
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
                                            'sizeSelect' => '1x2',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '2',
                                                ],
                                            'row' => '2',
                                            'position' => 'center',
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
            25 =>
                [
                    'id' => 'component546rr7b55',
                    'section' => 'content',
                    'type' => 'headline',
                    'data' =>
                        [
                            'title' => '5/5/5',
                            'subtitle' => '2x2 / 4th row',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            26 =>
                [
                    'id' => 'component546rrcd22',
                    'section' => 'content',
                    'type' => 'product-grid',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '5',
                            'rows_tablet' => '5',
                            'rows_mobile' => '5',
                            'skus' => '',
                            'limit' => '16',
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                                                    'aspect_ratio' => '574:571',
                                                    'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                                                ],
                                            'slogan' => 'In the middle',
                                            'description' => 'Container 40%<br>Show in mobiles: No',
                                            'cta' =>
                                                [
                                                    'label' => 'Light',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '2',
                                                ],
                                            'sizeSelect' => '2x2',
                                            'size' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '2',
                                                ],
                                            'row' => '4',
                                            'position' => 'center',
                                            'isAvailableForMobile' => '',
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'light',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '',
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
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '1',
                                                                            'y' => '1',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '1',
                                                                    'intensity' => '40',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            27 =>
                [
                    'id' => 'component546rrbbb4',
                    'section' => 'content',
                    'type' => 'headline',
                    'data' =>
                        [
                            'title' => '2/3/4',
                            'subtitle' => '2x1 / 4th row (last)',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            28 =>
                [
                    'id' => 'component546rr4ed2',
                    'section' => 'content',
                    'type' => 'product-grid',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '4',
                            'rows_tablet' => '3',
                            'rows_mobile' => '2',
                            'skus' => '',
                            'limit' => '14',
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                                    'aspect_ratio' => '1163:780',
                                                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                                                ],
                                            'slogan' => 'Center - right',
                                            'description' => 'Text shadow 60%<br>Show in mobiles: No',
                                            'cta' =>
                                                [
                                                    'label' => 'Light',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '3',
                                                    'y' => '2',
                                                ],
                                            'sizeSelect' => '2x1',
                                            'size' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '1',
                                                ],
                                            'row' => '4',
                                            'position' => 'center',
                                            'isAvailableForMobile' => '',
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'light',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '',
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
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '1',
                                                                            'y' => '1',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '1',
                                                                    'intensity' => '60',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            29 =>
                [
                    'id' => 'component546rrac4d',
                    'section' => 'content',
                    'type' => 'headline',
                    'data' =>
                        [
                            'title' => '4/3/2',
                            'subtitle' => '1x2 / 1st row',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            30 =>
                [
                    'id' => 'component546rr8454',
                    'section' => 'content',
                    'type' => 'product-grid',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '2',
                            'rows_tablet' => '3',
                            'rows_mobile' => '4',
                            'skus' => '',
                            'limit' => '14',
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                                    'aspect_ratio' => '369:953',
                                                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                                                ],
                                            'slogan' => 'Bottom - left',
                                            'description' => '',
                                            'cta' =>
                                                [
                                                    'label' => 'Light',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '3',
                                                ],
                                            'sizeSelect' => '1x2',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '2',
                                                ],
                                            'row' => '1',
                                            'position' => 'center',
                                            'isAvailableForMobile' => '1',
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'light',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '1',
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
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '1',
                                                                            'y' => '1',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            31 =>
                [
                    'id' => 'component546rr1b80',
                    'section' => 'content',
                    'type' => 'headline',
                    'data' =>
                        [
                            'title' => '6/8/10',
                            'subtitle' => '1x1 / 5th row',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            32 =>
                [
                    'id' => 'component546rr6496',
                    'section' => 'content',
                    'type' => 'product-grid',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '10',
                            'rows_tablet' => '8',
                            'rows_mobile' => '6',
                            'skus' => '',
                            'limit' => '39',
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('howard-lawrence-b-1141813-unsplash.jpg'),
                                                    'aspect_ratio' => '574:571',
                                                    'image' => $this->getImage('howard-lawrence-b-1141813-unsplash.jpg'),
                                                ],
                                            'slogan' => 'Bottom - center',
                                            'description' => '',
                                            'cta' =>
                                                [
                                                    'label' => 'Light',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '3',
                                                ],
                                            'sizeSelect' => '1x1',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '1',
                                                ],
                                            'row' => '5',
                                            'position' => 'center',
                                            'isAvailableForMobile' => '1',
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'light',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '1',
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
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '1',
                                                                            'y' => '1',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            33 =>
                [
                    'id' => 'component546rr9c51',
                    'section' => 'content',
                    'type' => 'headline',
                    'data' =>
                        [
                            'title' => '9/5/3',
                            'subtitle' => '2x1 / 2nd row',
                            'headingTag' => 'h2',
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            34 =>
                [
                    'id' => 'component546rrd5cd',
                    'section' => 'content',
                    'type' => 'product-grid',
                    'data' =>
                        [
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'created_at',
                            'order_type' => 'ASC',
                            'rows_desktop' => '3',
                            'rows_tablet' => '5',
                            'rows_mobile' => '9',
                            'skus' => '',
                            'limit' => '34',
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                                                    'aspect_ratio' => '1163:780',
                                                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                                                ],
                                            'slogan' => 'Bottom - right',
                                            'description' => 'Gradient shadow bottom - center 60%<br>Show in mobiles: No',
                                            'cta' =>
                                                [
                                                    'label' => 'Light',
                                                    'href' => '#',
                                                ],
                                            'content_align' =>
                                                [
                                                    'x' => '3',
                                                    'y' => '3',
                                                ],
                                            'sizeSelect' => '2x1',
                                            'size' =>
                                                [
                                                    'x' => '2',
                                                    'y' => '1',
                                                ],
                                            'row' => '2',
                                            'position' => 'center',
                                            'isAvailableForMobile' => '',
                                            'optimizers' =>
                                                [
                                                    'color_scheme' => 'light',
                                                    'mirror_image' => '',
                                                    'scenarios' =>
                                                        [
                                                            'none' =>
                                                                [
                                                                    'enabled' => '',
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
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_overlay',
                                                                            'label' => 'Overlay',
                                                                        ],
                                                                ],
                                                            'gradient' =>
                                                                [
                                                                    'enabled' => '1',
                                                                    'intensity' => '60',
                                                                    'direction' =>
                                                                        [
                                                                            'x' => '2',
                                                                            'y' => '3',
                                                                        ],
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_gradient',
                                                                            'label' => 'Gradient shadow',
                                                                        ],
                                                                ],
                                                            'container' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_container',
                                                                            'label' => 'Container',
                                                                        ],
                                                                ],
                                                            'text_shadow' =>
                                                                [
                                                                    'enabled' => '',
                                                                    'intensity' => '50',
                                                                    'direction' => 'disabled',
                                                                    'configurator' =>
                                                                        [
                                                                            'icon' => '#contrast_text-shadow',
                                                                            'label' => 'Text shadow',
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                            'badge' =>
                                                [
                                                    'value' => '',
                                                    'align' =>
                                                        [
                                                            'x' => '1',
                                                            'y' => '1',
                                                        ],
                                                    'examples' =>
                                                        [
                                                            0 =>
                                                                [
                                                                    'text' => sprintf('<small>Only</small><br> {{price sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            1 =>
                                                                [
                                                                    'text' => sprintf('{{sku sku="%s"}}', $this->getProductSku()),
                                                                ],
                                                            2 =>
                                                                [
                                                                    'text' => sprintf('<big>Only</big> {{qty sku="%s"}} left', $this->getProductSku()),
                                                                ],
                                                        ],
                                                ],
                                            'teaserType' => 'full',
                                        ],
                                ],
                            'componentVisibility' =>
                                [
                                    'mobile' => '1',
                                    'desktop' => '1',
                                ],
                        ],
                ],
            35 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'component546rr492d',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Display Mode',
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
            36 =>
                [
                    'type' => 'paragraph',
                    'name' => 'Paragraph',
                    'id' => 'component546rr3dec',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => '',
                            'columns' => 'none',
                            'content' => '<p>Desktop/tablet: ON<br>Mobile: OFF</p>',
                            'scenarios' =>
                                [
                                    'reading' =>
                                        [
                                            'name' => 'Container width',
                                            'iconId' => 'tw_content-width-text',
                                            'id' => 'full',
                                        ],
                                ],
                            'migrated' => true,
                            'cc_css_classes' => '',
                            'componentVisibility' =>
                                [
                                    'mobile' => true,
                                    'desktop' => true,
                                ],
                        ],
                ],
            37 =>
                [
                    'name' => 'Products grid',
                    'type' => 'product-grid',
                    'id' => 'component546rr5c4d',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'creation_date',
                            'order_type' => 'ASC',
                            'rows_desktop' => 1,
                            'rows_tablet' => 1,
                            'rows_mobile' => 1,
                            'skus' => '',
                            'limit' => 3,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_3.jpg'),
                                                    'aspect_ratio' => '149:135',
                                                    'image' => $this->getImage('teaser_3.jpg'),
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
                                            'sizeSelect' => '1x1',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '1',
                                                ],
                                            'row' => 1,
                                            'position' => 'center',
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
                                    'mobile' => false,
                                    'desktop' => true,
                                ],
                        ],
                ],
            38 =>
                [
                    'type' => 'paragraph',
                    'name' => 'Paragraph',
                    'id' => 'component546rr5195',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => '',
                            'columns' => 'none',
                            'content' => '<p>Desktop/tablet: OFF<br>Mobile: ON</p>',
                            'scenarios' =>
                                [
                                    'reading' =>
                                        [
                                            'name' => 'Container width',
                                            'iconId' => 'tw_content-width-text',
                                            'id' => 'full',
                                        ],
                                ],
                            'migrated' => true,
                            'cc_css_classes' => '',
                            'componentVisibility' =>
                                [
                                    'mobile' => true,
                                    'desktop' => true,
                                ],
                        ],
                ],
            39 =>
                [
                    'type' => 'product-grid',
                    'name' => 'Products grid',
                    'id' => 'component546rr5d58',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => '',
                            'filter' => '',
                            'order_by' => 'creation_date',
                            'order_type' => 'ASC',
                            'rows_desktop' => 1,
                            'rows_tablet' => 1,
                            'rows_mobile' => 1,
                            'skus' => '',
                            'limit' => 3,
                            'useTeaser' => 'true',
                            'scenario' =>
                                [
                                    'contentPlacement' =>
                                        [
                                            'id' => 'over',
                                        ],
                                ],
                            'items' =>
                                [
                                    0 =>
                                        [
                                            'image' =>
                                                [
                                                    'decoded' => $this->getDecodedImage('teaser_2.jpg'),
                                                    'aspect_ratio' => '',
                                                    'image' => $this->getImage('teaser_3.jpg'),
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
                                            'sizeSelect' => '1x1',
                                            'size' =>
                                                [
                                                    'x' => '1',
                                                    'y' => '1',
                                                ],
                                            'row' => 1,
                                            'position' => 'center',
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
                                    'desktop' => false,
                                ],
                        ],
                ],
        ];

        return $blocks;
    }

}
