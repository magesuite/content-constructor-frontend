<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Helper;

class Category
{
    public const CACHE_LIFETIME = 86400;
    public const CACHE_KEY = 'products_in_category_count_store_%s';
    public const CACHE_TAG = 'products_in_categories_count';

    protected array $productsCount = [];

    protected \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory;
    protected \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory;
    protected \Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer;
    protected \Smile\ElasticsuiteVirtualCategory\Model\Category\Attribute\VirtualRule\ReadHandler $readHandler;
    protected \Magento\Framework\App\CacheInterface $cache;
    protected \Magento\Framework\DB\Adapter\AdapterInterface $connection;
    protected \Magento\Store\Model\StoreManagerInterface $storeManager;
    protected \Magento\Framework\Serialize\SerializerInterface $serializer;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer,
        \Smile\ElasticsuiteVirtualCategory\Model\Category\Attribute\VirtualRule\ReadHandler $readHandler,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Framework\App\ResourceConnection $resourceConnection,
        \Magento\Framework\Serialize\SerializerInterface $serializer,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->tableMaintainer = $tableMaintainer;
        $this->readHandler = $readHandler;
        $this->cache = $cache;
        $this->connection = $resourceConnection->getConnection();
        $this->serializer = $serializer;
        $this->storeManager = $storeManager;
    }

    public function getNumberOfProducts(\Magento\Catalog\Model\Category $category, bool $includeNumberOfProductForVirtualCategory = true): int
    {
        if ($includeNumberOfProductForVirtualCategory && $category->getIsVirtualCategory() && $category->getVirtualRule()) {
            return $this->getProductsCountForVirtualCategory($category);
        }

        $result = $this->getProductsCountFromIndex();

        return (int) ($result[$category->getId()] ?? 0);
    }

    protected function getProductsCountFromIndex(): array
    {
        if (!empty($this->productsCount)) {
            return $this->productsCount;
        }

        $cacheKey = $this->getCacheKey();

        try {
            $result = $this->serializer->unserialize($this->cache->load($cacheKey));
        } catch (\InvalidArgumentException) {
            $result = null;
        }

        if (!$result) {
            $categoryIndexTable = $this->tableMaintainer->getMainTable((int) $this->storeManager->getStore()->getId());

            $select = $this->connection->select()
                ->from($categoryIndexTable, ['category_id', 'COUNT(distinct product_id) AS products_count'])
                ->group('category_id');
            $result = $this->connection->fetchPairs($select);

            $this->cache->save(
                $this->serializer->serialize($result),
                $cacheKey,
                [self::CACHE_TAG],
                self::CACHE_LIFETIME
            );
        }

        $this->productsCount = $result;

        return $this->productsCount;
    }

    protected function getProductsCountForVirtualCategory(\Magento\Catalog\Model\Category $category): int
    {
        $collection = $this->productCollectionFactory->create();
        $this->readHandler->execute($category);
        $queryFilter = $category->getVirtualRule()->getCategorySearchQuery($category);
        $collection->addQueryFilter($queryFilter);
        $category->unsetData(\Smile\ElasticsuiteVirtualCategory\Model\Category\Attribute\VirtualRule\ReadHandler::ATTRIBUTE_CODE);

        return $collection->getSize();
    }

    public function getCacheKey(): string
    {
        return sprintf(self::CACHE_KEY, $this->storeManager->getStore()->getId());
    }
}
