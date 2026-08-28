<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin;

class Card extends \Magento\Framework\DataObject
{
    public function getName(): string
    {
        return (string)$this->_getData('name');
    }

    public function getAriaLabel(): string
    {
        return (string)$this->_getData('aria_label');
    }

    public function getImageUrl(): string
    {
        return (string)$this->_getData('image_url');
    }

    public function getPriceHtml(): string
    {
        return (string)$this->_getData('price_html');
    }

    public function getPriceCssClasses(): string
    {
        return (string)$this->_getData('price_css_classes');
    }

    public function getSalePercentage(): ?int
    {
        $salePercentage = $this->_getData('sale_percentage');

        return $salePercentage === null ? null : (int)$salePercentage;
    }

    public function getRating(): ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin\Rating
    {
        return $this->_getData('rating');
    }
}
