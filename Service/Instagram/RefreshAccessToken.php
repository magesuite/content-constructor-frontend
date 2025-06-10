<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram;

class RefreshAccessToken
{
    public const REFRESH_ACCESS_TOKEN_ENDPOINT = 'https://graph.instagram.com/refresh_access_token';
    public const INSTAGRAM_REFRESH_TOKEN_THRESHOLD = 5;
    public const PAYLOAD_KEY_ACCESS_TOKEN = 'access_token';
    public const PAYLOAD_KEY_EXPIRES_IN = 'expires_in';
    public const FLAG_NAME = 'cc_instagram_access_token';

    public function __construct(
        protected \GuzzleHttp\Client $client,
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfiguration,
        protected \Magento\Framework\App\Config $config,
        protected \Magento\Framework\FlagManager $flagManager
    ) {}

    /**
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
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

        $thresholdDate = strtotime(sprintf('+%d days', self::INSTAGRAM_REFRESH_TOKEN_THRESHOLD));

        return $thresholdDate < $expiresAt;
    }

    protected function buildUrl(): string
    {
        $currentAccessToken = $this->instagramConfiguration->getAccessToken();

        $params = [
            'grant_type' => 'ig_refresh_token',
            'access_token' => $currentAccessToken,
        ];

        return self::REFRESH_ACCESS_TOKEN_ENDPOINT . '?' . http_build_query($params);
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

    protected function getPayload(\Psr\Http\Message\ResponseInterface $response): array
    {
        $payload = $response->getBody()->getContents();

        return json_decode($payload, true);
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
        $this->instagramConfiguration->setAccessToken($newAccessToken);

        $this->config->clean();
    }
}
