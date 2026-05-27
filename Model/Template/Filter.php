<?php

namespace MageSuite\ContentConstructorFrontend\Model\Template;

class Filter extends \Magento\Widget\Model\Template\Filter
{
    protected array $collectedIdentities = [];

    public function filter($value)
    {
        $this->collectedIdentities = [];

        return parent::filter($value);
    }

    public function widgetDirective($construction): string
    {
        $blocksBefore = array_keys($this->_layout->getAllBlocks());
        $html = parent::widgetDirective($construction);
        $newBlocks = array_diff(array_keys($this->_layout->getAllBlocks()), $blocksBefore);

        foreach ($newBlocks as $blockName) {
            $block = $this->_layout->getBlock($blockName);

            if ($block instanceof \Magento\Framework\DataObject\IdentityInterface) {
                $this->collectedIdentities = array_merge(
                    $this->collectedIdentities,
                    $block->getIdentities()
                );
            }
        }

        return $html;
    }

    public function getCollectedIdentities(): array
    {
        return $this->collectedIdentities;
    }
}
