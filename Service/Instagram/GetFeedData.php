<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram;

class GetFeedData
{
    public const ENDPOINT_PATTERN = 'https://graph.instagram.com/v23.0/%s/media';

    public function __construct(
        protected \GuzzleHttp\Client $client,
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $configuration
    ) {}

    public function execute(int $numberOfPosts): array
    {
        $userId = $this->configuration->getInstagramUserId();
        $accessToken = $this->configuration->getAccessToken();

        if (empty($userId) || empty($accessToken)) {
            return [];
        }

        $endpoint = sprintf(self::ENDPOINT_PATTERN, $userId);
        $params = [
            'fields' => 'id,media_type,media_url,permalink,timestamp',
            'limit' => $numberOfPosts,
            'access_token' => $accessToken,
        ];

        $url = $endpoint . '?' . http_build_query($params);

        try {
            $response = $this->client->get($url);

            return json_decode($response->getBody()->getContents(), true);
        } catch (\Throwable) {
            return [];
        }
    }
}
