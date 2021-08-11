<?php

declare(strict_types=1);

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

/**
 * @var $directoryList \Magento\Framework\App\Filesystem\DirectoryList
 */
$directoryList = $objectManager->get(\Magento\Framework\App\Filesystem\DirectoryList::class);

$mediaPath = $directoryList->getPath(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);

if (!file_exists($mediaPath . '/wysiwyg')) {
    @mkdir($mediaPath . '/wysiwyg');
}
if (!file_exists($mediaPath . '/wysiwyg/.thumbs')) {
    @mkdir($mediaPath . '/wysiwyg/.thumbs');
}

if (!file_exists($mediaPath . '/wysiwyg/.thumbs/480')) {
    @mkdir($mediaPath . '/wysiwyg/.thumbs/480');
}

if (!file_exists($mediaPath . '/wysiwyg/.thumbs/768')) {
    @mkdir($mediaPath . '/wysiwyg/.thumbs/768');
}

if (!file_exists($mediaPath . '/wysiwyg/.thumbs/1024')) {
    @mkdir($mediaPath . '/wysiwyg/.thumbs/1024');
}

if (!file_exists($mediaPath . '/wysiwyg/.thumbs/1440')) {
    @mkdir($mediaPath . '/wysiwyg/.thumbs/1440');
}

copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/magento_image.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/magento_image_second.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/magento_image_third.png');

copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/480/magento_image.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/480/magento_image_second.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/480/magento_image_third.png');

copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/768/magento_image.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/768/magento_image_second.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/768/magento_image_third.png');

copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/1024/magento_image.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/1024/magento_image_second.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/1024/magento_image_third.png');

copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/1440/magento_image.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/1440/magento_image_second.png');
copy(__DIR__ . '/magento_image.png', $mediaPath . '/wysiwyg/.thumbs/1440/magento_image_third.png');
