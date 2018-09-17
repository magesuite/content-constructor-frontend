<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Block;

class StaticBlockTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Block\StaticBlock
     */
    private $block;

    public function setUp()
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->block = $this->objectManager->get(\MageSuite\ContentConstructorFrontend\Block\StaticBlock::class);
    }

    public function testItImplementsComponentInterface() {
        $this->assertInstanceOf(\MageSuite\ContentConstructor\Component::class, $this->block);
    }
}