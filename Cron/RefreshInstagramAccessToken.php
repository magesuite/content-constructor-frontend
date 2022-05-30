<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Cron;

class RefreshInstagramAccessToken
{
    protected \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration;
    protected \MageSuite\ContentConstructorFrontend\Service\RefreshInstagramAccessToken $refreshInstagramAccessToken;
    protected \Psr\Log\LoggerInterface $logger;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration,
        \MageSuite\ContentConstructorFrontend\Service\RefreshInstagramAccessToken $refreshInstagramAccessToken,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->configuration = $configuration;
        $this->refreshInstagramAccessToken = $refreshInstagramAccessToken;
        $this->logger = $logger;
    }

    public function execute(): bool
    {
        if (!$this->configuration->isInstagramAccessTokenAutoRefreshEnabled()) {
            return true;
        }

        $expiresAt = $this->configuration->getInstagramAccessTokenExpirationDate() ?: 'now';
        $threshold = $this->configuration->getInstagramAccessTokenRefreshThreshold();

        $expiresAtDate = strtotime($expiresAt);
        $thresholdDate = strtotime(sprintf('now + %s days', $threshold));

        if ($thresholdDate < $expiresAtDate) {
            return true;
        }

        try {
            $this->refreshInstagramAccessToken->execute();

            return true;
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage(), $e->getTrace());

            return false;
        }
    }
}
