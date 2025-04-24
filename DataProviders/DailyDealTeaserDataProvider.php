<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class DailyDealTeaserDataProvider
{
    public function __construct(
        protected \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        protected \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider $dataProvider,
        protected \MageSuite\BrandManagement\Api\BrandsRepositoryInterface $brandsRepository,
        protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        protected \MageSuite\Discount\Helper\Discount $discountHelper,
    ) {}

    public function getProduct(array $configuration): ?array
    {
        $products = $this->getValidProducts($configuration);
        $product = current($products);

        if (!$product) {
            return null;
        }

        $product['brandName'] = '';
        $productObject = $this->productRepository->get($product['sku']);
        $product['productObject'] = $productObject;

        if ($brandId = $productObject->getBrand()) {
            $brand = $this->brandsRepository->getById($brandId);

            $product['brandName'] = $brand->getBrandName();
        }

        $product['image'] = [
            'src' => $this->mediaResolver->resolve($product['image']),
            'srcSet' => $this->mediaResolver->resolveSrcSet($product['image']),
        ];

        if (!empty($product['dailyDealOffer']['price']) && empty($product['dailyDealOffer']['dailyDiscount'])) {
            $product['dailyDealOffer']['discountPercentage'] = $this->discountHelper->getSalePercentage($productObject, (float)$product['dailyDealOffer']['price']);
        }

        if (!empty($product['dailyDealOffer']['dailyDiscount'])) {
            $product['dailyDealOffer']['discountPercentage'] = $product['dailyDealOffer']['dailyDiscount'];
        }

        return $product;
    }

    protected function getValidProducts(array $configuration): array
    {
        $products = $this->dataProvider->getProducts($configuration);

        return array_filter($products, function ($product) {
            return $product['dailyDealOffer']['deal'] ?? false;
        });
    }
}
