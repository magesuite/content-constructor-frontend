<?php

namespace MageSuite\ContentConstructorFrontend\Service\EntityIdentityResolvers;

class Brand implements IdentityResolver
{
    protected \Magento\Framework\Registry $registry;

    public function __construct(\Magento\Framework\Registry $registry) {
        $this->registry = $registry;
    }

    public function getIdentities(): array
    {
        $brand = $this->registry->registry("current_brand");

        if($brand === null) {
            return [];
        }

        return $brand->getIdentities();
    }
}
