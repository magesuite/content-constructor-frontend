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

    /**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
    protected $filterProvider;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(
        \Magento\Framework\View\Element\BlockFactory $blockFactory,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \Psr\Log\LoggerInterface $logger,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->blockFactory = $blockFactory;
        $this->filterProvider = $filterProvider;
        $this->logger = $logger;
    }

    public function getContent() {
        $configuration = $this->getData();

        if (isset($configuration['migrated'])) {
           return $this->renderContentWithDirectives($configuration['content']);
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

    protected function renderContentWithDirectives($content) {
        try {
            return $this->filterProvider->getPageFilter()->filter($content);
        }
        catch(\Exception $e) {
            $this->logger->warning($e->getMessage());
            return '';
        }
    }
}
