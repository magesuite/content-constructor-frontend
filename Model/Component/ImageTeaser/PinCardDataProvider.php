<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser;

class PinCardDataProvider extends \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider
{
    public function getCards(array $skus): array
    {
        if (empty($skus)) {
            return [];
        }

        $cards = [];

        foreach ($this->buildCardCollection($skus)->getItems() as $product) {
            $cards[$product->getSku()] = $this->mapProductToCard($product);
        }

        return $cards;
    }

    protected function buildCardCollection(array $skus): \Magento\Catalog\Model\ResourceModel\Product\Collection
    {
        $collection = $this->databaseProductCollectionFactory->create();

        $collection->addAttributeToSelect($this->catalogConfig->getProductAttributes())
            ->setStore($this->storeManager->getStore())
            ->addFinalPrice()
            ->addTaxPercents()
            ->addUrlRewrite()
            ->addStoreFilter()
            ->setVisibility(PinProductProvider::INDIVIDUALLY_VISIBLE_IDS)
            ->addAttributeToFilter(
                'status',
                \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED
            );

        $collection->addFieldToFilter('sku', ['in' => $skus]);

        return $collection;
    }

    protected function mapProductToCard(\Magento\Catalog\Api\Data\ProductInterface $product): array
    {
        return [
            'url' => $product->getProductUrl(),
            'name' => $product->getName(),
            'image' => $this->getProductImageUrl($product),
            'price' => $this->getProductPriceHtml($product),
            'rating' => $this->getProductRatingSummary($product),
            'sale' => $this->getSalePercentage($product),
            'identities' => $product->getIdentities(),
        ];
    }
}
