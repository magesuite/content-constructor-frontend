<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Plugin\Magento\Catalog\Model\Indexer\Category\Product\Action\Rows;

class CleanProductsCountCache
{
    protected \Magento\Framework\App\CacheInterface $cache;

    public function __construct(\Magento\Framework\App\CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function afterExecute(
        \Magento\Catalog\Model\Indexer\Category\Product\Action\Rows $subject,
        \Magento\Catalog\Model\Indexer\Category\Product\Action\Rows $result
    ): \Magento\Catalog\Model\Indexer\Category\Product\Action\Rows {
        $this->cache->clean([\MageSuite\ContentConstructorFrontend\Helper\Category::CACHE_TAG]);

        return $result;
    }
}
