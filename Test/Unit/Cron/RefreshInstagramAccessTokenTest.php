<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class RefreshInstagramAccessTokenTest extends \PHPUnit\Framework\TestCase
{
    public const ACCESS_TOKEN_REFRESH_THRESHOLD = 3;

    protected ?\Magento\Framework\App\ObjectManager $objectManager;

    protected function setUp(): void
    {
        $this->objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    public function testExecuteWillRunUpdate()
    {
        $expirationDate = date(\Magento\Framework\Stdlib\DateTime::DATETIME_PHP_FORMAT, strtotime("+2 day"));
        $configuration = $this->mockConfiguration($expirationDate);

        $service = $this->createMock(\MageSuite\ContentConstructorFrontend\Service\RefreshInstagramAccessToken::class);
        $service->expects($this->once())->method('execute');

        $cron = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Cron\RefreshInstagramAccessToken::class,
            [
                'configuration' => $configuration,
                'refreshInstagramAccessToken' => $service,
            ]
        );

        $cron->execute();
    }

    public function testExecuteWillSkipUpdate()
    {
        $expirationDate = date(\Magento\Framework\Stdlib\DateTime::DATETIME_PHP_FORMAT, strtotime("+4 day"));
        $configuration = $this->mockConfiguration($expirationDate);

        $service = $this->createMock(\MageSuite\ContentConstructorFrontend\Service\RefreshInstagramAccessToken::class);
        $service->expects($this->never())->method('execute');

        $cron = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Cron\RefreshInstagramAccessToken::class,
            [
                'configuration' => $configuration,
                'refreshInstagramAccessToken' => $service,
            ]
        );

        $cron->execute();
    }

    protected function mockConfiguration(string $expirationDate): \MageSuite\ContentConstructorFrontend\Helper\Configuration
    {
        $configuration = $this->createMock(\MageSuite\ContentConstructorFrontend\Helper\Configuration::class);
        $configuration->expects($this->once())->method('getInstagramAccessTokenExpirationDate')->willReturn($expirationDate);
        $configuration->expects($this->once())->method('getInstagramAccessTokenRefreshThreshold')->willReturn(self::ACCESS_TOKEN_REFRESH_THRESHOLD);
        $configuration->expects($this->once())->method('isInstagramAccessTokenAutoRefreshEnabled')->willReturn(true);

        return $configuration;
    }
}
