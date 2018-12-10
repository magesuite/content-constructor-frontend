<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class Paragraph  extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/paragraph.phtml';

    protected $identities = [];

    /**
     * @var \Magento\Framework\View\Element\BlockFactory
     */
    protected $blockFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\View\Element\BlockFactory $blockFactory,
        array $data = []
    )
    {
        \Magento\Framework\View\Element\Template::__construct($context, $data);

        $this->blockFactory = $blockFactory;
    }

    public function getContent() {
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