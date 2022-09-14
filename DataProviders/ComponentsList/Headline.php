<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Headline extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'id' => 'component27c1',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Headline H1',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h1',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            1 => [
                'id' => 'component24ab',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Headline H2',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            2 => [
                'id' => 'component6260',
                'section' => 'content',

                'type' => 'headline',
                'data' => [
                    'title' => 'Headline H3',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h3',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            3 => [
                'id' => 'component64e7',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Headline H4',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h4',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            4 => [
                'id' => 'componentd909',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Headline H5',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h5',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            5 => [
                'id' => 'componenta96a',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Headline H6',
                    'subtitle' => 'Subheadline',
                    'headingTag' => 'h6',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            6 => [
                'id' => 'componentcfc0',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Only headline',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            7 => [
                'id' => 'component6ec0',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => '',
                    'subtitle' => 'Only subheadline',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
        ];

        return $blocks;
    }
}
