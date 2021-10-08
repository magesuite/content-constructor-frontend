<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class DailyDealTeaserDataProvider
{
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider
     */
    protected $dataProvider;

    /**
     * @var \MageSuite\BrandManagement\Api\BrandsRepositoryInterface
     */
    protected $brandsRepository;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\MediaResolver
     */
    protected $mediaResolver;

    /**
     * @var \MageSuite\Discount\Helper\Discount
     */
    protected $discountHelper;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider $dataProvider,
        \MageSuite\BrandManagement\Api\BrandsRepositoryInterface $brandsRepository,
        \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        \MageSuite\Discount\Helper\Discount $discountHelper
    ) {
        $this->productRepository = $productRepository;
        $this->dataProvider = $dataProvider;
        $this->brandsRepository = $brandsRepository;
        $this->mediaResolver = $mediaResolver;
        $this->discountHelper = $discountHelper;
    }

    public function getProduct($configuration)
    {
        $products = $this->dataProvider->getProducts($configuration);

        $product = array_shift($products);

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
            'srcSet' => $this->mediaResolver->resolveSrcSet($product['image'])
        ];

        if (isset($product['dailyDealOffer']['price']) && $product['dailyDealOffer']['price']) {
            $product['dailyDealOffer']['discountPercentage'] = $this->discountHelper->getSalePercentage($productObject, $product['dailyDealOffer']['price']);
        }

        if (isset($product['dailyDealOffer']['dailyDiscount']) && $product['dailyDealOffer']['dailyDiscount']) {
            $product['dailyDealOffer']['discountPercentage'] = $product['dailyDealOffer']['dailyDiscount'];
        }

        return $product;
    }
}
