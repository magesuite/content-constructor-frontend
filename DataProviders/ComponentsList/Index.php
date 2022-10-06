<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Index extends DataProviderComponents
{
    public function getBlocks() {
        $blocks = [];
        $blocks[] = self::getHeadlineBlock('CONTENT CONSTRUCTOR', 'The list of components');

        # ===== ACCORDION ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Accordion - Container Width',
                '_path' => 'contentconstructor/components/index/page/accordioncontainerwidth'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Accordion - Optimal Reading Width',
                '_path' => 'contentconstructor/components/index/page/accordionoptimalreadingwidth'
            ],
        ];
        $blocks[] = self::getSeparatorBlock();

        # ===== Brand Carousel ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Brand Carousel',
                '_path' => 'contentconstructor/components/index/page/brand-carousel'
            ]
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== Button ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Button',
                '_path' => 'contentconstructor/components/index/page/button'
            ]
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== Category Links ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Category Links',
                '_path' => 'contentconstructor/components/index/page/category-links'
            ]
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== CMS Teaser ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'CMS Teaser',
                '_path' => 'contentconstructor/components/index/page/cms-teaser'
            ]
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== Daily Deal ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Daily Deal',
                '_path' => 'contentconstructor/components/index/page/daily-deal'
            ]
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== HEADLINE ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Headline',
                '_path' => 'contentconstructor/components/index/page/headline'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== HERO CARUSEL ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Hero Carousel Large teaser mobile scenario',
                '_path' => 'contentconstructor/components/index/page/herocarousel-large'
            ]
        ];

        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Hero Carousel Slider mobile scenario',
                '_path' => 'contentconstructor/components/index/page/herocarousel-slider'
            ]
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== ICONS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Icon',
                '_path' => 'contentconstructor/components/index/page/icon'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== IMAGE TEASERS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Browser width',
                '_path' => 'contentconstructor/components/index/page/itbrowserwidth'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Content width',
                '_path' => 'contentconstructor/components/index/page/itcontentwidth'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Browser width slider',
                '_path' => 'contentconstructor/components/index/page/itbrowserwidthslider'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Content width slider',
                '_path' => 'contentconstructor/components/index/page/itcontentwidthslider'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Contrast Optimizers',
                '_path' => 'contentconstructor/components/index/page/contrastoptimizers'
            ]
        ];
        $blocks[] = self::getSeparatorBlock();

        # ===== INSTAGRAM ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Instagram',
                '_path' => 'contentconstructor/components/index/page/instagram'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== MOSAIC ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Mosaic - Content width 2/3 Teaser on Left',
                '_path' => 'contentconstructor/components/index/page/mosaiccontentwidth23teaserleft'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Mosaic - Content width 2/3 Teaser on Right',
                '_path' => 'contentconstructor/components/index/page/mosaiccontentwidth23teaserright'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Mosaic - Browser width 2/3 Teaser on Left',
                '_path' => 'contentconstructor/components/index/page/mosaicbrowserwidth23teaserleft'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Mosaic - Browser width 2/3 Teaser on Right',
                '_path' => 'contentconstructor/components/index/page/mosaicbrowserwidth23teaserright'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== PRODUCT GRIDS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product grid without image teaser',
                '_path' => 'contentconstructor/components/index/page/productgridnoit'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product grid with image teaser on the left',
                '_path' => 'contentconstructor/components/index/page/productgriditleft'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product grid with image teaser on the right',
                '_path' => 'contentconstructor/components/index/page/productgriditright'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product grid with image teaser in the middle',
                '_path' => 'contentconstructor/components/index/page/productgriditcenter'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product grid desktop and mobile visibility',
                '_path' => 'contentconstructor/components/index/page/productgriddesktopandmobile'
            ],
        ];
        $blocks[] = self::getSeparatorBlock();

        # ===== PARAGRAPHS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Paragraph',
                '_path' => 'contentconstructor/components/index/page/paragraph'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== Product carousel ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product Carousel',
                '_path' => 'contentconstructor/components/index/page/product-carousel'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== PRODUCT FINDER ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product Finder',
                '_path' => 'contentconstructor/components/index/page/productfinder'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== TEASERS & TEXTS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Teaser & Text Browser width',
                '_path' => 'contentconstructor/components/index/page/ttbrowserwidth'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Teaser & Text Content width',
                '_path' => 'contentconstructor/components/index/page/ttcontentwidth'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== VIDEO ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Video YT',
                '_path' => 'contentconstructor/components/index/page/video-yt'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Video Vimeo',
                '_path' => 'contentconstructor/components/index/page/video-vimeo'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Video FB',
                '_path' => 'contentconstructor/components/index/page/video-fb'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Video MP4',
                '_path' => 'contentconstructor/components/index/page/video-mp4'
            ],
        ];

        $blocks[] = self::getSeparatorBlock();

        return $blocks;
    }

    public static function getSeparatorBlock(){
        return [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'section' => 'content',
                'type' => 'separator',
                'data' => []
            ]
        ];
    }
}
