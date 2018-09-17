<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

/** @var $category \Magento\Catalog\Model\Category */
$category = $objectManager->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category->setId(13)
    ->setName('Not included in menu')
    ->setParentId(2)
    ->setPath('1/2/13')
    ->setLevel(2)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setIncludeInMenu(false)
    ->setPosition(1)
    ->save()
    ->reindex();

$category = $objectManager->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category->setId(14)
    ->setName('Not included subcategory')
    ->setParentId(2)
    ->setPath('1/2/3/14')
    ->setLevel(3)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setIncludeInMenu(false)
    ->setPosition(1)
    ->save()
    ->reindex();
