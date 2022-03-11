<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class StaticBlock extends \Magento\Framework\DataObject
{
    protected $identities = [];

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
            \MageSuite\ContentConstructorFrontend\Block\StaticBlock::class,
            [
                'data' => [
                    'block_id' => $id
                ]
            ]
        );

        $content = $block->toHtml();

        $this->setIdentities($block->getIdentities());

        return $content;
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
