<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Index extends DataProviderComponents
{

    /**
     * @var \Magento\Catalog\Helper\Category
     */
    protected $categoryHelper;

    public function __construct(\Magento\Catalog\Helper\Category $categoryHelper)
    {
        $this->categoryHelper = $categoryHelper;
    }

    public function getBlocks() {
        $blocks = [];
        $blocks[] = self::getHeadlineBlock('CONTENT CONSTRUCTOR', 'The list of components');

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

        # ===== IMAGE TEASERS LEGACY ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Legacy Window width',
                '_path' => 'contentconstructor/components/index/page/itlegacywindowwidth'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Legacy Container width',
                '_path' => 'contentconstructor/components/index/page/itlegacycontainerwidth'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Legacy Window width slider',
                '_path' => 'contentconstructor/components/index/page/itlegacywindowwidthslider'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Legacy Container width slider',
                '_path' => 'contentconstructor/components/index/page/itlegacycontainerwidthslider'
            ]
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

        # ===== PARAGRAPHS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Headline',
                '_path' => 'contentconstructor/components/index/page/headline'
            ],
        ];

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

        # ===== Product carousel ===== #
        $blocks[] = self::getHeadlineBlock('Product carousel');
        $blocks[] = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'id' => 'component8ed5',
                'section' => 'content',
                'type' => 'product-carousel',
                'data' => [
                    'category_id' => '2',
                    'order_by' => 'price',
                    'order_type' => 'ASC',
                    'limit' => '20',
                ],
            ],
        ];

        # ===== Brand carousel ===== #
        $blocks[] = self::getHeadlineBlock('Brand carousel');
        $blocks[] = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'id' => 'componentb3b2',
                'section' => 'content',
                'type' => 'brand-carousel',
                'data' => [],
            ],
        ];

        # ===== Button ===== #
        $blocks[] = self::getHeadlineBlock('Button');
        $blocks[] = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'id' => 'component332d',
                'section' => 'content',
                'type' => 'button',
                'data' => [
                    'label' => 'Go to the list page',
                    'target' => '',
                ],
            ],
        ];

        # ===== Category links ===== #
        $blocks[] = self::getHeadlineBlock('Category links');

        // category links without numbers
        if(($block = $this->getCategoryLinksBlock('component91a3', false))) {
            $blocks[] = $block;
        }

        // category links with numbers
        if(($block = $this->getCategoryLinksBlock('component91a3', true))) {
            $blocks[] = $block;
        }

        return $blocks;
    }

    public function getCategoryLinksBlock($id, $showNumbers) {

        /** @var $mainCategory \Magento\Catalog\Model\Category */
        $mainCategory = null;

        foreach($this->categoryHelper->getStoreCategories(false, true) as $category) {
            /** @var $category \Magento\Catalog\Model\Category */
            if($category->hasChildren()) {
                $mainCategory = $category;
                break;
            }
        }

        if(! $mainCategory) {
            return false;
        }

        $block = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'id' => $id,
                'section' => 'content',
                'type' => 'category-links',
                'data' => [
                    'main_category_id' => $mainCategory->getId(),
                    'sub_categories_ids' => $mainCategory->getChildren(),
                    'shownumbers' => $showNumbers,
                    'main_category_labels' => [
                        '0' => $mainCategory->getName(),
                        'length' => '1',
                        'prevObject' => [
                            '0' => [
                                'jQuery1124019406504422772541' => '444',
                            ],
                            'context' => [
                                'jQuery1124019406504422772541' => '444',
                            ],
                            'length' => '1',
                        ],
                        'context' => [
                            'jQuery1124019406504422772541' => '444',
                        ],
                    ],
                ],
            ],
        ];

        return $block;
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

    public static function getHeadlineBlock($title, $subtitle = ''){
        $data = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => $title
                ]
            ]
        ];

        if($subtitle) {
            $data['_data']['data']['subtitle'] = $subtitle;
        }

        return $data;
    }
}
