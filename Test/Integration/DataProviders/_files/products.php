<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\Framework\App\Filesystem\DirectoryList;

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
/** @var $mediaConfig \Magento\Catalog\Model\Product\Media\Config */
$mediaConfig = $objectManager->get('Magento\Catalog\Model\Product\Media\Config');

/** @var $mediaDirectory \Magento\Framework\Filesystem\Directory\WriteInterface */
$mediaDirectory = $objectManager->get('Magento\Framework\Filesystem')
    ->getDirectoryWrite(DirectoryList::MEDIA);
$targetDirPath = $mediaConfig->getBaseMediaPath() . str_replace('/', DIRECTORY_SEPARATOR, '/m/a/');
$targetTmpDirPath = $mediaConfig->getBaseTmpMediaPath() . str_replace('/', DIRECTORY_SEPARATOR, '/m/a/');
$mediaDirectory->create($targetDirPath);
$mediaDirectory->create($targetTmpDirPath);

$targetTmpFilePath = $mediaDirectory->getAbsolutePath() . DIRECTORY_SEPARATOR . $targetTmpDirPath
    . DIRECTORY_SEPARATOR . 'magento_image.jpg';
copy(__DIR__ . '/magento_image.jpg', $targetTmpFilePath);
// Copying the image to target dir is not necessary because during product save, it will be moved there from tmp dir


/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');

$diffFromDate = date('Y-m-d h:m:s', strtotime('-14 days'));
$diffToDate = date('Y-m-d h:m:s', strtotime('+14 days'));

$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(333)
    ->setAttributeSetId(4)
    ->setName('Cheapest product')
    ->setSku('cheapest')
    ->setPrice(10)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 100, 'is_qty_decimal' => 0, 'is_in_stock' => 1])
    ->setImage('/m/a/magento_image.jpg')
    ->setSmallImage('/m/a/magento_image.jpg')
    ->setThumbnail('/m/a/magento_image.jpg')
    ->setData('media_gallery', ['images' => [
        [
            'file' => '/m/a/magento_image.jpg',
            'position' => 1,
            'label' => 'Image Alt Text',
            'disabled' => 0,
            'media_type' => 'image'
        ],
    ]])
    ->setNewsFromDate($diffFromDate)
    ->setNewsToDate($diffToDate)
    ->setBestsellerScoreByAmount(700)
    ->setCanSaveCustomOptions(true)
    ->save();

$product->reindex();
$product->priceReindexCallback();

$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');

$diffFromDate = date('Y-m-d h:m:s', strtotime('-12 days'));
$diffToDate = date('Y-m-d h:m:s', strtotime('+12 days'));

$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(334)
    ->setAttributeSetId(4)
    ->setName('The most expensive product')
    ->setSku('the_most_expensive')
    ->setPrice(100)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 60, 'is_qty_decimal' => 0, 'is_in_stock' => 1])
    ->setNewsFromDate($diffFromDate)
    ->setNewsToDate($diffToDate)
    ->setBestsellerScoreByAmount(900)
    ->setPopularIcon(0)
    ->save();

$product->reindex();
$product->priceReindexCallback();

$tierPrice = $objectManager->create(Magento\Catalog\Api\Data\ProductTierPriceInterface::class);
$tierPrice->setQty(20);
$tierPrice->setCustomerGroupId(\Magento\Customer\Model\GroupManagement::CUST_GROUP_ALL);
$tierPrice->setValue(5);

$product->setTierPrices([
    $tierPrice
]);
$product->save();
$product->reindex();
$product->priceReindexCallback();

$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');

$diffFromDate = date('Y-m-d h:m:s', strtotime('-10 days'));
$diffToDate = date('Y-m-d h:m:s', strtotime('-8 days'));

$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(335)
    ->setAttributeSetId(4)
    ->setName('The middle product')
    ->setSku('the_middle_product')
    ->setPrice(50)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 80, 'is_qty_decimal' => 0, 'is_in_stock' => 1])
    ->setNewsFromDate($diffFromDate)
    ->setNewsToDate($diffToDate)
    ->setBestsellerScoreByAmount(800)
    ->setPopularIcon(1)
    ->setDailyDealEnabled(1)
    ->setDailyDealLimit(50)
    ->setDailyDealInitialAmount(60)
    ->setDailyDealFrom('2018-03-19 00:00:00')
    ->setDailyDealTo('2031-03-22 08:00:00')
    ->setDailyDealPrice(5)
    ->save();

