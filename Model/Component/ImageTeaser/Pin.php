<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser;

class Pin extends \Magento\Framework\DataObject
{
    public function getCssClasses(): string
    {
        return (string)$this->_getData('css_classes');
    }

    public function getStyle(): string
    {
        return (string)$this->_getData('style');
    }

    public function getHref(): string
    {
        return (string)$this->_getData('href');
    }

    public function getTarget(): string
    {
        return (string)$this->_getData('target');
    }

    public function getAriaLabel(): string
    {
        return (string)$this->_getData('aria_label');
    }

    public function getTriggerAttributes(): array
    {
        return (array)$this->_getData('trigger_attributes');
    }

    public function getCardAttributes(): array
    {
        return (array)$this->_getData('card_attributes');
    }

    public function getCard(): ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin\Card
    {
        return $this->_getData('card');
    }
}
