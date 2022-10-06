<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Paragraph extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'id' => 'componentb47f',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Container width',
                    'subtitle' => 'Don\'t split content',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            1 => [
                'id' => 'component778c',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'identifier' => 'test-block-identifier',
                    'title' => 'dont split',
                    'columns' => 'none',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            2 => [
                'id' => 'component00d5',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Container width',
                    'subtitle' => '2 columns',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            3 => [
                'id' => 'component8f44',
                'section' => 'content',
                'name' => 'Paragraph',
                'type' => 'paragraph',
                'data' => [
                    'identifier' => 'test-block-identifier',
                    'title' => 'paragraph 2 columns',
                    'columns' => '2',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            4 => [
                'id' => 'component1afe',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Container width',
                    'subtitle' => '3 columns',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            5 => [
                'id' => 'component7a68',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'identifier' => 'test-block-identifier',
                    'title' => 'split 3',
                    'columns' => '3',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            6 => [
                'id' => 'component0c0f',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Container width',
                    'subtitle' => '4 columns',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            7 => [
                'id' => 'component7ea4',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'identifier' => 'test-block-identifier',
                    'title' => 'paragraph 4 columns',
                    'columns' => '4',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            8 => [
                'id' => 'component2c5e',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'OPTIMAL READING WIDTH',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            9 => [
                'id' => 'component8b4f',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'identifier' => 'test-block-identifier',
                    'title' => 'optimal reading',
                    'columns' => 'none',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Optimal reading width',
                            'iconId' => 'tw_optimal-reading',
                            'id' => 'optimal',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            10 => [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component21nj492d',
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
            11 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'component21nj3dec',
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
            12 => [
                'id' => 'component8b4fgiuy',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'identifier' => 'test-block-identifier',
                    'title' => 'optimal reading',
                    'columns' => 'none',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Optimal reading width',
                            'iconId' => 'tw_optimal-reading',
                            'id' => 'optimal',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '0',
                        'desktop' => '1',
                    ],
                ],
            ],
            13 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'component21nj5195',
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
            14 => [
                'id' => 'component8b4f',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'identifier' => 'test-block-identifier',
                    'title' => 'optimal reading',
                    'columns' => 'none',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Optimal reading width',
                            'iconId' => 'tw_optimal-reading',
                            'id' => 'optimal',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '0',
                    ],
                ],
            ],
        ];

        return $blocks;
    }
}
