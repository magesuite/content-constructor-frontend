<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class ProductCarouselDataProvider
{
    public const string COLLECTION_TYPE_ELASTICSEARCH = \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\CollectionInitializer::COLLECTION_TYPE_ELASTICSEARCH;
    public const string COLLECTION_TYPE_DATABASE = \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\CollectionInitializer::COLLECTION_TYPE_DATABASE;

    protected const string LEGACY_NEWEST_PRODUCTS_ORDER = 'newest_products';
    protected const string NEW_PRODUCTS_FILTER = 'new_products';
    protected const string VIRTUAL_CATEGORY_IDENTITY = 'virtual_category';
    protected const string ELASTICSEARCH_IDENTITIES_KEY = 'product_identities_from_elasticsearch';

    protected array $oldFieldsMapping = [
        'creation_date' => 'created_at',
        'bestsellers_amount' => 'bestseller_score_by_amount',
    ];

    protected array $sortingTypeMapping = [
        'skus' => 'sku',
        'product_ids' => 'entity_id',
    ];

    protected array $stockData = [];

    protected array $productData = [];

    protected bool $skipCollectionFilters = false;

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\CollectionInitializer $collectionInitializer,
        protected \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\CollectionFilter $collectionFilter,
        protected \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\ProductTileRenderer $productTileRenderer,
        protected \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\ProductTileData $productTileData,
        protected \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\ProductIndicators $productIndicators,
        protected \MageSuite\ContentConstructorFrontend\DataProviders\AdditionalProductDataProvider $additionalProductDataProvider,
        protected \MageSuite\Frontend\Helper\Product\StockData $stockDataHelper,
        protected \Magento\Framework\App\State $state
    ) {
    }

    public function getProducts(array $criteria, bool $returnProductsEntities = false): array
    {
        $collection = $this->buildCollectionSearchCriteria($criteria);
        $collection->addMediaGalleryData();
        $products = $collection->getItems();

        if ($this->skipCollectionFilters) {
            return $this->mapProductsToArray($products, $collection);
        }

        if (!empty($criteria['filter']) && isset($criteria['limit']) && $criteria['limit'] >= 0) {
            $products = array_slice($products, 0, (int) $criteria['limit']);
        }

        if ($collection instanceof \Smile\ElasticsuiteCatalog\Model\ResourceModel\Product\Fulltext\Collection) {
            $collection->setDataToAll(
                self::ELASTICSEARCH_IDENTITIES_KEY,
                $this->getProductIdentitiesFromElasticSearch($collection)
            );
        }

        $this->stockData = $this->stockDataHelper->getStockData($products);

        if ($returnProductsEntities) {
            return $this->sortResults($products, $criteria);
        }

        return $this->sortResults($this->mapProductsToArray($products, $collection), $criteria);
    }

    public function getAddToCartButtonHtml(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        if (!$this->isProductInStock($product)) {
            return '';
        }

        return $this->productTileRenderer->getAddToCartButtonHtml($product);
    }

    public function getIsNewProduct(\Magento\Catalog\Api\Data\ProductInterface $product): bool
    {
        return $this->productIndicators->isNew($product);
    }

    public function getSalePercentage(\Magento\Catalog\Api\Data\ProductInterface $product): int
    {
        return $this->productIndicators->getSalePercentage($product);
    }

    public function getPopularIconFlag(\Magento\Catalog\Api\Data\ProductInterface $product): bool
    {
        return $this->productIndicators->getPopularIconFlag($product);
    }

    public function isFreeShipped(\Magento\Catalog\Api\Data\ProductInterface $product): bool
    {
        return $this->productIndicators->isFreeShipped($product);
    }

    public function setSkipCollectionFilters(bool $value): void
    {
        $this->skipCollectionFilters = $value;
    }

    protected function mapProductsToArray(
        array $products,
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection
    ): array {
        $isVirtualCategoryApplied = (bool) $collection->hasFlag(
            \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\CollectionFilter::VIRTUAL_CATEGORY_FLAG
        );
        $productsData = [];

        foreach ($products as $product) {
            $productData = $this->mapProductToArray($product);

            if ($isVirtualCategoryApplied) {
                $productData['identities'][] = self::VIRTUAL_CATEGORY_IDENTITY;
            }

            $productsData[] = $productData;
        }

        return $productsData;
    }

    protected function mapProductToArray(\Magento\Catalog\Api\Data\ProductInterface $product): array
    {
        if (isset($this->productData[$product->getId()])) {
            return $this->productData[$product->getId()];
        }

        $productData = [
            'id' => $product->getId(),
            'entity_id' => $product->getId(),
            'object' => $product,
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
            'dailyDealOffer' => $this->productIndicators->getDailyDealOffer($product),
        ];

        $additionalProductData = $this->additionalProductDataProvider->getData($product);
        $this->productData[$product->getId()] = array_merge($productData, $additionalProductData);

        return $this->productData[$product->getId()];
    }

    protected function buildCollectionSearchCriteria(
        array $criteria
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        $collectionType = (string) ($criteria['collection_type'] ?? self::COLLECTION_TYPE_ELASTICSEARCH);
        $collection = $this->initializeCollection($collectionType);
        $this->applyFilterAttributes($collection, $criteria['filter_attributes'] ?? []);

        if (!empty($criteria['skus'])) {
            $collection->addFieldToFilter('sku', ['in' => $this->prepareSortingArray($criteria['skus'])]);

            return $collection;
        }

        $this->collectionFilter->applyStockFilter($collection, $collectionType);

        if (isset($criteria['category_id'])) {
            $collection = $this->applyCategoryFilter($collection, $criteria['category_id']);
        }

        $this->collectionFilter->applyConditions($collection, $collectionType, $criteria['conditions'] ?? null);

        if (isset($criteria['product_ids'])) {
            $collection->addFieldToFilter('entity_id', ['in' => $criteria['product_ids']]);
        }

        return $this->applyFilteringSortingAndLimit($collection, $this->normalizeLegacyCriteria($criteria));
    }

    protected function applyFilterAttributes(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        array $filterAttributes
    ): void {
        foreach ($filterAttributes as $attribute => $conditions) {
            $collection->addAttributeToFilter($attribute, [$conditions['operator'] => $conditions['value']]);
        }
    }

    protected function normalizeLegacyCriteria(array $criteria): array
    {
        if (($criteria['order_by'] ?? null) === self::LEGACY_NEWEST_PRODUCTS_ORDER) {
            $criteria['filter'] = self::NEW_PRODUCTS_FILTER;
            unset($criteria['order_by']);
        }

        if (isset($criteria['order_by'], $this->oldFieldsMapping[$criteria['order_by']])) {
            $criteria['order_by'] = $this->oldFieldsMapping[$criteria['order_by']];
        }

        return $criteria;
    }

    protected function applyFilteringSortingAndLimit(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        array $criteria
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        if (isset($criteria['filter'])) {
            $collection = $this->applyFiltering($collection, (string) $criteria['filter']);
        }

        if (isset($criteria['order_by'], $criteria['order_type'])) {
            $collection = $this->applySorting(
                $collection,
                (string) $criteria['order_by'],
                (string) $criteria['order_type']
            );
        }

        if (isset($criteria['limit']) && $criteria['limit'] >= 0 && empty($criteria['filter'])) {
            $collection->setPageSize($criteria['limit']);
        }

        return $collection;
    }

    protected function initializeCollection(
        string $type = self::COLLECTION_TYPE_ELASTICSEARCH
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        return $this->collectionInitializer->initialize($type, $this->skipCollectionFilters);
    }

    protected function getProductPriceHtml(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        return $this->productTileRenderer->getPriceHtml($product);
    }

    protected function getProductImageUrl(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        return $this->productTileData->getImageUrl($product);
    }

    protected function getProductRatingSummary(\Magento\Catalog\Api\Data\ProductInterface $product): array|false
    {
        return $this->productTileData->getRatingSummary($product);
    }

    protected function isProductInStock(\Magento\Catalog\Api\Data\ProductInterface $product): bool
    {
        return (bool) ($this->stockData[$product->getId()]['salable'] ?? $product->getIsSalable());
    }

    protected function getProductWishlistDataPost(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        return $this->productTileData->getWishlistDataPost($product);
    }

    protected function getProductQty(int|string $productId): float|int
    {
        return $this->stockData[$productId]['qty'] ?? 0;
    }

    protected function getSwatchesHtml(\Magento\Catalog\Api\Data\ProductInterface $product): string|false
    {
        return $this->productTileRenderer->getSwatchesHtml($product);
    }

    protected function sortResults(array $products, array $criteria): array
    {
        $sortingType = $this->resolveSortingType($criteria);

        if ($sortingType === null) {
            return $products;
        }

        $sortingData = $this->prepareSortingArray($criteria[$sortingType]);
        $sortingField = $this->sortingTypeMapping[$sortingType];
        $sortedProducts = [];

        foreach ($products as $product) {
            $index = array_search($product[$sortingField], $sortingData);

            if ($index !== false) {
                $sortedProducts[$index] = $product;
            }
        }

        ksort($sortedProducts);

        return $sortedProducts;
    }

    protected function resolveSortingType(array $criteria): ?string
    {
        $isFrontend = $this->state->getAreaCode() === \Magento\Framework\App\Area::AREA_FRONTEND;

        if ($isFrontend && !empty($criteria['product_ids'])) {
            return 'product_ids';
        }

        return empty($criteria['skus']) ? null : 'skus';
    }

    protected function applyFiltering(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        string $filter
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        return $this->collectionFilter->applyFiltering($collection, $filter);
    }

    protected function applySorting(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        string $orderBy,
        string $orderType
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        return $this->collectionFilter->applySorting($collection, $orderBy, $orderType);
    }

    protected function applyCategoryFilter(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        int|string $categoryId
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        return $this->collectionFilter->applyCategoryFilter($collection, $categoryId);
    }

    protected function applyVirtualCategoryFilters(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        \Magento\Catalog\Api\Data\CategoryInterface $category
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        return $this->collectionFilter->applyVirtualCategoryFilters($collection, $category);
    }

    protected function prepareSortingArray(array|string|int $skus): array
    {
        $values = is_array($skus) ? $skus : explode(',', (string) $skus);

        return array_map(static fn ($value): string => trim((string) $value), $values);
    }

    protected function getProductIdentitiesFromElasticSearch(
        \Smile\ElasticsuiteCatalog\Model\ResourceModel\Product\Fulltext\Collection $collection
    ): array {
        preg_match('/\(([0-9, ]+?)\)/', $this->getWhereConditionWithProductIds($collection), $idsFromCondition);

        if (!isset($idsFromCondition[1])) {
            return [];
        }

        return array_map(
            static fn (string $productId): string => sprintf(
                '%s_%d',
                \Magento\Catalog\Model\Product::CACHE_TAG,
                (int) $productId
            ),
            explode(',', $idsFromCondition[1])
        );
    }

    protected function getWhereConditionWithProductIds(
        \Smile\ElasticsuiteCatalog\Model\ResourceModel\Product\Fulltext\Collection $collection
    ): string {
        foreach ($collection->getSelect()->getPart('where') as $condition) {
            if (str_contains((string) $condition, 'entity_id IN')) {
                return (string) $condition;
            }
        }

        return '';
    }
}
