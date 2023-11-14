<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

/**
 * This is default implementation of AdditionalProductDataProvider interface for all projects
 */
class EmptyAdditionalProductDataProvider implements AdditionalProductDataProvider
{
    public function getData(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        return [];
    }
}
