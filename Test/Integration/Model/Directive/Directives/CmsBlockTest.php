<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Model\Directive\Directives;

class CmsBlockTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Directive\Directives\CmsBlock
     */
    protected $directive;

    /**
     * @var \Magento\Cms\Api\GetBlockByIdentifierInterface
     */
    protected $getBlockByIdentifier;

    protected function setUp(): void
    {
        $objectManager = \Magento\TestFramework\ObjectManager::getInstance();
        $this->directive = $objectManager->get(\MageSuite\ContentConstructorFrontend\Model\Directive\Directives\CmsBlock::class);
        $this->getBlockByIdentifier = $objectManager->get(\Magento\Cms\Api\GetBlockByIdentifierInterface::class);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture Magento/Cms/_files/block.php
     */
    public function testItParserCmsBlockDirectives(): void
    {
        $blockId = 'fixture_block';
        $block = $this->getBlockByIdentifier->execute($blockId, \Magento\Store\Model\Store::DEFAULT_STORE_ID);
        $this->directive->setArguments(['id' => $blockId]);
        $expectedContent = '<h1>Fixture Block Title</h1>' . PHP_EOL
            . '<a href="http://localhost/index.php/">store url</a>' . PHP_EOL
            . '<p>Config value: "http://localhost/".</p>' . PHP_EOL
            . '<p>Custom variable: "".</p>' . PHP_EOL;
        $expectedIdentities = [
            'CMS_BLOCK_fixture_block',
            'CMS_BLOCK_fixture_block_1',
            'cms_b_' . $block->getId(),
            'cms_b_fixture_block'
        ];
        $this->assertEquals($expectedContent, $this->directive->getValue());
        $this->assertEquals($expectedIdentities, $this->directive->getIdentities());
    }
}
