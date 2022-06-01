<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service;

class RefreshInstagramAccessToken
{
    public const PAYLOAD_KEY_ACCESS_TOKEN = 'access_token';
    public const PAYLOAD_KEY_EXPIRES_IN = 'expires_in';
    public const PAYLOAD_NESTING_DEPTH = 2;

    protected \GuzzleHttp\Client $client;
    protected \MageSuite\ContentConstructorFrontend\Helper\Configuration $instagramConfiguration;
    protected \Magento\Framework\App\Config $config;

    public function __construct(
        \GuzzleHttp\Client $client,
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $instagramConfiguration,
        \Magento\Framework\App\Config $config
    ) {
        $this->client = $client;
        $this->instagramConfiguration = $instagramConfiguration;
        $this->config = $config;
    }

    /**
     * @throws \Exception
     */
    public function execute(): void
    {
        $url = $this->buildUrl();

        $response = $this->client->get($url);
        $this->validateResponse($response);

        $payload = $this->getPayload($response);
        $this->validatePayload($payload);

        $this->updateAccessToken($payload);
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
        $expiresAt = date(
            \Magento\Framework\Stdlib\DateTime::DATETIME_PHP_FORMAT,
            strtotime('now') + $payload[self::PAYLOAD_KEY_EXPIRES_IN]
        );

        $this->instagramConfiguration->setInstagramAccessToken($newAccessToken);
        $this->instagramConfiguration->setInstagramAccessTokenExpirationDate($expiresAt);

        $this->config->clean();
    }
}
