<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class BrandCarousel extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks[] = self::getHeadlineBlock('Brand carousel desktop/tablet');
        $blocks[] = [
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
        ];

        $blocks[] = self::getHeadlineBlock('Brand carousel mobile');
        $blocks[] = [
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
        ];

        return $blocks;
    }
}
