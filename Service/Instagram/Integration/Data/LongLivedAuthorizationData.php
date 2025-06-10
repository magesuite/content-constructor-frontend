<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\Data;

class LongLivedAuthorizationData extends \Magento\Framework\DataObject
{
    private const LONG_LIVED_TOKEN = 'access_token';
    private const EXPIRES_IN = 'expires_in';

    public function getLongLivedToken(): string
    {
        return $this->_getData(self::LONG_LIVED_TOKEN);
    }

    public function setLongLivedToken(string $token): self
    {
        return $this->setData(self::LONG_LIVED_TOKEN, $token);
    }

    public function getExpiresIn(): int
    {
        return (int)$this->_getData(self::EXPIRES_IN);
    }

    public function setExpiresIn(int $expiresIn): self
    {
        return $this->setData(self::EXPIRES_IN, $expiresIn);
    }
}
