<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Plugin\Cms\Model\Block;

class RenderContentConstructorComponentsTest extends \PHPUnit\Framework\TestCase
{
    protected \Magento\Framework\ObjectManagerInterface $objectManager;

    protected \Magento\Framework\View\Layout $layout;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

        $this->layout = $this->objectManager->get(\Magento\Framework\View\Layout::class);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture MageSuite_ContentConstructorFrontend::Test/Integration/_files/block.php
     * @magentoAppArea frontend
     */
    public function testItRendersStaticBlockWithRenderedComponents(): void
    {
        /** @var \Magento\Cms\Block\Block $block */
        $block = $this->layout->createBlock(
            \Magento\Cms\Block\Block::class,
            '',
            ['data' => ['block_id' => 'block_with_content_constructor']]
        );

        $assertRegExp = method_exists($this, 'assertMatchesRegularExpression') ? 'assertMatchesRegularExpression' : 'assertRegExp';

        $this->$assertRegExp('/<h2.*?>Test<\/h2>/', $block->toHtml());
    }
}
