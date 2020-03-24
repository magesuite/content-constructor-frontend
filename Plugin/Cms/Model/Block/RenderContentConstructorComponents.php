<?php

namespace MageSuite\ContentConstructorFrontend\Plugin\Cms\Model\Block;

class RenderContentConstructorComponents
{
    /**
     * @var \Magento\Framework\View\Element\BlockFactory
     */
    protected $blockFactory;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(
        \Magento\Framework\View\Element\BlockFactory $blockFactory,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->blockFactory = $blockFactory;
        $this->logger = $logger;
    }

    public function aroundGetContent(\Magento\Cms\Model\Block $subject, callable $proceed)
    {
        $contentConstructorContent = $subject->getContentConstructorContent();

        if (empty($contentConstructorContent)) {
            return $proceed();
        }

        $components = json_decode($contentConstructorContent, true);

        if (empty($components)) {
            return $proceed();
        }

        $html = '';

        foreach ($components as $component) {
            try {
                $componentBlock = $this->blockFactory->createBlock(\MageSuite\ContentConstructorFrontend\Block\Component::class, [
                    'data' => $component
                ]);

                $html .= $componentBlock->toHtml();
            } catch (\Exception $exception) {
                $this->logger->warning($exception->getMessage());
            }
        }

        return $html;
    }
}
