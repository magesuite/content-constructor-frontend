<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ProductGrid extends \Magento\Framework\DataObject implements ViewModel
{
    const DEFAULT_PRODUCTS_LIMIT = 24;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer
     */
    protected $productTileRenderer;

    /**
     * @var \MageSuite\ContentConstructor\Components\ProductCarousel\DataProvider
     */
    protected $dataProvider;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\ImageTeaser\Configuration
     */
    protected $imageTeaserConfiguration;

    /**
     * @var null
     */
    protected $products = null;

    /**
     * @var array
     */
    protected $configuration;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer $productTileRenderer,
        \MageSuite\ContentConstructor\Components\ProductCarousel\DataProvider $dataProvider,
        \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\ImageTeaser\Configuration $imageTeaserConfiguration,
        array $data = []
    ){
        parent::__construct($data);

        $this->productTileRenderer = $productTileRenderer;
        $this->dataProvider = $dataProvider;
        $this->imageTeaserConfiguration = $imageTeaserConfiguration;
    }

    public function getItems()
    {
        $data = $this->getData('items');

        if(empty($data)){
            return [];
        }

        $data = $this->imageTeaserConfiguration->parseImageTeaser($data);

        return $data;
    }

    public function getProducts()
    {
        if($this->products === null) {
            $configuration = $this->getData();
            $configuration['limit'] = (isset($configuration['limit']) and is_numeric($configuration['limit'])) ? (int)$configuration['limit'] : self::DEFAULT_PRODUCTS_LIMIT;

            $this->products = $this->dataProvider->getProducts($configuration, true);
        }

        return $this->products;
    }

    public function renderProductTile($product, $iterator)
    {
        return $this->productTileRenderer->render($product, $iterator);
    }

    public function useTeaser()
    {
        return (bool)$this->getData('useTeaser');
    }

    public function getColumnsConfiguration()
    {
        return $this->getVar('product_grid/columns_configuration');
    }

    public function getTeasersConfiguration()
    {
        $data = $this->getItems();

        if(empty($data)){
            return [];
        }

        return $this->imageTeaserConfiguration->mapImageTeaserConfig($data);
    }
}
