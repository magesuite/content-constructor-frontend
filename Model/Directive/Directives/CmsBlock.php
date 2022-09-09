<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Directive\Directives;

class CmsBlock extends \MageSuite\DynamicDirectives\Model\Directive
{
    protected array $blockCache = [];

    protected \Magento\Framework\View\Element\BlockFactory $blockFactory;

    public function __construct(\Magento\Framework\View\Element\BlockFactory $blockFactory)
    {
        $this->blockFactory = $blockFactory;
    }

    public function getValue()
    {
        $block = $this->getBlock();

        if (!$block instanceof \Magento\Cms\Block\BlockByIdentifier) {
            return '';
        }

        return $block->toHtml();
    }

    public function getIdentities()
    {
        $block = $this->getBlock();

        if (!$block instanceof \Magento\Cms\Block\BlockByIdentifier) {
            return [];
        }

        return $block->getIdentities();
    }

    protected function getBlock(): ?\Magento\Cms\Block\BlockByIdentifier
    {
        $arguments = $this->getArguments();
        $identifier = $arguments['id'] ?? null;

        if (!$identifier) {
            return null;
        }

        if (!isset($this->blockCache[$identifier])) {
            /** @var \Magento\Cms\Block\BlockByIdentifier $block */
            $this->blockCache[$identifier] = $this->blockFactory
                ->createBlock(\Magento\Cms\Block\BlockByIdentifier::class)
                ->setIdentifier($identifier);
        }

        return $this->blockCache[$identifier];
    }
}
