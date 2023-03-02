<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Button extends DataProviderComponents
{
    public function getBlocks()
    {
        return [
            self::getHeadlineBlock('Display mode'),
            [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '',
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
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
                '_data' => [
                    'type' => 'button',
                    'name' => 'Button',
                    'id' => 'componenta141',
                    'section' => 'content',
                    'data' => [
                        'label' => 'test button desktop',
                        'target' => "{{widget type=\"Magento\\Catalog\\Block\\Category\\Widget\\Link\" template=\"category/widget/link/link_block.phtml\" id_path=\"category/{$this->getMainCategoryId()}\"}}",
                        'componentVisibility' => [
                            'mobile' => false,
                            'desktop' => true,
                        ],
                    ],
                ],
            ],
            [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'section' => 'content',
                'data' => [
                    'customCssClass' => '',
                    'title' => '',
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
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => true,
                    ],
                ],
            ],
            [
                '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
                '_data' => [
                    'name' => 'Button',
                    'type' => 'button',
                    'id' => 'componentf4c8',
                    'section' => 'content',
                    'data' => [
                        'label' => 'test button mobile',
                        'target' => "{{widget type=\"Magento\\Catalog\\Block\\Category\\Widget\\Link\" template=\"category/widget/link/link_block.phtml\" id_path=\"category/{$this->getMainCategoryId()}\"}}",
                        'componentVisibility' => [
                            'mobile' => true,
                            'desktop' => false,
                        ],
                    ],
                ]
            ],
        ];
    }
}
