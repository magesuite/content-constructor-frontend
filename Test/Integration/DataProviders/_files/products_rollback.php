<?php
/** @var $config \Magento\Catalog\Model\Product\Media\Config */
$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

$config = $objectManager->get('Magento\Catalog\Model\Product\Media\Config');

/** @var \Magento\Framework\Filesystem\Directory\WriteInterface $mediaDirectory */
$mediaDirectory = $objectManager->get('Magento\Framework\Filesystem')
    ->getDirectoryWrite(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA);

$mediaDirectory->delete($config->getBaseMediaPath());
$mediaDirectory->delete($config->getBaseTmpMediaPath());

/** @var \Magento\Framework\Registry $registry */
$registry = $objectManager->get('Magento\Framework\Registry');

$registry->unregister('isSecureArea');
$registry->register('isSecureArea', true);

foreach ([333, 334, 335] as $categoryId) {
    /** @var $category \Magento\Catalog\Model\Category */
    $category = $objectManager->create('Magento\Catalog\Model\Category');
    $category->load($categoryId);
    if ($category->getId()) {
        $category->delete();
    }
}

foreach ([333, 334, 335] as $productId) {
    /** @var $product \Magento\Catalog\Model\Product */
    $product = $objectManager->create('Magento\Catalog\Model\Product');
    $product->load($productId);
    if ($product->getId()) {
        $product->delete();
    }
}