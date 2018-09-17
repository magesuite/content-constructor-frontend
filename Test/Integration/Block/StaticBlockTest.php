<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Block;

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

    /**
     * @var \MageSuite\ContentConstructor\View\Template|\PHPUnit_Framework_MockObject_MockObject
     */
    private $templateDouble;

    /**
     * @var \MageSuite\ContentConstructor\View\TemplateLocator|\PHPUnit_Framework_MockObject_MockObject
     */
    private $locatorStub;

    public function setUp()
    {
        $this->templateDouble = $this->getMockBuilder(\MageSuite\ContentConstructor\View\Template::class)->getMock();
        $this->locatorStub = $this->getMockBuilder(\MageSuite\ContentConstructor\View\TemplateLocator::class)->getMock();
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->block = new \MageSuite\ContentConstructorFrontend\Block\StaticBlock(
            $this->objectManager->get(\Magento\Framework\View\Element\BlockFactory::class),
            $this->templateDouble,
            $this->locatorStub
        );
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Cms/_files/block.php
     */
    public function testItRendersBlockContents() {
        $this->locatorStub
            ->method('locate')
            ->willReturn('template-name');

        $this->templateDouble->expects($this->once())->method('render')->with('template-name', [
            'identifier' => 'fixture_block',
            'content' => '<h1>Fixture Block Title</h1>
<a href="http://localhost/index.php/">store url</a>
<p>Config value: "http://localhost/".</p>
<p>Custom variable: "".</p>
'
        ])->willReturn('something');


        $renderedContent = $this->block->render(['identifier' => 'fixture_block']);

        $this->assertContains('something', $renderedContent);
    }
}