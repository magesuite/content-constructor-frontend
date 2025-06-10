<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service\Instagram;

class RefreshInstagramAccessTokenTest extends \PHPUnit\Framework\TestCase
{
    protected ?\Magento\Framework\App\ObjectManager $objectManager;
    protected ?\Magento\Framework\FlagManager $flagManagerMock;

    protected function setUp(): void
    {
        $this->objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $this->flagManagerMock = $this->createMock(\Magento\Framework\FlagManager::class);
    }

    public function testExecuteWillRunUpdate()
    {
        $expirationDate = strtotime("+2 day");
        $this->flagManagerMock
            ->expects($this->once())
            ->method('getFlagData')
            ->willReturn($expirationDate);
        $refreshInstagramAccessToken = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken::class,
            [
                'flagManager' => $this->flagManagerMock
            ]
        );
        $this->assertFalse($refreshInstagramAccessToken->validateExistingToken());
    }

    public function testExecuteWillSkipUpdate()
    {
        $expirationDate = strtotime('+6 days');
        $this->flagManagerMock
            ->expects($this->once())
            ->method('getFlagData')
            ->willReturn($expirationDate);
        $refreshInstagramAccessToken = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken::class,
            [
                'flagManager' => $this->flagManagerMock
            ]
        );
        $this->assertTrue($refreshInstagramAccessToken->validateExistingToken());
    }
}
