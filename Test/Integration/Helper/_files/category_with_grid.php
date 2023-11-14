<?php

$xml = <<<XML
<referenceContainer name="top">
    <block class="MageSuite\ContentConstructorFrontend\Block\Component" name="componentproductgrid">
        <arguments>
            <argument xsi:type="string" name="type">magento-product-grid-teasers</argument>
            <argument xsi:type="string" name="section">grid</argument>
            <argument xsi:type="array" name="data">
                <item name="title" xsi:type="string">Grid in top</item>
            </argument>
        </arguments>
    </block>
</referenceContainer>
<referenceContainer name="grid">
    <block class="MageSuite\ContentConstructorFrontend\Block\Component" name="componentproductgrid">
        <arguments>
            <argument xsi:type="string" name="type">magento-product-grid-teasers</argument>
            <argument xsi:type="string" name="section">grid</argument>
            <argument xsi:type="array" name="data">
                <item name="title" xsi:type="string">Grid</item>
            </argument>
        </arguments>
    </block>
</referenceContainer>
XML;


/** @var \Magento\Catalog\Model\Category $category */
$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create('Magento\Catalog\Model\Category');
$category->isObjectNew(true);
$category
    ->setId(333)
    ->setCreatedAt('2014-06-23 09:50:07')
    ->setName('Main category')
    ->setParentId(2)
    ->setPath('1/2/333')
    ->setLevel(3)
    ->setAvailableSortBy('name')
    ->setDefaultSortBy('name')
    ->setIsActive(true)
    ->setPosition(1)
    ->setAvailableSortBy(['position']);

$category->setCustomLayoutUpdate($xml);
$category->save();
