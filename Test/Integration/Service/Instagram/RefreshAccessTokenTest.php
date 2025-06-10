<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Service\Instagram;

class RefreshAccessTokenTest extends \PHPUnit\Framework\TestCase
{
    protected ?\MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken $service;
    protected ?\MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram $configuration;
    protected ?\Magento\Framework\FlagManager $flagManager;
    protected ?string $newAccessToken;

    protected function setUp(): void
    {
        // Randomize access token for each test to verify if config cache is flushed properly after updating by service
        $this->newAccessToken = sprintf('access-token-%s', rand(0, 9999));
        $objectManager = \Magento\TestFramework\ObjectManager::getInstance();
        $this->configuration = $objectManager->get(\MageSuite\ContentConstructorFrontend\Helper\Configuration\Instagram::class);
        $this->flagManager = $objectManager->get(\Magento\Framework\FlagManager::class);
        $response = $this->mockApiResponse();
        $mockBuilder = $this->getMockBuilder(\GuzzleHttp\Client::class);

        if (!method_exists(\GuzzleHttp\Client::class, 'get')) {
            $mockBuilder->addMethods(['get']);
        }

        $client = $mockBuilder->getMock();
        $client->method('get')->willReturn($response);

        $this->service = $objectManager->create(
            \MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken::class,
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
    public function testItRefreshInstagramToken(): void
    {
        $this->service->execute();

        $newToken = $this->configuration->getAccessToken();
        $this->assertEquals($this->newAccessToken, $newToken);
    }

    protected function tearDown(): void
    {
        $this->flagManager->deleteFlag(\MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken::FLAG_NAME);
    }
}
