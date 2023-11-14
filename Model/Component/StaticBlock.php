<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class StaticBlock extends \Magento\Framework\DataObject
{
    private $identities = [];

    /**
     * @var \Magento\Framework\View\Element\BlockFactory
     */
    protected $blockFactory;

    public function __construct(
        \Magento\Framework\View\Element\BlockFactory $blockFactory,
        $data = []
    ) {
        parent::__construct($data);
        $this->blockFactory = $blockFactory;
    }

    /**
     * Renders component with specified configuration
     * @param $configuration
     * @return mixed
     */
    public function getContent()
    {
        $configuration = $this->getData();
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
