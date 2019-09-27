<?php

namespace MageSuite\ContentConstructorFrontend\Console\Command;

class ImageTeaserNotMigrationCommand extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var \Magento\Framework\App\State
     */
    protected $state;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Migration\ImageTeaser\NotMigratedComponentFinderFactory
     */
    protected $notMigratedComponentFinderFactory;

    public function __construct(
        \Magento\Framework\App\State $state,
        \MageSuite\ContentConstructorFrontend\Migration\ImageTeaser\NotMigratedComponentFinderFactory $notMigratedComponentFinderFactory
    ) {
        parent::__construct();

        $this->state = $state;
        $this->notMigratedComponentFinderFactory = $notMigratedComponentFinderFactory;
    }

    protected function configure()
    {
        $this->setName("cc:imageteaser:notmigrated:find");
        $this->setDescription('Find all cms pages, categories and products with old image teaser configuration.');
    }

    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        try {
            $this->state->getAreaCode();
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->state->setAreaCode(\Magento\Framework\App\Area::AREA_GLOBAL);
        }

        $notMigratedComponentFinder = $this->notMigratedComponentFinderFactory->create();
        $result = $notMigratedComponentFinder->execute();

        $output->writeln($result);

        return true;
    }
}
