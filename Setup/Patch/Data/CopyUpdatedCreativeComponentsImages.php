<?php

namespace MageSuite\ContentConstructorFrontend\Setup\Patch\Data;

class CopyUpdatedCreativeComponentsImages implements \Magento\Framework\Setup\Patch\DataPatchInterface
{
    protected \Magento\Framework\App\Filesystem\DirectoryList $directoryList;

    public function __construct(\Magento\Framework\App\Filesystem\DirectoryList $directoryList)
    {
        $this->directoryList = $directoryList;
    }

    public function apply()
    {
        $mediaDir = $this->directoryList->getPath('media');
        $sourceDir = __DIR__ . '/../../../assets/creative_components/updated';

        if (!is_writeable($mediaDir)) {
            return;
        }
        if (!file_exists($mediaDir . '/creative_components')) {
            mkdir($mediaDir . '/creative_components', 0755, true);
        }

        $directory = opendir($sourceDir);

        while (($file = readdir($directory)) != false) {
            $sourcePath = $sourceDir . '/' . $file;
            $destinationPath = $mediaDir . '/creative_components/' . $file;

            if (is_dir($sourcePath)) {
                continue;
            }
            if (file_exists($destinationPath)) {
                continue;
            }
            copy($sourcePath, $destinationPath);
        }
    }

    public function getAliases(): array
    {
        return [];
    }

    public static function getDependencies(): array
    {
        return [];
    }
}
