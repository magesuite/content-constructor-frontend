<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class Paragraph extends \Magento\Framework\DataObject
{
    /**
     * @var array
     */
    protected $identities = [];

    /**
     * @var \Magento\Framework\View\Element\BlockFactory
     */
    protected $blockFactory;

    public function __construct(
        \Magento\Framework\View\Element\BlockFactory $blockFactory,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->blockFactory = $blockFactory;
    }

    public function getContent() {
        $configuration = $this->getData();

        if (isset($configuration['migrated'])) {
            return $configuration['content'];
        }

        $id = isset($configuration['blockId']) ? $configuration['blockId'] : $configuration['identifier'];

        $block = $this->blockFactory->createBlock(
            \Magento\Cms\Block\Block::class,
            [
                'data' => [
                    'block_id' => $id
                ]
            ]
        );

        return $block->toHtml();
    }

    public function setIdentities($identities)
    {
        $this->identities = $identities;
    }

    public function getIdentities()
    {
        return $this->identities;
    }
}
