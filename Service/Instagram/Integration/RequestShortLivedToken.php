<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram\Integration;

class RequestShortLivedToken
{
    public const INSTAGRAM_API_OAUTH_ACCESS_TOKEN = 'https://api.instagram.com/oauth/access_token';

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\Data\ShortLivedAuthorizationDataFactory $authorizationDataFactory,
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfiguration,
        protected \GuzzleHttp\Client $client,
    ) {}

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \MageSuite\ContentConstructorFrontend\Service\Instagram\Exception\InstagramApiException
     */
    public function execute(string $code): \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\Data\ShortLivedAuthorizationData
    {
        $clientId = $this->instagramConfiguration->getClientId();
        $clientSecret = $this->instagramConfiguration->getClientSecret();
        $redirectUrl = $this->instagramConfiguration->getRedirectUrl();

        $formParams = [
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'grant_type' => 'authorization_code',
            'redirect_uri' => $redirectUrl,
            'code' => $code,
        ];

        $multipart = [];

        foreach ($formParams as $name => $value) {
            $multipart[] = [
                'name'     => $name,
                'contents' => $value
            ];
        }

        $response = $this->client->post(self::INSTAGRAM_API_OAUTH_ACCESS_TOKEN, [
            'multipart' => $multipart,
        ]);

        if ($response->getStatusCode() !== 200) {
            $message = sprintf("Instagram API returned status code: %s", $response->getStatusCode());

            throw new \MageSuite\ContentConstructorFrontend\Service\Instagram\Exception\InstagramApiException($message);
        }

        $json = $response->getBody()->getContents();
        $data = json_decode($json, true);

        return $this->authorizationDataFactory->create(['data' => $data]);
    }
}
