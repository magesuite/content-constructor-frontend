<?php

namespace MageSuite\ContentConstructorFrontend\Service\EntityIdentityResolvers;

class CmsPage implements IdentityResolver
{
    protected \Magento\Cms\Model\Page $cmsPage;

    public function __construct(\Magento\Cms\Model\Page $cmsPage) {
        $this->cmsPage = $cmsPage;
    }

    public function getIdentities(): array
    {
        return $this->cmsPage->getIdentities();
    }
}
