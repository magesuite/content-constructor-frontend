<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class ProductTileRenderer implements \MageSuite\ContentConstructor\Service\ProductTileRenderer
{
    /**
     * @var \Magento\Framework\View\Layout
     */
    protected $layout;

    public function __construct(\Magento\Framework\View\Layout $layout)
    {
        $this->layout = $layout;
    }

    public function render(\Magento\Catalog\Api\Data\ProductInterface $product, $iterator)
    {
        return $this->layout
            ->createBlock(\MageSuite\ProductTile\Block\Tile::class)
            ->setIterator($iterator)
            ->setSection('content-constructor')
            ->render($product);
    }
}
