<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\Data;

class ShortLivedAuthorizationData extends \Magento\Framework\DataObject
{
    private const SHORT_LIVED_TOKEN = 'access_token';
    private const USER_ID = 'user_id';

    public function getShortLivedToken(): string
    {
        return $this->_getData(self::SHORT_LIVED_TOKEN);
    }

    public function setShortLivedToken(string $token): self
    {
        return $this->setData(self::SHORT_LIVED_TOKEN, $token);
    }

    public function getUserId(): int
    {
        return $this->_getData(self::USER_ID);
    }

    public function setUserId(int $userId): self
    {
        return $this->setData(self::USER_ID, $userId);
    }
}
