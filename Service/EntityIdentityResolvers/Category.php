<?php

namespace MageSuite\ContentConstructorFrontend\Service\EntityIdentityResolvers;

class Category implements IdentityResolver
{
    protected \Magento\Framework\Registry $registry;

    public function __construct(\Magento\Framework\Registry $registry) {
        $this->registry = $registry;
    }

    public function getIdentities(): array
    {
        $category = $this->registry->registry("current_category");

        if($category === null) {
            return [];
        }

        return [sprintf('cat_c_%s', $category->getId())];
    }
}
