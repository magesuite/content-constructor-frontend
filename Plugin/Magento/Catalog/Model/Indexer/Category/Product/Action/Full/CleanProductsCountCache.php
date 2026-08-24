<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Plugin\Magento\Catalog\Model\Indexer\Category\Product\Action\Full;

class CleanProductsCountCache
{
    protected \Magento\Framework\App\CacheInterface $cache;

    public function __construct(\Magento\Framework\App\CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function afterExecute(
        \Magento\Catalog\Model\Indexer\Category\Product\Action\Full $subject,
        \Magento\Catalog\Model\Indexer\Category\Product\Action\Full $result
    ): \Magento\Catalog\Model\Indexer\Category\Product\Action\Full {
        $this->cache->clean([\MageSuite\ContentConstructorFrontend\Helper\Category::CACHE_TAG]);

        return $result;
    }
}
