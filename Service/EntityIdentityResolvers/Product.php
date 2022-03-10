<?php

namespace MageSuite\ContentConstructorFrontend\Service\EntityIdentityResolvers;

class Product implements IdentityResolver
{
    protected \Magento\Framework\Registry $registry;

    public function __construct(\Magento\Framework\Registry $registry) {
        $this->registry = $registry;
    }

    public function getIdentities(): array
    {
        $product = $this->registry->registry("product");

        if($product === null) {
            return [];
        }

        return [sprintf('cat_p_%s', $product->getId())];
    }
}
