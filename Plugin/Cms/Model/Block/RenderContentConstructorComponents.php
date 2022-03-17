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

                $this->addIdentitiesToSubjectModel($subject, $componentBlock->getIdentities());
            } catch (\Exception $exception) {
                $this->logger->warning($exception->getMessage());
            }
        }

        return $html;
    }

    protected function addIdentitiesToSubjectModel($subject, $identities = []) {
        if(is_string($identities) && !empty($identities)) {
            $identities = [$identities];
        }

        $existingIdentities = $subject->getData('content_constructor_components_identities') ?? [];

        $newIdentities = array_merge($existingIdentities, $identities);

        $subject->setData('content_constructor_components_identities', $newIdentities);
    }

    public function aroundGetIdentities(\Magento\Cms\Model\Block $subject, callable $proceed)
    {
        $originalIdentities = $proceed();

        $contentConstructorComponentsIdentities = $subject->getData('content_constructor_components_identities');

        if(empty($contentConstructorComponentsIdentities) || !is_array($contentConstructorComponentsIdentities)) {
            return $originalIdentities;
        }

        return array_merge($originalIdentities, $contentConstructorComponentsIdentities);
    }
}
