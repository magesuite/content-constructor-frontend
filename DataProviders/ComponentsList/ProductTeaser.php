<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductTeaser extends DataProviderComponents
{
    protected string $configurableSku = '';

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
                        'title' => 'Product Teaser with Simple Product Custom Description',
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
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentbc211114',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Product Teaser with Simple Product',
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
                'id' => 'component55e23ee3',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => 'test',
                        'sku' => $this->getProductSku(),
                        'slogan' => 'Slogan',
                        'subslogan' => 'Subslogan',
                        'border' => false,
                        'shadow' => false,
                        'isError' => false,
                        'showErrorAlert' => false,
                        'product' => [
                            'name' => 'Product name simple'
                        ],
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'component124',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Product teaser With Configurable Product Custom Description',
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
                'id' => 'component5778e3',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'sku' => $this->getConfigurableProductSku(),
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
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentbc324',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Product Teaser With Border Slogan Custom Description',
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
                'id' => 'component557e3',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'sku' => $this->getProductSku(),
                        'slogan' => 'Slogan',
                        'subslogan' => '',
                        'border' => true,
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
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentbc248',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Product Teaser With Shadow No Slogan Custom Description',
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
                'id' => 'component55e93',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'sku' => $this->getProductSku(),
                        'slogan' => '',
                        'subslogan' => '',
                        'border' => false,
                        'shadow' => true,
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
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentbc23214',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Product Teaser With Border Shadow Slogan Subslogan Custom Description',
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
                'id' => 'component5411',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'sku' => $this->getProductSku(),
                        'slogan' => 'Slogan',
                        'subslogan' => 'Subslogan',
                        'border' => true,
                        'shadow' => true,
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
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentb1vv4',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Product Teaser With Colour Background Custom Description',
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
                'id' => 'component554234',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'sku' => $this->getProductSku(),
                        'slogan' => '',
                        'subslogan' => '',
                        'border' => false,
                        'shadow' => false,
                        'background' => '#fd7272',
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
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentb1v12314',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Visibility: desktop tablet on, mobile off, custom description',
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
                'id' => 'component55e1e3',
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
                                'mobile' => false,
                                'desktop' => true,
                            ],
                        'specialdescription' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    ],
            ],
            [
                'type' => 'headline',
                'name' => 'Headline',
                'id' => 'componentb1v21312314',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => 'Visibility: desktop tablet off, mobile on, custom description',
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
                'id' => 'component55e311',
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
                                'desktop' => false,
                            ],
                        'specialdescription' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    ],
            ],
        ];
    }

    protected function getConfigurableProductSku()
    {
        if (empty($this->configurableSku)) {
            $productCollection = $this->productCollectionFactory->create();
            $productCollection
                ->setStore($this->storeManager->getStore())
                ->addStoreFilter()
                ->setPageSize(1)
                ->addAttributeToFilter('type_id', \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE)
                ->setFlag('has_stock_status_filter', true)
                ->addAttributeToFilter('status', ['eq' => \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED])
                ->addAttributeToFilter('visibility', ['eq' => \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH]);
            $this->configurableSku = $productCollection->getFirstItem()->getSku();
        }

        return $this->configurableSku;
    }
}
