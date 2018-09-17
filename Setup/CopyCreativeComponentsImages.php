<?php

namespace MageSuite\ContentConstructorFrontend\Setup;

class CopyCreativeComponentsImages implements \Magento\Framework\Setup\InstallDataInterface
{
    /**
     * @var \Magento\Framework\App\Filesystem\DirectoryList;
     */
    private $directoryList;

    public function __construct(\Magento\Framework\App\Filesystem\DirectoryList $directoryList)
    {
        $this->directoryList = $directoryList;
    }

    public function install(
        \Magento\Framework\Setup\ModuleDataSetupInterface $setup,
        \Magento\Framework\Setup\ModuleContextInterface $context
    )
    {
        $mediaDir = $this->directoryList->getPath('media');
        $sourceDir = __DIR__.'/../assets/creative_components';

        if(!is_writeable($mediaDir)) {
            return;
        }
        if (!file_exists($mediaDir . '/creative_components')) {
            mkdir($mediaDir . '/creative_components', 0755, true);
        }

        $directory = opendir($sourceDir);

        while(($file = readdir($directory)) != false)
        {
            if (is_dir($sourceDir.'/' .$file)) {
                continue;
            }
            copy($sourceDir.'/' .$file, $mediaDir.'/creative_components/'.$file);
        }
    }
}
