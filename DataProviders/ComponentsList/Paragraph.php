<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Paragraph extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [];

        $blocks[] = Index::getHeadlineBlock('Full width');
        $blocks[] = [
            'id' => 'component17ed',
            'section' => 'content',
            'type' => 'paragraph',
            'data' => [
                'blockId' => 10001,
                'title' => 'Full width paragraph title',
                'columns' => 'none',
                'scenarios' => [
                    'reading' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width-text',
                        'id' => 'full',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => 1,
                    'desktop' => 1
                ]
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('2 columns');
        $blocks[] = [
            'id' => 'component38ed',
            'section' => 'content',
            'type' => 'paragraph',
            'data' => [
                'blockId' => 10001,
                'title' => '2 columns paragraph title',
                'columns' => '2',
                'scenarios' => [
                    'reading' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width-text',
                        'id' => 'full',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => 1,
                    'desktop' => 1
                ]
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('3 columns');
        $blocks[] = [
            'id' => 'component59ed',
            'section' => 'content',
            'type' => 'paragraph',
            'data' => [
                'blockId' => 10001,
                'title' => '3 columns paragraph title',
                'columns' => '3',
                'scenarios' => [
                    'reading' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width-text',
                        'id' => 'full',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => 1,
                    'desktop' => 1
                ]
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('4 columns');
        $blocks[] = [
            'id' => 'component70ed',
            'section' => 'content',
            'type' => 'paragraph',
            'data' => [
                'blockId' => 10001,
                'title' => '4 columns paragraph title',
                'columns' => '4',
                'scenarios' => [
                    'reading' => [
                        'name' => 'Container width',
                        'iconId' => 'tw_content-width-text',
                        'id' => 'full',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => 1,
                    'desktop' => 1
                ]
            ],
        ];

        $blocks[] = Index::getHeadlineBlock('Optimal reading');
        $blocks[] = [
            'id' => 'component9af8',
            'section' => 'content',
            'type' => 'paragraph',
            'data' => [
                'blockId' => 10001,
                'title' => 'Optimal paragraph title',
                'columns' => 'none',
                'scenarios' => [
                    'reading' => [
                        'name' => 'Optimal reading width',
                        'iconId' => 'tw_optimal-reading',
                        'id' => 'optimal',
                    ]
                ],
                'componentVisibility' => [
                    'mobile' => 1,
                    'desktop' => 1
                ]
            ],
        ];

        return $blocks;
    }
}
