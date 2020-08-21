<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Plugin\Cms\Model\Block;

class RenderContentConstructorComponentsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var \Magento\Framework\View\Layout
     */
    protected $layout;

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
     * @magentoDataFixture loadBlock
     * @magentoAppArea frontend
     */
    public function testItRendersStaticBlockWithRenderedComponents()
    {
        /** @var \Magento\Cms\Block\Block $block */
        $block = $this->layout->createBlock(
            \Magento\Cms\Block\Block::class,
            '',
            ['data' => ['block_id' => 'block_with_content_constructor']]
        );

        $this->assertRegExp('/<h2.*?>Test<\/h2>/', $block->toHtml());
    }

    public static function loadBlock()
    {
        include __DIR__ . '/../../../../_files/block.php';
    }
}
