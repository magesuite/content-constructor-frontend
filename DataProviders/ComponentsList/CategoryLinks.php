<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class CategoryLinks extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks[] = self::getHeadlineBlock('Category Links Desktop/Tablet');
        $blocks[] = $this->getCategoryLinksBlock('component91bha3987', false, true, false);
        $blocks[] = $this->getCategoryLinksBlock('component91mna3iuh', true, true, false);

        $blocks[] = self::getHeadlineBlock('Category Links Mobile');
        $blocks[] = $this->getCategoryLinksBlock('component91wra3564', false, false, true);
        $blocks[] = $this->getCategoryLinksBlock('component91sda3gfc', true, false, true);

        return $blocks;
    }

    public function getCategoryLinksBlock($id, $showNumbers, $desktopVisibility, $mobileVisibility) {

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
                    'hide_link_to_all_products' => true,
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
                        'componentVisibility' => [
                            'mobile' => $mobileVisibility,
                            'desktop' => $desktopVisibility
                        ]
                    ],
                ],
            ],
        ];

        return $block;
    }
}
