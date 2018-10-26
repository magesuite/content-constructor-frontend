<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ProductGrid extends \Magento\Framework\DataObject
{
    const DEFAULT_PRODUCTS_LIMIT = 24;
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

    /**
     * @var array
     */
    protected $configuration;
    /**
     * @var ProductGrid\HeroFactory
     */
    protected $heroFactory;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer $productTileRenderer,
        \MageSuite\ContentConstructor\Components\ProductCarousel\DataProvider $dataProvider,
        \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\HeroFactory $heroFactory,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->productTileRenderer = $productTileRenderer;
        $this->dataProvider = $dataProvider;
        $this->heroFactory = $heroFactory;
    }

    /**
     * @return \MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\Hero
     */
    public function getHero() {
        return $this->heroFactory->create(['data' => $this->getData()['hero']]);
    }

    public function hasHero() {
        return $this->getHero()->isEnabled();

    }

    public function getProducts() {
        if($this->products === null) {
            $configuration = $this->getData();
            $configuration['limit'] = (isset($configuration['limit']) and is_numeric($configuration['limit'])) ? (int)$configuration['limit'] : self::DEFAULT_PRODUCTS_LIMIT;

            $this->products = $this->dataProvider->getProducts($configuration, true);
        }

        return $this->products;
    }

    public function renderProductTile($product, $iterator) {
        return $this->productTileRenderer->render($product, $iterator);
    }

    public function getColumnsConfiguration() {
        return $this->getVar('product_grid/columns_configuration');
    }

    public function getTeasersConfiguration() {
        $teasersConfiguration = $this->getVar('product_grid/teasers_configuration');
        $teasersConfiguration['gridPosition']['x'] = $this->getHero()->getPosition();

        return $teasersConfiguration;
    }
}