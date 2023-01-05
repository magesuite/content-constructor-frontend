<?php

namespace MageSuite\ContentConstructorFrontend\Helper;

class Category
{
    const CACHE_LIFETIME = 86400;

    protected const CACHE_KEY = 'products_in_category_count_store_%s';

    protected \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory;

    protected \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory;

    protected \Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer;

    protected \Smile\ElasticsuiteVirtualCategory\Model\Category\Attribute\VirtualRule\ReadHandler $readHandler;

    protected \Magento\Framework\App\CacheInterface $cache;

    protected \Magento\Framework\DB\Adapter\AdapterInterface $connection;

    protected \Magento\Store\Model\StoreManagerInterface $storeManager;

    protected \Magento\Framework\Serialize\Serializer\Serialize $serializer;

    protected array $productsCount = [];

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer,
        \Smile\ElasticsuiteVirtualCategory\Model\Category\Attribute\VirtualRule\ReadHandler $readHandler,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Framework\App\ResourceConnection $resourceConnection,
        \Magento\Framework\Serialize\Serializer\Serialize $serializer,
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

        return $result[$category->getId()] ?? 0;
    }

    protected function getProductsCountFromIndex()
    {
        if (!empty($this->productsCount)) {
            return $this->productsCount;
        }

        $cacheKey = $this->getCacheKey();

        try {
            $result = $this->serializer->unserialize($this->cache->load($cacheKey));
        } catch (\InvalidArgumentException $exception) {
            $result = null;
        }

        if (!$result) {
            $categoryIndexTable = $this->tableMaintainer->getMainTable($this->storeManager->getStore()->getId());

            $result = $this->connection->fetchPairs('SELECT category_id, COUNT(distinct product_id) AS products_count FROM ' . $categoryIndexTable . ' GROUP BY category_id');

            $this->cache->save(
                $this->serializer->serialize($result),
                $cacheKey,
                ['products_in_categories_count'],
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
