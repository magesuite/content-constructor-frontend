<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class BrandCarousel extends DataProviderComponents
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
                    'id' => 'componentb3b2',
                    'section' => 'content',
                    'type' => 'brand-carousel',
                    'data' => [
                        'componentVisibility' =>
                            [
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
                    'id' => 'componentb3b2',
                    'section' => 'content',
                    'type' => 'brand-carousel',
                    'data' => [
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => false,
                            ],
                    ],
                ],
            ],
        ];
    }
}
