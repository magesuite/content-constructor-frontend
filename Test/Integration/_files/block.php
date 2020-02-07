<?php

/** @var $block \Magento\Cms\Model\Block */
$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

$block = $objectManager->create(\Magento\Cms\Model\Block::class);
$block
    ->setTitle('Block with content constructor')
    ->setIdentifier('block_with_content_constructor')
    ->setContent('')
    ->setContentConstructorContent(
        json_encode(
            [
                [
                    "type" => "headline",
                    "name" => "Headline",
                    "id" => "component2c0c",
                    "section" => "content",
                    "data" => [
                        "title" => "Test",
                        "subtitle" => "Headline",
                        "headingTag" => "h2",
                        "componentVisibility" => [
                            "mobile" => true,
                            "desktop" => true
                        ]
                    ]
                ]
            ]
        )
    )
    ->setIsActive(1)
    ->setStores([$objectManager->get(\Magento\Store\Model\StoreManagerInterface::class)->getStore()->getId()])
    ->save();
