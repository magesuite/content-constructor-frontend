<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\ProductCarousel;

class CollectionFilter
{
    public const string VIRTUAL_CATEGORY_FLAG = 'virtual_category_applied';

    protected const string ELASTICSEARCH = \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\CollectionInitializer::COLLECTION_TYPE_ELASTICSEARCH;
    protected const string DATABASE = \MageSuite\ContentConstructorFrontend\Model\ProductCarousel\CollectionInitializer::COLLECTION_TYPE_DATABASE;

    public function __construct(
        protected \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        protected \MageSuite\ContentConstructorFrontend\Model\Filter\Pool $filtersPool,
        protected \MageSuite\ContentConstructorFrontend\Model\Sort\Pool $sortersPool,
        protected \MageSuite\ContentConstructorFrontend\Model\Product\ConditionsApplier $conditionsApplier,
        protected \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration
    ) {
    }

    public function applyStockFilter(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        string $collectionType
    ): void {
        if ($this->stockConfiguration->isShowOutOfStock()) {
            return;
        }

        if ($collectionType === self::ELASTICSEARCH) {
            $collection->addIsInStockFilter();

            return;
        }

        if ($collectionType === self::DATABASE) {
            $collection->addAttributeToFilter('is_saleable', true);
        }
    }

    public function applyConditions(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        string $collectionType,
        mixed $conditions
    ): void {
        if ($collectionType !== self::ELASTICSEARCH) {
            return;
        }

        if ($this->conditionsApplier->hasConditions($conditions)) {
            $this->conditionsApplier->apply($collection, $conditions);
        }
    }

    public function applyCategoryFilter(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        int|string $categoryId
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        try {
            $category = $this->categoryRepository->get($categoryId);
        } catch (\Magento\Framework\Exception\NoSuchEntityException $exception) {
            return $collection;
        }

        if ($category->getIsVirtualCategory() && $category->getVirtualRule()) {
            return $this->applyVirtualCategoryFilters($collection, $category);
        }

        return $collection->addFieldToFilter('category_ids', $categoryId);
    }

    /**
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function applyVirtualCategoryFilters(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        \Magento\Catalog\Api\Data\CategoryInterface $category
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        $queryFilter = $category->getVirtualRule()->getCategorySearchQuery($category);

        if ($queryFilter === null) {
            throw new \Magento\Framework\Exception\LocalizedException(__(
                'Query filter for virtual category was not generated properly. '
                . 'Category might be disabled or misconfigured. Category ID %1 %2',
                $category->getId(),
                $category->getName()
            ));
        }

        $collection->addQueryFilter($queryFilter);
        $collection->setFlag(self::VIRTUAL_CATEGORY_FLAG, true);

        return $collection;
    }

    public function applyFiltering(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        string $filterIdentifier
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        $filter = $this->filtersPool->getFilter($filterIdentifier);

        if ($filter === null) {
            return $collection;
        }

        return $filter->filter($collection);
    }

    public function applySorting(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        string $orderBy,
        string $orderType
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        $sorter = $this->sortersPool->getSorter($orderBy);

        if ($sorter === null) {
            return $collection;
        }

        return $sorter->sort($collection, $orderBy, $orderType);
    }
}
