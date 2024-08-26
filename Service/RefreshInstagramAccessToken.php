<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service;

class RefreshInstagramAccessToken
{
    public const PAYLOAD_KEY_ACCESS_TOKEN = 'access_token';
    public const PAYLOAD_KEY_EXPIRES_IN = 'expires_in';
    public const PAYLOAD_NESTING_DEPTH = 2;
    public const FLAG_NAME = 'cc_instagram_access_token';

    protected \GuzzleHttp\Client $client;
    protected \MageSuite\ContentConstructorFrontend\Helper\Configuration $instagramConfiguration;
    protected \Magento\Framework\App\Config $config;
    protected \Magento\Framework\FlagManager $flagManager;

    public function __construct(
        \GuzzleHttp\Client $client,
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $instagramConfiguration,
        \Magento\Framework\App\Config $config,
        \Magento\Framework\FlagManager $flagManager
    ) {
        $this->client = $client;
        $this->instagramConfiguration = $instagramConfiguration;
        $this->config = $config;
        $this->flagManager = $flagManager;
    }

    /**
     * @throws \Exception
     */
    public function execute(): void
    {
        if ($this->validateExistingToken()) {
            return;
        }

        $url = $this->buildUrl();

        $response = $this->client->get($url);
        $this->validateResponse($response);

        $payload = $this->getPayload($response);
        $this->validatePayload($payload);

        $this->updateAccessToken($payload);
    }

    public function validateExistingToken(): bool
    {
        $expiresAt = $this->flagManager->getFlagData(self::FLAG_NAME);

        if (empty($expiresAt)) {
            return false;
        }

        $threshold = $this->instagramConfiguration->getInstagramAccessTokenRefreshThreshold();
        $thresholdDate = strtotime(sprintf('+%d days', $threshold));

        return $thresholdDate < $expiresAt;
    }

    protected function buildUrl(): string
    {
        $currentAccessToken = $this->instagramConfiguration->getInstagramAccessToken();
        $refreshUrl = $this->instagramConfiguration->getInstagramRefreshAccessTokenUrl();

        return sprintf($refreshUrl, $currentAccessToken);
    }

    /**
     * @throws \Exception
     */
    protected function validateResponse(\Psr\Http\Message\ResponseInterface $response): void
    {
        if ($response->getStatusCode() !== \Symfony\Component\HttpFoundation\Response::HTTP_OK) {
            $message = sprintf(
                'Error response code: %s, payload: %s',
                $response->getStatusCode(),
                $response->getBody()->getContents()
            );

            throw new \Exception($message);
        }
    }

    /**
     * @throws \JsonException
     */
    protected function getPayload(\Psr\Http\Message\ResponseInterface $response): array
    {
        $payload = $response->getBody()->getContents();

        return json_decode($payload, true, self::PAYLOAD_NESTING_DEPTH, JSON_THROW_ON_ERROR);
    }

    /**
     * @throws \Exception
     */
    protected function validatePayload(array $payload): void
    {
        if (empty($payload[self::PAYLOAD_KEY_ACCESS_TOKEN]) || empty($payload[self::PAYLOAD_KEY_EXPIRES_IN])) {
            throw new \Exception(sprintf('Invalid payload: %s', json_encode($payload)));
        }
    }

    protected function updateAccessToken(array $payload): void
    {
        $newAccessToken = $payload[self::PAYLOAD_KEY_ACCESS_TOKEN];
        $expiresAt = time() + $payload[self::PAYLOAD_KEY_EXPIRES_IN];
        $this->flagManager->saveFlag(self::FLAG_NAME, $expiresAt);
        $this->instagramConfiguration->setInstagramAccessToken($newAccessToken);

        $this->config->clean();
    }
}
