<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram\Integration;

class RequestLongLivedToken
{
    public const ENDPOINT = 'https://graph.instagram.com/access_token';
    public const CONNECTION_TIMEOUT = 60;

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\Data\LongLivedAuthorizationDataFactory $longLivedAuthorizationDataFactory,
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfiguration,
        protected \GuzzleHttp\Client $client,
    ) {}

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \MageSuite\ContentConstructorFrontend\Service\Instagram\Exception\InstagramApiException
     */
    public function execute(string $shortLivedAccessToken): \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\Data\LongLivedAuthorizationData
    {
        $params = [
            'grant_type' => 'ig_exchange_token',
            'client_secret' => $this->instagramConfiguration->getClientSecret(),
            'access_token' => $shortLivedAccessToken,
        ];

        $query = self::ENDPOINT . '?' . http_build_query($params);

        $response = $this->client->get($query, ['timeout' => self::CONNECTION_TIMEOUT]);

        if ($response->getStatusCode() !== 200) {
            $message = sprintf("Instagram API returned status code: %s", $response->getStatusCode());

            throw new \MageSuite\ContentConstructorFrontend\Service\Instagram\Exception\InstagramApiException($message);
        }

        $json = $response->getBody()->getContents();
        $data = json_decode($json, true);

        return $this->longLivedAuthorizationDataFactory->create(['data' => $data]);
    }
}
