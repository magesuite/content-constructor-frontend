<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ProductCarousel extends \Magento\Framework\DataObject
{
    /**
     * @var null
     */
    protected $products = null;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer
     */
    protected $productTileRenderer;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider
     */
    protected $dataProvider;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer $productTileRenderer,
        \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider $dataProvider,
        array $data = []
    ) {
        parent::__construct($data);

        $this->productTileRenderer = $productTileRenderer;
        $this->dataProvider = $dataProvider;
    }

    public function getProducts()
    {
        if ($this->products === null) {
            $this->products = $this->dataProvider->getProducts($this->getData(), true);
        }

        return $this->products;
    }

    public function renderProductTile($product, $iterator, $viewMode = 'grid')
    {
        return $this->productTileRenderer->render($product, $iterator, $viewMode);
    }
}
