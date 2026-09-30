<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\ProductCarousel;

class ProductIndicators
{
    public function __construct(
        protected \MageSuite\Frontend\Helper\Product $productHelper,
        protected \MageSuite\Discount\Helper\Discount $discountHelper,
        protected \MageSuite\ProductPositiveIndicators\Helper\Product $productIndicatorHelper,
        protected \MageSuite\DailyDeal\Helper\OfferData $dailyDealHelper
    ) {
    }

    public function isNew(\Magento\Catalog\Api\Data\ProductInterface $product): bool
    {
        return (bool) $this->productHelper->isNew($product);
    }

    public function getSalePercentage(\Magento\Catalog\Api\Data\ProductInterface $product): int
    {
        return $this->discountHelper->getSalePercentage($product);
    }

    public function getPopularIconFlag(\Magento\Catalog\Api\Data\ProductInterface $product): bool
    {
        return (bool) $this->productIndicatorHelper->getPopularIconFlag($product);
    }

    public function isFreeShipped(\Magento\Catalog\Api\Data\ProductInterface $product): bool
    {
        return $this->productIndicatorHelper->showFreeShippingInProductTiles()
            && $this->productIndicatorHelper->isFreeShipped($product);
    }

    public function getDailyDealOffer(\Magento\Catalog\Api\Data\ProductInterface $product): ?array
    {
        return $this->dailyDealHelper->prepareOfferData($product);
    }
}
