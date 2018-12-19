<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Block;

class ComponentTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Block\Component
    */
    protected $block;

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    public function setUp() {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->block = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Block\Component::class);
    }

    public function testItImplementsBlockInterface() {
        $this->assertInstanceOf(\Magento\Framework\View\Element\BlockInterface::class, $this->block);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testItThrowsExceptionWhenNoTypeIsPassed() {
        $this->block->toHtml();
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoAppArea frontend
     */
    public function testItShowsHeadlineComponent() {
        $this->block->setData([
            'type' => 'headline',
            'data' => [
                'tag' => 'h1',
                'title' => 'Main',
                'subtitle' => 'Sub'
            ]
        ]);

        $htmlOutput = $this->block->toHtml();

        $this->assertContains('>Main<', $htmlOutput);
        $this->assertContains('>Sub<', $htmlOutput);
    }
}