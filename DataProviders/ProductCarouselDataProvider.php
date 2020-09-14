<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class ProductCarouselDataProvider implements \MageSuite\ContentConstructor\Components\ProductCarousel\DataProvider
{
    /**
     * Fields from old sorting solution, preserved only to achieve backwards compatibility for existing components
     * @var array
     */
    protected $oldFieldsMapping = [
        'creation_date' => 'created_at',
        'bestsellers_amount' => 'bestseller_score_by_amount'
    ];

    protected $sortingTypeMapping = [
        'skus' => 'sku',
        'product_ids' => 'entity_id'
    ];

    protected $stockData = [];

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    protected $productCollectionFactory;

    /**
     * @var \Magento\Catalog\Helper\Image
     */
    protected $imageHelper;

    /**
     * @var \Magento\Review\Model\Review
     */
    protected $review;

    /**
     * @var \Magento\Wishlist\Helper\Data
     */
    protected $wishlistHelper;

    /**
     * @var \Magento\Swatches\Block\Product\Renderer\Listing\Configurable
     */
    protected $swatchesProduct;

    /**
     * @var \Magento\Catalog\Block\Product\View
     */
    protected $productView;

    /**
     * @var AdditionalProductDataProvider
     */
    protected $additionalProductDataProvider;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeInterface;

    /**
     * @var \MageSuite\Frontend\Helper\Product\StockData
     */
    protected $stockDataHelper;

    /**
     * @var \Magento\Catalog\Model\Config
     */
    protected $catalogConfig;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;
    /**
     * @var \Magento\Framework\App\State
     */
    protected $state;

    /**
     * @var \Magento\Catalog\Block\Product\ListProduct
     */
    private $listProductBlock;

    /**
     * @var \MageSuite\Frontend\Helper\Product
     */
    private $productHelper;

    /**
     * @var \MageSuite\Discount\Helper\Discount
     */
    protected $discountHelper;

    /**
     * @var \MageSuite\ProductPositiveIndicators\Helper\Product
     */
    private $productIndicatorHelper;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Sort\Pool
     */
    private $sortersPool;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Filter\Pool
     */
    private $filtersPool;

    /**
     * @var \MageSuite\DailyDeal\Helper\OfferData
     */
    private $dailyDealHelper;
    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @var \Magento\CatalogInventory\Api\StockStateInterface
     */
    protected $stockInterface;

    public function __construct(
        \Smile\ElasticsuiteCatalog\Model\ResourceModel\Product\Fulltext\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Helper\Image $imageHelper,
        \Magento\Review\Model\Review $review,
        \Magento\Wishlist\Helper\Data $wishlistHelper,
        \Magento\Swatches\Block\Product\Renderer\Listing\Configurable $swatchesProduct,
        \Magento\Catalog\Block\Product\View $productView,
        AdditionalProductDataProvider $additionalProductDataProvider,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface,
        \MageSuite\Frontend\Helper\Product\StockData $stockDataHelper,
        \Magento\Catalog\Model\Config $catalogConfig,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Block\Product\ListProduct $listProductBlock,
        \MageSuite\Frontend\Helper\Product $productHelper,
        \MageSuite\ProductPositiveIndicators\Helper\Product $productIndicatorHelper,
        \MageSuite\ContentConstructorFrontend\Model\Sort\Pool $sortersPool,
        \MageSuite\ContentConstructorFrontend\Model\Filter\Pool $filtersPool,
        \MageSuite\DailyDeal\Helper\OfferData $dailyDealHelper,
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \Magento\CatalogInventory\Api\StockStateInterface $stockInterface,
        \Magento\Framework\App\State $state,
        \MageSuite\Discount\Helper\Discount $discountHelper
    )
    {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->imageHelper = $imageHelper;
        $this->review = $review;
        $this->wishlistHelper = $wishlistHelper;
        $this->swatchesProduct = $swatchesProduct;
        $this->productView = $productView;
        $this->additionalProductDataProvider = $additionalProductDataProvider;
        $this->scopeInterface = $scopeInterface;
        $this->stockDataHelper = $stockDataHelper;
        $this->catalogConfig = $catalogConfig;
        $this->storeManager = $storeManager;
        $this->listProductBlock = $listProductBlock;
        $this->productHelper = $productHelper;
        $this->productIndicatorHelper = $productIndicatorHelper;
        $this->sortersPool = $sortersPool;
        $this->filtersPool = $filtersPool;
        $this->dailyDealHelper = $dailyDealHelper;
        $this->categoryRepository = $categoryRepository;
        $this->stockInterface = $stockInterface;
        $this->state = $state;
        $this->discountHelper = $discountHelper;
    }

    /**
     * Collections are used instead of ProductRepository because the latter
     * does not support random ordering in 2.1 version
     * @param array $criteria
     * @return array
     */
    public function getProducts(array $criteria, $returnProductsEntities = false)
    {
        $collection = $this->buildCollectionSearchCriteria($criteria);
        $collection->addMediaGalleryData();

        $products = $collection->getItems();

        $this->stockData = $this->stockDataHelper->getStockData($products);

        if($returnProductsEntities) {
            $products = $this->sortResults($products, $criteria);

            return $products;
        }

        $result = [];

        if (empty($products)) {
            return $result;
        }

        foreach ($products as $product) {
            $productData = $this->mapProductToArray($product);

            if($collection->hasFlag('virtual_category_applied')) {
                $productData['identities'] = array_merge($productData['identities'], ['virtual_category']);
            }

            $result[] = $productData;
        }

        $result = $this->sortResults($result, $criteria);

        return $result;
    }


    protected function mapProductToArray(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        $productData = [
            'id' => $product->getId(),
            'entity_id' => $product->getId(),
            'sku' => $product->getSku(),
            'name' => $product->getName(),
            'url' => $product->getProductUrl(),
            'price' => $this->getProductPriceHtml($product),
            'image' => $this->getProductImageUrl($product),
            'stock' => $this->isProductInStock($product),
            'rating' => $this->getProductRatingSummary($product),
            'swatches' => $this->getSwatchesHtml($product),
            'wishlist' => $this->getProductWishlistDataPost($product),
            'qty' => $this->getProductQty($product->getId()),
            'addToCartButtonHtml' => $this->getAddToCartButtonHtml($product),
            'getIsNewProduct' => $this->getIsNewProduct($product),
            'getSalePercentage' => $this->getSalePercentage($product),
            'popularIconFlag' => $this->getPopularIconFlag($product),
            'isFreeShipped' => $this->isFreeShipped($product),
            'identities' => $product->getIdentities(),
            'shortDescription' => $product->getShortDescription(),
            'dailyDealOffer' => $this->dailyDealHelper->prepareOfferData($product)
        ];

        return array_merge($productData, $this->additionalProductDataProvider->getData($product));
    }

    protected function buildCollectionSearchCriteria($criteria)
    {
        $collection = $this->initializeCollection();

        $showOutOfStock = $this->scopeInterface->getValue(
            'cataloginventory/options/show_out_of_stock',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        if (isset($criteria['filter_attributes'])) {
            foreach ($criteria['filter_attributes'] as $attribute => $conditions) {
                $collection->addAttributeToFilter($attribute, [$conditions['operator'] => $conditions['value']]);
            }
        }

        // when skus are defined other criterias are not included
        if (isset($criteria['skus']) and !empty($criteria['skus'])) {
            $skus = $this->prepareSortingArray($criteria['skus']);

            $collection->addFieldToFilter('sku', ['in' => $skus]);

            return $collection;
        }

        if (!$showOutOfStock) {
            $collection->addIsInStockFilter();
        }

        if (isset($criteria['category_id'])) {
            $collection = $this->applyCategoryFilter($collection, $criteria['category_id']);
        }

        if (isset($criteria['product_ids'])) {
            $collection->addFieldToFilter('entity_id', array('in' => $criteria['product_ids']));
        }

        // Following is for backwards compatibility with old newest_products which was placed in sorting options
        if (isset($criteria['order_by']) AND $criteria['order_by'] == 'newest_products') {
            $criteria['filter'] = 'new_products';
            unset($criteria['order_by']);
        }

        if (isset($criteria['filter'])) {
            $collection = $this->applyFiltering($collection, $criteria['filter']);
        }

        if (isset($criteria['order_by']) and isset($criteria['order_type'])) {
            if (isset($this->oldFieldsMapping[$criteria['order_by']])) {
                $criteria['order_by'] = $this->oldFieldsMapping[$criteria['order_by']];
            }

            $collection = $this->applySorting($collection, $criteria['order_by'], $criteria['order_type']);
        }

        if (isset($criteria['limit'])) {
            $collection->setPageSize($criteria['limit']);
        }


        return $collection;
    }

    /**
     * @return \Smile\ElasticsuiteCatalog\Model\ResourceModel\Product\Fulltext\Collection
     */
    protected function initializeCollection()
    {
        $collection = $this->productCollectionFactory->create();

        $collection->addAttributeToSelect($this->catalogConfig->getProductAttributes())
            ->setStore($this->storeManager->getStore())
            ->addFinalPrice()
            ->addTaxPercents()
            ->addStoreFilter()
            ->addUrlRewrite();

        $collection->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH);

        return $collection;
    }

    /**
     * @param \Magento\Catalog\Api\Data\ProductInterface $product
     * @return string
     */
    protected function getProductPriceHtml(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        return $this->productView->getProductPriceHtml(
            $product,
            'final_price',
            \Magento\Framework\Pricing\Render::ZONE_ITEM_LIST,
            ['include_container' => true]
        );
    }

    protected function getProductImageUrl($product)
    {
        $productImageUrl = $this->imageHelper
            ->init($product, 'category_page_grid')
            ->constrainOnly(FALSE)->keepAspectRatio(TRUE)->keepFrame(FALSE)->resize(400)->getUrl();

        return $productImageUrl;
    }

    protected function getProductRatingSummary($product)
    {
        $this->review->getEntitySummary($product, $this->storeManager->getStore()->getId());

        $ratingSummary = $product->getRatingSummary();
        if (!$ratingSummary) {
            return false;
        }

        $reviewsCount = $product->getReviewsCount();
        // Since 2.3.3 rating summary is being returned directly, not as an object.
        if (is_object($ratingSummary)) {
            $reviewsCount = $ratingSummary->getReviewsCount();
            $ratingSummary = $ratingSummary->getRatingSummary();
        }

        if (!$reviewsCount) {
            return false;
        }

        $activeStars = $ratingSummary ? (round($ratingSummary / 10) / 2) : 0;

        $reviewData = [
            'data' => [
                'maxStars' => 5,
                'activeStars' => $activeStars,
                'text' => '(' . $reviewsCount . ')'

            ]
        ];

        return $reviewData;
    }

    protected function isProductInStock($product)
    {
        return $this->stockData[$product->getId()]['salable'] ?? $product->getIsSalable();
    }

    protected function getProductWishlistDataPost($product)
    {
        return $this->wishlistHelper->getAddParams($product);
    }

    protected function getProductQty($productId)
    {
        return $this->stockData[$productId]['qty'] ?? 0;
    }

    protected function getSwatchesHtml($product)
    {
        if ($product->getTypeId() == \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE) {

            $this->swatchesProduct->setProduct($product);
            $this->swatchesProduct->setTemplate('Magento_Swatches::product/listing/renderer.phtml');
            return $this->swatchesProduct->toHtml();
        }

        return false;
    }

    /**
     * Some criterias (sku) requires that products should be sorted
     * @param $products
     * @param $criteria
     */
    protected function sortResults($products, $criteria)
    {
        $sortingType = null;

        if (isset($criteria['skus']) && !empty($criteria['skus'])) {
            $sortingType = 'skus';
        }

        if ($this->state->getAreaCode() == \Magento\Framework\App\Area::AREA_FRONTEND && isset($criteria['product_ids']) && !empty($criteria['product_ids'])) {
            $sortingType = 'product_ids';
        }

        if(!$sortingType){
            return $products;
        }

        $sortingData = $this->prepareSortingArray($criteria[$sortingType]);

        $sortingField = $this->sortingTypeMapping[$sortingType];
        $sortedProducts = [];

        foreach ($products as $product) {
            $index = array_search($product[$sortingField], $sortingData);

            if($index === false) {
                continue;
            }

            $sortedProducts[$index] = $product;
        }

        ksort($sortedProducts);

        return $sortedProducts;
    }

    public function getAddToCartButtonHtml($product)
    {
        if (!$this->isProductInStock($product)) {
            return '';
        }

        $postParams = $this->listProductBlock->getAddToCartPostParams($product);

        $productType = $product->getTypeId();

        if ($productType !== \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE) {
            $addToCartText = __('Add to cart');
        } else {
            $addToCartText = __('Configure');
        }

        return sprintf(
            '<form data-role="tocart-form" action="%s" method="post">
                <input type="hidden" name="product" value="%s">
                <input type="hidden" name="%s" value="%s">
                %s
                <button disabled type="submit" title="%s"
                class="tocart | cs-button cs-button--type_grid-tocart">
                    <span class="cs-button__span">%s</span>
                </button>
            </form>',
            $postParams['action'],
            $postParams['data']['product'],
            \Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED,
            $postParams['data'][\Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED],
            $this->listProductBlock->getBlockHtml('formkey'),
            $addToCartText,
            $addToCartText
        );
    }

    public function getIsNewProduct($product)
    {
        return $this->productHelper->isNew($product);
    }

    public function getSalePercentage($product)
    {
        return $this->discountHelper->getSalePercentage($product);
    }

    public function getPopularIconFlag($product)
    {
        return $this->productIndicatorHelper->getPopularIconFlag($product);
    }

    public function isFreeShipped($product)
    {
        return $this->productIndicatorHelper->showFreeShippingInProductTiles() && $this->productIndicatorHelper->isFreeShipped($product);
    }

    protected function applyFiltering($collection, $filter)
    {
        $filter = $this->filtersPool->getFilter($filter);

        if ($filter == null) {
            return $collection;
        }

        return $filter->filter($collection);
    }

    protected function applySorting($collection, $orderBy, $orderType)
    {
        $sorter = $this->sortersPool->getSorter($orderBy);

        if ($sorter == null) {
            return $collection;
        }

        return $sorter->sort($collection, $orderBy, $orderType);
    }

    /**
     * @param $criteria
     * @param $collection
     */
    protected function applyCategoryFilter($collection, $categoryId)
    {
        try {
            $category = $this->categoryRepository->get($categoryId);

            if ($category->getIsVirtualCategory() && $category->getVirtualRule()) {
                return $this->applyVirtualCategoryFilters($collection, $category);
            }

            return $collection->addFieldToFilter('category_ids', $categoryId);
        } catch (\Magento\Framework\Exception\NoSuchEntityException $exception) {
            return $collection;
        }
    }

    /**
     * @param $collection
     * @param $category
     */
    protected function applyVirtualCategoryFilters($collection, $category)
    {
        $queryFilter = $category->getVirtualRule()->getCategorySearchQuery($category);
        $collection->addQueryFilter($queryFilter);

        $collection->setFlag('virtual_category_applied', true);

        return $collection;
    }

    protected function prepareSortingArray($skus)
    {
        if(!is_array($skus)){
            $skus = explode(',', $skus);
        }

        return array_map('trim', $skus);
    }
}
