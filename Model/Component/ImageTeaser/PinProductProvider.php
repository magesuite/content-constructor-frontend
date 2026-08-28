<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser;

class PinProductProvider
{
    public const INDIVIDUALLY_VISIBLE_IDS = [
        \Magento\Catalog\Model\Product\Visibility::VISIBILITY_IN_CATALOG,
        \Magento\Catalog\Model\Product\Visibility::VISIBILITY_IN_SEARCH,
        \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH,
    ];

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinCardDataProvider $cardDataProvider,
        protected \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        protected \Magento\Store\Model\StoreManagerInterface $storeManager,
        protected \Psr\Log\LoggerInterface $logger
    ) {
    }

    public function getUrlMap(array $skus): array
    {
        if (empty($skus)) {
            return [];
        }

        try {
            return $this->fetchUrls($skus);
        } catch (\Throwable $exception) {
            $this->logger->error(
                'Content Constructor pins: unable to resolve product URLs, retrying per SKU to isolate the cause.',
                ['skus' => $skus, 'exception' => $exception]
            );

            return $this->fetchEachSeparately($skus, fn (array $sku): array => $this->fetchUrls($sku));
        }
    }

    public function getCardMap(array $skus): array
    {
        if (empty($skus)) {
            return [];
        }

        try {
            return $this->cardDataProvider->getCards($skus);
        } catch (\Throwable $exception) {
            $this->logger->error(
                'Content Constructor pins: unable to resolve product cards, retrying per SKU to isolate the cause.',
                ['skus' => $skus, 'exception' => $exception]
            );

            return $this->fetchEachSeparately(
                $skus,
                fn (array $sku): array => $this->cardDataProvider->getCards($sku)
            );
        }
    }

    public function getIdentities(array $skus): array
    {
        if (empty($skus)) {
            return [];
        }

        $collection = $this->productCollectionFactory->create();
        $collection->addFieldToFilter('sku', ['in' => $skus]);

        $identities = [];

        foreach ($collection as $product) {
            $identities[] = \Magento\Catalog\Model\Product::CACHE_TAG . '_' . $product->getId();
        }

        return $identities;
    }

    protected function fetchUrls(array $skus): array
    {
        $collection = $this->productCollectionFactory->create();
        $collection->setStore($this->storeManager->getStore())
            ->addStoreFilter()
            ->addAttributeToSelect('url_key')
            ->addAttributeToFilter(
                'status',
                \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED
            )
            ->setVisibility(self::INDIVIDUALLY_VISIBLE_IDS);
        $collection->addFieldToFilter('sku', ['in' => $skus]);
        $collection->addUrlRewrite();

        $urlMap = [];

        foreach ($collection as $product) {
            $urlMap[$product->getSku()] = [
                'url' => $product->getProductUrl(),
                'identities' => $product->getIdentities(),
            ];
        }

        return $urlMap;
    }

    protected function fetchEachSeparately(array $skus, callable $resolve): array
    {
        $resolved = [];

        foreach ($skus as $sku) {
            try {
                $resolved += $resolve([$sku]);
            } catch (\Throwable $exception) {
                $this->logger->error(
                    'Content Constructor pins: product cannot be resolved and its pin will render as unresolved.',
                    ['sku' => $sku, 'exception' => $exception]
                );
            }
        }

        return $resolved;
    }
}
