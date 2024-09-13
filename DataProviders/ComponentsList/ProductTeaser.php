<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductTeaser extends DataProviderComponents
{
    public function getBlocks()
    {
        return [
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentbc24',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Product teaser',
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
            [
                'type' => 'product-teaser',
                'name' => 'Product Teaser',
                'id' => 'component55e3',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'sku' => $this->getProductSku(),
                        'slogan' => 'Slogan',
                        'subslogan' => 'Subslogan',
                        'border' => false,
                        'shadow' => false,
                        'isError' => false,
                        'showErrorAlert' => false,
                        'product' => [
                            'name' => 'Product name'
                        ],
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                        'specialdescription' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    ],
            ],
        ];
    }
}
