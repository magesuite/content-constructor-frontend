<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Plugin\Catalog\Block\Product\AbstractProduct;

class ProductImage
{
    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\ProductImage\LoadSimpleVariation $loadSimpleVariation
    ) {
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeGetImage(
        \Magento\Catalog\Block\Product\AbstractProduct $subject,
        \Magento\Catalog\Model\Product $product,
        $location,
        array $attributes = []
    ): array {
        $product = $this->loadSimpleVariation->execute($product);

        return [$product, $location, $attributes];
    }
}
