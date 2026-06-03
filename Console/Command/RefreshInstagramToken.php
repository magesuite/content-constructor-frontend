<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Console\Command;

class RefreshInstagramToken extends \Symfony\Component\Console\Command\Command
{
    public const COMMAND_NAME = 'instagram:token:refresh';
    public const COMMAND_DESCRIPTION = 'Refresh access token for Instagram. Works only if Instagram is already authorized.';

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\RefreshAccessToken $refreshAccessToken,
        ?string $name = null
    ) {
        parent::__construct($name);
    }

    protected function configure(): void
    {
        $this->setName(self::COMMAND_NAME);
        $this->setDescription(self::COMMAND_DESCRIPTION);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function execute(
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    ): int {
        $this->refreshAccessToken->execute();

        return \Magento\Framework\Console\Cli::RETURN_SUCCESS;
    }
}
