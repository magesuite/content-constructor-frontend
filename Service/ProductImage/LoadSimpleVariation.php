<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service\ProductImage;

class LoadSimpleVariation
{
    protected array $cache = [];
    protected ?array $attributes = null;
    protected array $filterArrayCache = [];

    public function __construct(
        protected \Magento\Swatches\Helper\Data $swatchHelperData,
        protected \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $attributeCollectionFactory,
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

        $params = $this->request->getQuery()->toArray();

        if (empty($params)) {
            return $parentProduct;
        }

        $filterArray = $this->getFilterArray($params);

        if (empty($filterArray)) {
            return $parentProduct;
        }

        $cacheKey = sprintf(
            '%s-%s',
            $parentProduct->getId(),
            hash('sha256', $this->serializer->serialize($filterArray))
        );

        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
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
        $requestHash = hash('sha256', $this->serializer->serialize($request));

        if (isset($this->filterArrayCache[$requestHash])) {
            return $this->filterArrayCache[$requestHash];
        }

        $filterArray = [];
        $attributes = $this->getAttributes();

        foreach ($request as $code => $value) {
            $attribute = $attributes[$code] ?? null;

            if (!$attribute?->getId()) {
                continue;
            }

            $filterArray[$code] = [$value];

            $optionsIds = $this->swatchHelperData->getOptionIds($attribute, $value);

            if ($optionsIds) {
                $filterArray[$code][] = $optionsIds;
            }

        }

        $this->filterArrayCache[$requestHash] = $filterArray;

        return $this->filterArrayCache[$requestHash];
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

    protected function getAttributes(): array
    {
        if ($this->attributes !== null) {
            return $this->attributes;
        }

        $collection = $this->attributeCollectionFactory->create()
            ->addFieldToFilter('is_filterable', 1);

        $collection->getSelect()
            ->where('JSON_EXTRACT(additional_data, \'$.update_product_preview_image\') = ?', '1');

        $this->attributes = [];

        foreach ($collection->getItems() as $item) {
            $this->attributes[$item->getAttributeCode()] = $item;
        }

        return $this->attributes;
    }
}
