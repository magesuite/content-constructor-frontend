<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class DailyDeal extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'componentc220',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'title' => 'Categories: Default category + Order by: Offer to (ascending)',
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
            1 =>
                [
                    'type' => 'daily-deal-teaser',
                    'name' => 'Daily Deal Teaser',
                    'id' => 'componentbaa3',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => $this->getMainCategoryId(),
                            'filter' => '',
                            'order_by' => 'daily_deal_to',
                            'order_type' => 'ASC',
                            'skus' => '',
                            'cc_css_classes' => '',
                            'componentVisibility' =>
                                [
                                    'mobile' => true,
                                    'desktop' => true,
                                ],
                        ],
                ],
            2 =>
                [
                    'type' => 'headline',
                    'name' => 'Headline',
                    'id' => 'componentcf2a',
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
            3 =>
                [
                    'type' => 'paragraph',
                    'name' => 'Paragraph',
                    'id' => 'componente107',
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
            4 =>
                [
                    'type' => 'daily-deal-teaser',
                    'name' => 'Daily Deal Teaser',
                    'id' => 'componentbaa3_duplicate61016',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => $this->getMainCategoryId(),
                            'filter' => '',
                            'order_by' => 'daily_deal_to',
                            'order_type' => 'ASC',
                            'skus' => '',
                            'cc_css_classes' => '',
                            'componentVisibility' =>
                                [
                                    'mobile' => false,
                                    'desktop' => true,
                                ],
                        ],
                ],
            5 =>
                [
                    'type' => 'paragraph',
                    'name' => 'Paragraph',
                    'id' => 'component6cc6',
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
            6 =>
                [
                    'type' => 'daily-deal-teaser',
                    'name' => 'Daily Deal Teaser',
                    'id' => 'componentbaa3_duplicate72251',
                    'section' => 'content',
                    'data' =>
                        [
                            'customCssClass' => '',
                            'category_id' => $this->getMainCategoryId(),
                            'filter' => '',
                            'order_by' => 'daily_deal_to',
                            'order_type' => 'ASC',
                            'skus' => '',
                            'cc_css_classes' => '',
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
