<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service;

class CreativeComponentsImagesCopier
{
    protected const MODULE_NAME = 'MageSuite_ContentConstructorFrontend';
    protected const SOURCE_DIRECTORY = 'assets/creative_components';
    protected const MEDIA_DIRECTORY = 'creative_components';

    public function __construct(
        protected \Magento\Framework\Filesystem $filesystem,
        protected \Magento\Framework\Filesystem\Driver\File $fileDriver,
        protected \Magento\Framework\Module\Dir\Reader $moduleDirectoryReader
    ) {
    }

    public function copy(string $subdirectory = ''): void
    {
        $mediaDirectory = $this->filesystem->getDirectoryWrite(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);

        if (!$mediaDirectory->isWritable()) {
            return;
        }

        $sourcePath = $this->getSourcePath($subdirectory);
        $destinationPath = $this->getDestinationPath($subdirectory);
        $mediaDirectory->create($destinationPath);

        foreach ($this->fileDriver->readDirectory($sourcePath) as $sourceFile) {
            if (!$this->fileDriver->isFile($sourceFile)) {
                continue;
            }

            $fileName = $this->fileDriver->getRelativePath(sprintf('%s/', $sourcePath), $sourceFile);
            $this->copyFileIfMissing($mediaDirectory, $sourceFile, sprintf('%s/%s', $destinationPath, $fileName));
        }
    }

    protected function copyFileIfMissing(\Magento\Framework\Filesystem\Directory\WriteInterface $mediaDirectory, string $sourceFile, string $destinationFile): void
    {
        if ($mediaDirectory->isExist($destinationFile)) {
            return;
        }

        $this->fileDriver->copy($sourceFile, $mediaDirectory->getAbsolutePath($destinationFile));
    }

    protected function getSourcePath(string $subdirectory): string
    {
        $moduleDirectory = $this->moduleDirectoryReader->getModuleDir('', self::MODULE_NAME);
        $sourcePath = sprintf('%s/%s', $moduleDirectory, self::SOURCE_DIRECTORY);

        return $subdirectory === '' ? $sourcePath : sprintf('%s/%s', $sourcePath, $subdirectory);
    }

    protected function getDestinationPath(string $subdirectory): string
    {
        return $subdirectory === '' ? self::MEDIA_DIRECTORY : sprintf('%s/%s', self::MEDIA_DIRECTORY, $subdirectory);
    }
}
