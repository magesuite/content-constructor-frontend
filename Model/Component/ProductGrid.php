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
     * @var \MageSuite\ContentConstructor\Service\MediaResolver
     */
    protected $mediaResolver;

    /**
     * @var \MageSuite\ContentConstructor\Service\UrlResolver
     */
    protected $urlResolver;

    /**
     * @var array
     */
    protected $configuration;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\ProductTileRenderer $productTileRenderer,
        \MageSuite\ContentConstructor\Components\ProductCarousel\DataProvider $dataProvider,
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        \MageSuite\ContentConstructor\Service\UrlResolver $urlResolver,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->productTileRenderer = $productTileRenderer;
        $this->dataProvider = $dataProvider;
        $this->mediaResolver = $mediaResolver;
        $this->urlResolver = $urlResolver;
    }

    public function getHero() {
        $hero = $this->getData()['hero'];

        if(isset($hero['href']) and !empty($hero['href'])) {
            $hero['href'] = $this->urlResolver->resolve($hero['href']);
        }

        if(!empty($hero['decoded_image'])) {
            $hero['image'] = [
                'src' => $this->mediaResolver->resolve($hero['decoded_image']),
                'srcSet' => $this->mediaResolver->resolveSrcSet($hero['decoded_image'])
            ];
        }

        return $hero;
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
}