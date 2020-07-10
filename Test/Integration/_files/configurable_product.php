<?php

/** @var \Magento\Catalog\Api\ProductRepositoryInterface $productRepository */
$productRepository = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()
    ->get(\Magento\Catalog\Api\ProductRepositoryInterface::class);

$simpleProduct = $productRepository->get('simple_20');
$simpleProduct->setStockData([
    'qty' => 0,
    'is_in_stock' => 0
]);
$productRepository->save($simpleProduct);

$simpleProduct = $productRepository->get('simple_10');
$simpleProduct->setStockData([
    'qty' => 0,
    'is_in_stock' => 0
]);
$productRepository->save($simpleProduct);