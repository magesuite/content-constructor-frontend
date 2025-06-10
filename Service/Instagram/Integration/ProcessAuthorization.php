<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram\Integration;

class ProcessAuthorization
{
    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfiguration,
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\RequestShortLivedToken $requestShortLivedToken,
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\RequestLongLivedToken $requestLongLivedToken,
        protected \Magento\Framework\FlagManager $flagManager,
        protected \Magento\Framework\App\Config $config,
    ) {}

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \MageSuite\ContentConstructorFrontend\Service\Instagram\Exception\InstagramApiException
     */
    public function execute(string $code): void
    {
        $shortLivedData = $this->requestShortLivedToken->execute($code);
        $userId = $shortLivedData->getUserId();
        $this->instagramConfiguration->setInstagramUserId($userId);

        $longLivedData = $this->requestLongLivedToken->execute($shortLivedData->getShortLivedToken());
        $token = $longLivedData->getLongLivedToken();
        $expiresIn = $longLivedData->getExpiresIn();

        $this->instagramConfiguration->setAccessToken($token);

        $expiresAt = time() + $expiresIn;
        $this->flagManager->saveFlag(\MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken::FLAG_NAME, $expiresAt);

        $this->config->clean();
    }
}
