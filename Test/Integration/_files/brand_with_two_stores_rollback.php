<?php

\Magento\TestFramework\Workaround\Override\Fixture\Resolver::getInstance()->requireDataFixture('Magento/Store/_files/core_fixturestore_rollback.php');

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
$brand = $objectManager->create(\MageSuite\BrandManagement\Model\Brands::class);

$brand->load(555);

if ($brand->getId()) {
    $brand->delete();
}