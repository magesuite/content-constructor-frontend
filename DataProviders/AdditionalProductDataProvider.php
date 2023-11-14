<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

/**
 * This interface should be used for passing additional custom data to ProductCarousel based on specific project needs
 * @package MageSuite\ContentConstructorFrontend\DataProviders
 */
interface AdditionalProductDataProvider
{
    public function getData(\Magento\Catalog\Api\Data\ProductInterface $product);
}
