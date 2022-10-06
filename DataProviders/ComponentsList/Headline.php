<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Headline extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'component9821nj3dec',
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
            1 => [
                'id' => 'component9827c1',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Headline Only Desktop/Tablet',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h1',
                    'componentVisibility' => [
                        'mobile' => '0',
                        'desktop' => '1',
                    ],
                ],
            ],
            2 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'component9821nj3dec',
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
            3 => [
                'id' => 'component9824ab',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Headline Only Mobile',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h1',
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
