<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\ProductImage;

class LoadSimpleVariation
{
    protected array $cache = [];

    public function __construct(
        protected \Magento\Swatches\Helper\Data $swatchHelperData,
        protected \Magento\Eav\Model\Config $eavConfig,
        protected \Magento\Framework\App\Request\Http $request,
        protected \Magento\Framework\Serialize\SerializerInterface $serializer,
        protected array $applicableLocations = []
    ) {
    }

    public function execute(
        \Magento\Catalog\Model\Product $parentProduct,
        ?string $location = null
    ): \Magento\Catalog\Model\Product {
        if (!$this->isApplicable($parentProduct, $location)) {
            return $parentProduct;
        }

        $filterArray = $this->getFilterArray($this->request->getParams());
        $cacheKey = sprintf(
            '%s-%s-%s',
            $parentProduct->getId(),
            $location,
            hash('sha256', $this->serializer->serialize($filterArray))
        );

        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        if (empty($filterArray)) {
            return $parentProduct;
        }

        return $this->cache[$cacheKey] = $this->loadSimpleVariation($parentProduct, $filterArray);
    }

    protected function isApplicable(\Magento\Catalog\Model\Product $product, ?string $location = null): bool
    {
        if ($product->getTypeId() !== \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE) {
            return false;
        }

        if ($location === null) {
            return true;
        }

        foreach ($this->applicableLocations as $applicableLocation) {
            if (str_contains($location, $applicableLocation)) {
                return true;
            }
        }

        return false;
    }

    protected function getFilterArray(array $request): array
    {
        $filterArray = [];
        $attributeCodes = array_flip($this->eavConfig->getEntityAttributeCodes(\Magento\Catalog\Model\Product::ENTITY));

        foreach ($request as $code => $value) {
            if (!isset($attributeCodes[$code])) {
                continue;
            }

            $attribute = $this->eavConfig->getAttribute(\Magento\Catalog\Model\Product::ENTITY, $code);

            if (!$attribute->getId() || !$this->canReplaceImageWithSwatch($attribute)) {
                continue;
            }

            $filterArray[$code] = is_array($filterArray[$code] ?? null)
                ? $filterArray[$code]
                : [$value];

            $filterArray[$code][] = $this->swatchHelperData->getOptionIds($attribute, $value);
        }

        return $filterArray;
    }

    protected function loadSimpleVariation(
        \Magento\Catalog\Model\Product $parentProduct,
        array $filterArray
    ): \Magento\Catalog\Model\Product {
        $childProduct = $this->swatchHelperData->loadVariationByFallback($parentProduct, $filterArray);

        if ($childProduct && !$childProduct->getImage()) {
            $childProduct = $this->swatchHelperData->loadFirstVariationWithImage($parentProduct, $filterArray);
        }

        return $childProduct ?: $parentProduct;
    }

    protected function canReplaceImageWithSwatch(\Magento\Catalog\Model\ResourceModel\Eav\Attribute $attribute): bool
    {
        if (!$this->swatchHelperData->isSwatchAttribute($attribute)) {
            return false;
        }

        if (!$attribute->getUsedInProductListing()
            || !$attribute->getIsFilterable()
            || !$attribute->getData('update_product_preview_image')
        ) {
            return false;
        }

        return true;
    }
}
