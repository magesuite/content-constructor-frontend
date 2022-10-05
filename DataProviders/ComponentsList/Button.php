<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Button extends DataProviderComponents
{
    public function getBlocks()
    {

        $blocks[] = self::getHeadlineBlock('Button Desktop/Tablet');
        $blocks[] = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'type' => 'button',
                'name' => 'Button',
                'id' => 'componenta141',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'label' => 'test button desktop',
                        'target' => sprintf('{{widget type="Magento\\Catalog\\Block\\Category\\Widget\\Link" template="category/widget/link/link_block.phtml" id_path="category/%s"}}', $this->getMainCategoryId()),
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => false,
                                'desktop' => true,
                            ],
                    ],
            ]
        ];

        $blocks[] = self::getHeadlineBlock('Button Mobile');
        $blocks[] = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'name' => 'Button',
                'type' => 'button',
                'id' => 'componentf4c8',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'label' => 'test button mobile',
                        'target' => sprintf('{{widget type="Magento\\Catalog\\Block\\Category\\Widget\\Link" template="category/widget/link/link_block.phtml" id_path="category/%s"}}', $this->getMainCategoryId()),
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => false,
                            ],
                    ],
            ]
        ];

        return $blocks;
    }
}
