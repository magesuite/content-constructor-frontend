<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Service;

use Magento\TestFramework\ObjectManager;

class RefreshInstagramAccessTokenTest extends \PHPUnit\Framework\TestCase
{
    private ?\MageSuite\ContentConstructorFrontend\Service\RefreshInstagramAccessToken $service;
    private ?\MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration;
    private ?string $newAccessToken;

    protected function setUp(): void
    {
        // Randomize access token for each test to verify if config cache is flushed properly after updating by service
        $this->newAccessToken = sprintf('access-token-%s', rand(0, 9999));

        $objectManager = ObjectManager::getInstance();
        $this->configuration = $objectManager->get(\MageSuite\ContentConstructorFrontend\Helper\Configuration::class);

        $response = $this->mockApiResponse();

        $client = $this->getMockBuilder(\GuzzleHttp\Client::class)->getMock();
        $client->expects($this->once())->method('get')->willReturn($response);

        $this->service = $objectManager->create(
            \MageSuite\ContentConstructorFrontend\Service\RefreshInstagramAccessToken::class,
            [
                'client' => $client,
            ]
        );
    }

    protected function mockApiResponse(): \Psr\Http\Message\ResponseInterface
    {
        $payload = sprintf('{"access_token":"%s","token_type":"bearer","expires_in":5183944}', $this->newAccessToken);

        $body = $this->createMock(\GuzzleHttp\Psr7\Stream::class);
        $body->expects($this->once())->method('getContents')->willReturn($payload);

        $response = $this->createMock(\Psr\Http\Message\ResponseInterface::class);
        $response->expects($this->once())->method('getBody')->willReturn($body);
        $response->expects($this->once())->method('getStatusCode')->willReturn(\Symfony\Component\HttpFoundation\Response::HTTP_OK);

        return $response;
    }

    /**
     * @magentoConfigFixture default/cc_frontend_extension/instagram_component/access_token old-access-token
     */
    public function testExecute(): void
    {
        $this->service->execute();

        $newToken = $this->configuration->getInstagramAccessToken();
        $this->assertEquals($this->newAccessToken, $newToken);
    }
}