$product->reindex();
$product->priceReindexCallback();

$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');

$diffFromDate = date('Y-m-d h:m:s', strtotime('-10 days'));
$diffToDate = date('Y-m-d h:m:s', strtotime('-8 days'));

$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(338)
    ->setAttributeSetId(4)
    ->setName('A product with daily deal')
    ->setSku('some_daily_deal_product')
    ->setPrice(70)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 80, 'is_qty_decimal' => 0, 'is_in_stock' => 1])
    ->setNewsFromDate($diffFromDate)
    ->setNewsToDate($diffToDate)
    ->setBestsellerScoreByAmount(800)
    ->setPopularIcon(1)
    ->setDailyDealEnabled(1)
    ->setDailyDealLimit(50)
    ->setDailyDealInitialAmount(60)
    ->setDailyDealFrom('2018-03-19 00:00:00')
    ->setDailyDealTo('2031-03-22 08:00:00')
    ->setDailyDealPrice(5)
    ->save();

$product->reindex();
$product->priceReindexCallback();

$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');

$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(9999)
    ->setAttributeSetId(4)
    ->setName('A product with really high id')
    ->setSku('high_id_product')
    ->setPrice(70)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 32, 'is_qty_decimal' => 0, 'is_in_stock' => 1])
    ->setNewsFromDate($diffFromDate)
    ->setNewsToDate($diffToDate)
    ->setBestsellerScoreByAmount(800)
    ->setPopularIcon(1)
    ->save();

$product->reindex();
$product->priceReindexCallback();

$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');

$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(336)
    ->setAttributeSetId(4)
    ->setName('Invisible product')
    ->setSku('invisible_product')
    ->setPrice(50)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_NOT_VISIBLE)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 100, 'is_qty_decimal' => 0, 'is_in_stock' => 1])
    ->setBestsellerScoreByAmount(600)
    ->save();

$product->reindex();
$product->priceReindexCallback();

$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Product');

$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(337)
    ->setAttributeSetId(4)
    ->setName('Out of stock product')
    ->setSku('out_of_stock_product')
    ->setPrice(50)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 100, 'is_qty_decimal' => 0, 'is_in_stock' => 0])
    ->setBestsellerScoreByAmount(500)
    ->save();

$product->reindex();
$product->priceReindexCallback();

/** @var \Magento\Catalog\Model\Category $category */
$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(333)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Category 1')
    ->setParentId(2)
    ->setPath('1/2/333')
    ->setLevel(2)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position'])->setPostedProducts([
        333 => 10,
        335 => 10,
        336 => 10,
        337 => 10,
    ])
    ->save()
    ->reindex();

$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(334)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Subcategory')
    ->setParentId(333)
    ->setPath('1/2/333/334')
    ->setLevel(4)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position'])->setPostedProducts([334 => 10])
    ->save()
    ->reindex();


/** @var \Magento\Catalog\Model\Category $category */
/*
 * This is an ElasticSuite virtual category that contains all products that "name" attribute contains "The"
 */
$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(335)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Virtual category')
    ->setParentId(2)
    ->setPath('1/2/335')
    ->setLevel(2)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setIsVirtualCategory(true)
    ->setData('virtual_rule', [
        'conditions' =>
            [
                '1' =>
                    [
                        'type' => 'Smile\\ElasticsuiteVirtualCategory\\Model\\Rule\\Condition\\Combine',
                        'aggregator' => 'all',
                        'value' => '1',
                        'new_child' => '',
                    ],
                '1--1' =>
                    [
                        'type' => 'Smile\\ElasticsuiteVirtualCategory\\Model\\Rule\\Condition\\Product',
                        'attribute' => 'name',
                        'operator' => '{}',
                        'value' => 'The',
                    ],
            ],
    ])
    ->setAvailableSortBy(['position'])
    ->save()
    ->reindex();
