<?php

namespace MageSuite\ContentConstructorFrontend\Block;

/**
 * Custom implementation extends native one and allows proper handling of block identities
 */
class StaticBlock extends \Magento\Cms\Block\Block
{
    /**
     * @var \Magento\Cms\Model\Block
     */
    protected $blockModel;

    protected function _toHtml()
    {
        $blockId = $this->getBlockId();
        $html = '';

        if (!$blockId) {
            return $html;
        }

        $storeId = $this->_storeManager->getStore()->getId();

        /** @var \Magento\Cms\Model\Block $block */
        $this->blockModel = $this->_blockFactory->create();
        $this->blockModel->setStoreId($storeId)
            ->load($blockId);

        if ($this->blockModel->isActive()) {
            $html = $this->_filterProvider->getBlockFilter()
                ->setStoreId($storeId)
                ->filter($this->blockModel->getContent());
        }

        return $html;
    }

    public function getIdentities()
    {
        $blockIdCacheTag = parent::getIdentities();

        if ($this->blockModel) {
            return array_merge(
                $blockIdCacheTag,
                $this->blockModel->getIdentities()
            );
        }

        return $blockIdCacheTag;
    }
}
