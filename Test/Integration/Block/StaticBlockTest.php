<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Block;

class StaticBlockTest extends \PHPUnit\Framework\TestCase
{
    protected ?\Magento\TestFramework\ObjectManager $objectManager;
    protected ?\MageSuite\ContentConstructorFrontend\Block\Component\StaticBlock $block;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Cms/_files/block.php
     * @magentoAppIsolation enabled
     * @magentoAppArea frontend
     */
    public function testItRendersBlockContents() {
        $this->block = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Block\Component\StaticBlock::class, [
            'data' => [
                'identifier' => 'fixture_block'
            ]
        ]);

        $renderedContent = $this->block->toHtml();

        $assertContains = method_exists($this, 'assertStringContainsString') ? 'assertStringContainsString' : 'assertContains';

        $this->$assertContains('<h1>Fixture Block Title</h1>
<a href="http://localhost/index.php/">store url</a>
<p>Config value: "http://localhost/".</p>
<p>Custom variable: "".</p>', $renderedContent);
    }
}
