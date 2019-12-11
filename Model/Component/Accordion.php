<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class Accordion extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
    protected $filterProvider;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\AccordionGroupClassResolver
     */
    protected $accordionGroupClassResolver;

    public function __construct(
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \Psr\Log\LoggerInterface $logger,
        \MageSuite\ContentConstructorFrontend\Service\AccordionGroupClassResolver $accordionGroupClassResolver,
        array $data = []
    ){
        parent::__construct($data);
        $this->filterProvider = $filterProvider;
        $this->logger = $logger;
        $this->accordionGroupClassResolver = $accordionGroupClassResolver;
    }

    public function renderWysiwygContent($content)
    {
        try {
            return $this->filterProvider->getPageFilter()->filter($content);
        } catch(\Exception $e) {
            $this->logger->warning($e->getMessage());
            return '';
        }
    }

    public function getAccordionComponentOptions($accordionGlobalOptions)
    {
        $baseOptions = [
            "openedState" => "cs-accordion__item--active",
            "multipleCollapsible" => $this->getMultipleCollapsible(),
            "active" => $this->getExpandFirst() ? "0" : ""
        ];

        return json_encode(array_merge($baseOptions, $accordionGlobalOptions));
    }

    public function getGroupId($headline)
    {
        return $this->accordionGroupClassResolver->resolveGroupClass($headline);
    }
}
