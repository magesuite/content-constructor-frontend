<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Block;

class ParagraphTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Block\Component\StaticBlock
     */
    protected $block;

    public function setUp()
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Cms/_files/block.php
     * @magentoAppIsolation enabled
     * @magentoAppArea frontend
     */
    public function testItRendersBlockContents()
    {
        $this->block = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Block\Component\Paragraph::class,
            [
                'data' => [
                    'identifier' => 'fixture_block'
                ]
            ]
        );

        $renderedContent = $this->block->toHtml();

        $this->assertContains('<h1>Fixture Block Title</h1>
<a href="http://localhost/index.php/">store url</a>
<p>Config value: "http://localhost/".</p>
<p>Custom variable: "".</p>', $renderedContent);
    }
}