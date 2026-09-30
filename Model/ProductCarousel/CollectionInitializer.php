<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\ProductCarousel;

class CollectionInitializer
{
    public const string COLLECTION_TYPE_ELASTICSEARCH = 'elasticsearch';
    public const string COLLECTION_TYPE_DATABASE = 'database';

    public function __construct(
        protected \Smile\ElasticsuiteCatalog\Model\ResourceModel\Product\Fulltext\CollectionFactory $fulltextCollectionFactory,
        protected \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $databaseCollectionFactory,
        protected \Magento\Catalog\Model\Config $catalogConfig,
        protected \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
    }

    public function initialize(
        string $collectionType,
        bool $skipCollectionFilters
    ): \Magento\Catalog\Model\ResourceModel\Product\Collection {
        $collection = $this->createCollection($collectionType);

        if ($skipCollectionFilters) {
            return $collection;
        }

        $this->prepareForStorefront($collection, \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH);

        return $collection;
    }

    public function createCollection(string $collectionType): \Magento\Catalog\Model\ResourceModel\Product\Collection
    {
        $collection = $collectionType === self::COLLECTION_TYPE_ELASTICSEARCH
            ? $this->fulltextCollectionFactory->create()
            : $this->databaseCollectionFactory->create();

        $collection->addAttributeToSelect($this->catalogConfig->getProductAttributes());

        return $collection;
    }

    public function prepareForStorefront(
        \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
        int|array $visibility
    ): void {
        $collection->setStore($this->storeManager->getStore());
        $collection->addFinalPrice();
        $collection->addTaxPercents();
        $collection->addUrlRewrite();
        $collection->addStoreFilter();
        $collection->setVisibility($visibility);
    }
}
