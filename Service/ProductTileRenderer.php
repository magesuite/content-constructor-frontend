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

    public function render(\Magento\Catalog\Api\Data\ProductInterface $product, $iterator, $viewMode = 'grid')
    {
        return $this->layout
            ->createBlock(\MageSuite\ProductTile\Block\Tile::class)
            ->setIterator($iterator)
            ->setViewMode($viewMode)
            ->setSection('content-constructor')
            ->render($product);
    }
}