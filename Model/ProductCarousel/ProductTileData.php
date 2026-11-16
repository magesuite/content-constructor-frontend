<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\ProductCarousel;

class ProductTileData
{
    protected const string IMAGE_ID = 'category_page_grid';
    protected const int IMAGE_WIDTH = 400;
    protected const int MAX_STARS = 5;

    public function __construct(
        protected \Magento\Catalog\Helper\Image $imageHelper,
        protected \Magento\Review\Model\Review $review,
        protected \Magento\Wishlist\Helper\Data $wishlistHelper,
        protected \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
    }

    public function getImageUrl(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        $image = $this->imageHelper->init($product, self::IMAGE_ID);
        $image->constrainOnly(false);
        $image->keepAspectRatio(true);
        $image->keepFrame(false);
        $image->resize(self::IMAGE_WIDTH);

        return (string) $image->getUrl();
    }

    public function getRatingSummary(\Magento\Catalog\Api\Data\ProductInterface $product): array|false
    {
        $this->review->getEntitySummary($product, $this->storeManager->getStore()->getId());

        if (!$product->getRatingSummary()) {
            return false;
        }

        [$ratingSummary, $reviewsCount] = $this->resolveRatingAndReviewsCount($product);

        if (!$reviewsCount) {
            return false;
        }

        return [
            'data' => [
                'maxStars' => self::MAX_STARS,
                'activeStars' => $ratingSummary ? round((float) $ratingSummary / 10) / 2 : 0,
                'text' => sprintf('(%s)', $reviewsCount),
                'count' => $reviewsCount,
            ],
        ];
    }

    public function getWishlistDataPost(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        return (string) $this->wishlistHelper->getAddParams($product);
    }

    protected function resolveRatingAndReviewsCount(\Magento\Catalog\Api\Data\ProductInterface $product): array
    {
        $ratingSummary = $product->getRatingSummary();

        if (!is_object($ratingSummary)) {
            return [$ratingSummary, $product->getReviewsCount()];
        }

        return [$ratingSummary->getRatingSummary(), $ratingSummary->getReviewsCount()];
    }
}
