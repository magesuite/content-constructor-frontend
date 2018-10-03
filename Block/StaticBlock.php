<?php

namespace MageSuite\ContentConstructorFrontend\Block;

class StaticBlock implements \MageSuite\ContentConstructor\Component
{
    private $identities = [];

    /**
     * @var \Magento\Framework\View\Element\BlockFactory
     */
    private $blockFactory;

    /**
     * @var \MageSuite\ContentConstructor\View\Template
     */
    protected $template;

    /**
     * @var \MageSuite\ContentConstructor\View\TemplateLocator
     */
    protected $locator;

    public function __construct(
        \Magento\Framework\View\Element\BlockFactory $blockFactory,
        \MageSuite\ContentConstructor\View\Template $twig,
        \MageSuite\ContentConstructor\View\TemplateLocator $locator
    ) {
        $this->blockFactory = $blockFactory;
        $this->template = $twig;
        $this->locator = $locator;
    }

    /**
     * Renders component with specified configuration
     * @param $configuration
     * @return mixed
     */
    public function render(array $configuration)
    {
        $id = isset($configuration['blockId']) ? $configuration['blockId'] : $configuration['identifier'];

        $block = $this->blockFactory->createBlock(
            \Magento\Cms\Block\Block::class,
            [
                'data' => [
                    'block_id' => $id
                ]
            ]
        );

        $configuration['content'] = $block->toHtml();

        return $this->template->render(
            $this->locator->locate($this->getTemplatePath($configuration)),
            $configuration
        );
    }

    public function getTemplatePath($configuration) {
        if(isset($configuration['template'])) {
            return $configuration['template'];
        }

        return $this->getDefaultTemplatePath();
    }

    protected function getDefaultTemplatePath()
    {
        return 'static-cms-block/static-cms-block.twig';
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