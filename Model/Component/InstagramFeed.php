<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class InstagramFeed implements \MageSuite\ContentConstructorFrontend\Model\Component\ViewModel
{
    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\DataProviders\InstagramFeedDataProvider $instagramFeedDataProvider,
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfigHelper
    ) {}

    public function getFeedData(int $numberOfSlides): array
    {
        return $this->instagramFeedDataProvider->getFeedData($numberOfSlides);
    }

    public function isInstagramConsentRequired(): bool
    {
        return (bool)$this->instagramConfigHelper->isInstagramConsentRequired();
    }
}
