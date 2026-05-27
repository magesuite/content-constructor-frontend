<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class MagentoWidget extends \Magento\Framework\DataObject implements ViewModel
{
    protected array $identities = [];

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Model\Template\Filter $widgetFilter,
        array $data = []
    ) {
        parent::__construct($data);
    }

    public function getContent(): string
    {
        $widget = $this->getData('widget');

        if (!$widget) {
            return '';
        }

        $content = $this->widgetFilter->filter($widget);
        $this->identities = $this->widgetFilter->getCollectedIdentities();

        return $content;
    }

    public function getIdentities(): array
    {
        return $this->identities;
    }
}
