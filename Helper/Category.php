<?php

namespace MageSuite\ContentConstructorFrontend\Helper;

class Category
{
    const CACHE_LIFETIME = 86400;
    const CACHE_TAG = 'products_in_category_count';

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory
     */
    protected $categoryCollectionFactory;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    protected $productCollectionFactory;

    protected \Smile\ElasticsuiteVirtualCategory\Model\Category\Attribute\VirtualRule\ReadHandler $readHandler;

    /**
     * @var \Magento\Framework\App\CacheInterface
     */
    protected $cache;

    /**
     * @var \Magento\Framework\DB\Adapter\AdapterInterface
     */
    protected $connection;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    protected $productsCount = null;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Smile\ElasticsuiteVirtualCategory\Model\Category\Attribute\VirtualRule\ReadHandler $readHandler,
        \Magento\Framework\App\CacheInterface $cache,
        \Magento\Framework\App\ResourceConnection $resourceConnection,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->readHandler = $readHandler;
        $this->cache = $cache;
        $this->connection = $resourceConnection->getConnection();
        $this->storeManager = $storeManager;
    }

    /**
     * @param $category \Magento\Catalog\Model\Category
     * @return int
     */
    public function getNumberOfProducts(\Magento\Catalog\Model\Category $category): int
    {
        if ($category->getIsVirtualCategory() && $category->getVirtualRule()) {
            return $this->getProductsCountForVirtualCategory($category);
        }

        $result = $this->getProductsCountFromIndex();

        return isset($result[$category->getId()]) ? $result[$category->getId()] : 0;
    }

    protected function getProductsCountFromIndex() {
        if (!is_array($this->productsCount)) {
            $result = unserialize($this->cache->load(self::CACHE_TAG));

            if(!$result) {
                $categoryIndexTable = $this->getCategoryIndexTable();

                $result = $this->connection
                    ->fetchPairs('SELECT category_id, COUNT(distinct product_id) AS products_count FROM ' . $categoryIndexTable . ' GROUP BY category_id');

                $this->cache->save(serialize($result), self::CACHE_TAG, ['products_in_categories_count'], self::CACHE_LIFETIME);
            }

            $this->productsCount = $result;
        }

        return $this->productsCount;
    }

    protected function getProductsCountForVirtualCategory(\Magento\Catalog\Model\Category $category): int
    {
        $collection = $this->productCollectionFactory->create();
        $this->readHandler->execute($category);
        $queryFilter = $category->getVirtualRule()->getCategorySearchQuery($category);
        $collection->addQueryFilter($queryFilter);

        return $collection->getSize();
    }

    /**
     * This is done for compatibility with Magento >= 2.2.5
     * For Magento >= 2.2.5 category product index table must be retrieved from TableMaintainer object
     */
    protected function getCategoryIndexTable() {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        $indexTableName = 'catalog_category_product_index';

        try {
            if ($tableMaintainer = $objectManager->get('Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer')) {
                $indexTableName = $tableMaintainer->getMainTable($this->storeManager->getStore()->getId());
            }
        }
        catch(\Exception $e) {}

        return $indexTableName;
    }
}
