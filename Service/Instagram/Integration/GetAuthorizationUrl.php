<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram\Integration;

class GetAuthorizationUrl
{
    public const ENDPOINT = 'https://api.instagram.com/oauth/authorize';

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $instagramConfiguration,
    ) {}

    public function execute(): string
    {
        $clientId = $this->instagramConfiguration->getClientId();
        $redirectUrl = $this->instagramConfiguration->getRedirectUrl();

        $params = [
            'client_id' => $clientId,
            'redirect_uri' => $redirectUrl,
            'response_type' => 'code',
            'scope' => 'instagram_business_basic',
        ];

        return self::ENDPOINT . '?' . http_build_query($params);
    }
}
