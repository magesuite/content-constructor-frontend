<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class ProductCarousel extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/product_carousel.phtml';

    /**
     * @var null
     */
    protected $products = null;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer
     */
    protected $productTileRenderer;

    /**
     * @var \MageSuite\ContentConstructor\Components\ProductCarousel\DataProvider
     */
    protected $dataProvider;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer $productTileRenderer,
        \MageSuite\ContentConstructor\Components\ProductCarousel\DataProvider $dataProvider,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->productTileRenderer = $productTileRenderer;
        $this->dataProvider = $dataProvider;
    }

    public function getProducts() {
        if($this->products === null) {
            $this->products = $this->dataProvider->getProducts($this->getData(), true);
        }

        return $this->products;
    }

    public function renderProductTile($product, $iterator) {
        return $this->productTileRenderer->render($product, $iterator);
    }
}