<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductGridHeroLeft extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [];
        $blocks[] = Index::getHeadlineBlock('Product Grid with left Hero');

        $blocks[] = Index::getHeadlineBlock('1/1/1');
        $blocks[] = [
            'id' => 'component7401',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '1',
                'rows_tablet' => '1',
                'rows_mobile' => '1',
                'limit' => '6',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (1163:780)',
                    'displayVariant' => '1',
                    'colorScheme' => 'dark',
                    'headline' => 'Text vertically centered on the left',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Dark',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('2/2/2');

        $blocks[] = [
            'id' => 'componentdfe7',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '2',
                'rows_tablet' => '2',
                'rows_mobile' => '2',
                'limit' => '12',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (1163:780)',
                    'displayVariant' => '2',
                    'colorScheme' => 'dark',
                    'headline' => 'Text on the bottom, left corner',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Dark',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('3/3/3');

        $blocks[] = [
            'id' => 'component4e34',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '3',
                'rows_tablet' => '3',
                'rows_mobile' => '3',
                'limit' => '18',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (1163:780)',
                    'displayVariant' => '3',
                    'colorScheme' => 'dark',
                    'headline' => 'Text vertically centered in the middle',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Dark',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('4/4/4');

        $blocks[] = [
            'id' => 'componentba26',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '4',
                'rows_tablet' => '4',
                'rows_mobile' => '4',
                'limit' => '24',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (1163:780)',
                    'displayVariant' => '4',
                    'colorScheme' => 'dark',
                    'headline' => 'Text on the bottom - centered',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Dark',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('2/3/4');

        $blocks[] = [
            'id' => 'component2515',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '4',
                'rows_tablet' => '3',
                'rows_mobile' => '2',
                'limit' => '24',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (1163:780)',
                    'displayVariant' => '1',
                    'colorScheme' => 'light',
                    'headline' => 'Text vertically centered on the left',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Light',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('4/3/2');

        $blocks[] = [
            'id' => 'component79e8',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '2',
                'rows_tablet' => '3',
                'rows_mobile' => '4',
                'limit' => '24',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (391:262)',
                    'displayVariant' => '2',
                    'colorScheme' => 'light',
                    'headline' => 'Text on the bottom, left corner',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Light',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('5/5/5');

        $blocks[] = [
            'id' => 'component8a45',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '5',
                'rows_tablet' => '5',
                'rows_mobile' => '5',
                'limit' => '30',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (391:262)',
                    'displayVariant' => '3',
                    'colorScheme' => 'light',
                    'headline' => 'Text vertically centered in the middle',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Light',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('6/8/10 (unlimited)');

        $blocks[] = [
            'id' => 'componentd020',
            'section' => 'content',
            'type' => 'product-grid',
            'data' => [
                'category_id' => '2',
                'order_by' => 'created_at',
                'order_type' => 'ASC',
                'rows_desktop' => '10',
                'rows_tablet' => '8',
                'rows_mobile' => '6',
                'limit' => '60',
                'hero' => [
                    'position' => 'left',
                    'image' => $this->getImage('plush-design-studio-553319-unsplash.jpg'),
                    'decoded_image' => $this->getDecodedImage('plush-design-studio-553319-unsplash.jpg'),
                    'size_info' => '1163x780px (391:262)',
                    'displayVariant' => '4',
                    'colorScheme' => 'light',
                    'headline' => 'Text on the bottom - centered',
                    'subheadline' => 'Subheadline on the hero image',
                    'paragraph' => 'Paragraph on the hero image',
                    'href' => '{{widget type="Magento\\Cms\\Block\\Widget\\Page\\Link" template="widget/link/link_block.phtml" page_id="10001"}}',
                    'button' => [
                        'label' => 'Light',
                    ],
                ],
                'componentVisibility' => [
                    'mobile' => '1',
                    'desktop' => '1'
                ],
            ],
        ];

        return $blocks;
    }

}
