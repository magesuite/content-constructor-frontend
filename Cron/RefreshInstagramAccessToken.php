<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Cron;

class RefreshInstagramAccessToken
{
    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfiguration,
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken $refreshInstagramAccessToken,
        protected \Psr\Log\LoggerInterface $logger
    ) {}

    public function execute(): bool
    {
        if (empty($this->instagramConfiguration->getAccessToken())) {
            return false;
        }

        try {
            $this->refreshInstagramAccessToken->execute();
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());

            return false;
        }

        return true;
    }
}
