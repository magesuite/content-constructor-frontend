<?php
$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
/** @var \MageSuite\BrandManagement\Model\BrandsRepository $brandRepository */
$brandRepository = $objectManager->get(\MageSuite\BrandManagement\Api\BrandsRepositoryInterface::class);
/** @var \MageSuite\BrandManagement\Model\Brands $brand */
$brand = $objectManager->create(\MageSuite\BrandManagement\Model\Brands::class);
$brand->isObjectNew(true);
$brand->setId(
    555
)->setStoreId(
    \Magento\Store\Model\Store::DEFAULT_STORE_ID
)->setShowInBrandCarousel(
    1
)->setEnabled(
    1
)->setBrandName(
    'brand-admin'
)->setUrlKey(
    'brand-admin'
)->setBrandIcon(
    'brand-icon.png'
);
$brandRepository->save($brand);

/** @var \Magento\Store\Model\Store $store */
$store = $objectManager->create(\Magento\Store\Model\Store::class);
$brand->setStoreId($store->load('default')->getId())
    ->setBrandName('brand-defaultstore')
    ->setUrlKey('brand-defaultstore');
$brandRepository->save($brand);

$brand->setStoreId($store->load('fixturestore')->getId())
    ->setBrandName('brand-fixturestore')
    ->setUrlKey('brand-fixturestore');
$brandRepository->save($brand);
