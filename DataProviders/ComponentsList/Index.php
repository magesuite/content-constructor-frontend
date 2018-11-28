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
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Hero Carousel',
                '_path' => 'contentconstructor/components/index/page/herocarousel-large'
            ]
        ];

        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Hero Carousel Slider mobile scenario',
                '_path' => 'contentconstructor/components/index/page/herocarousel-slider'
            ]
        ];

        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Hero Carousel Hidden mobile scenario',
                '_path' => 'contentconstructor/components/index/page/herocarousel-hidden'
            ]
        ];

        $blocks[] = self::getSeparatorBlock();

        # ===== IMAGE TEASERS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Window width',
                '_path' => 'contentconstructor/components/index/page/itwindowwidth'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Container width',
                '_path' => 'contentconstructor/components/index/page/itcontainerwidth'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Window width slider',
                '_path' => 'contentconstructor/components/index/page/itwindowwidthslider'
            ]
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Image Teaser Content width slider',
                '_path' => 'contentconstructor/components/index/page/itcontentwidthslider'
            ]
        ];
        $blocks[] = self::getSeparatorBlock();

        # ===== PRODUCT GRIDS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product Grid without Hero',
                '_path' => 'contentconstructor/components/index/page/productgridnohero'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product Grid with left Hero',
                '_path' => 'contentconstructor/components/index/page/productgridheroleft'
            ],
        ];
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Product Grid with right Hero',
                '_path' => 'contentconstructor/components/index/page/productgridheroright'
            ],
        ];
        $blocks[] = self::getSeparatorBlock();

        # ===== PARAGRAPHS ===== #
        $blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => 'Paragraph',
                '_path' => 'contentconstructor/components/index/page/paragraph'
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
