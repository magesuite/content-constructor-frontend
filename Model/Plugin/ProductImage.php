<?php

namespace MageSuite\ContentConstructorFrontend\Model\Plugin;

/**
 * Class ProductImage replace original configurable product with first child
 */
class ProductImage
{
    /**
     * Determine context of creation image block
     * which defined in catalog/product/list.phtml
     */
    const CATEGORY_PAGE_GRID_LOCATION = 'category_page_grid';
    const CATEGORY_PAGE_LIST_LOCATION = 'category_page_list';

    /**
     * Data helper to get child product image
     *
     * @var \Magento\Swatches\Helper\Data $productHelper
     */
    protected $swatchHelperData;

    /**
     * @var \Magento\Eav\Model\Config
     */
    protected $eavConfig;

    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;

    /**
     * @param \Magento\Swatches\Helper\Data $swatchesHelperData
     * @param \Magento\Eav\Model\Config $eavConfig
     * @param \Magento\Framework\App\Request\Http $request
     */
    public function __construct (
        \Magento\Swatches\Helper\Data $swatchesHelperData,
        \Magento\Eav\Model\Config $eavConfig,
        \Magento\Framework\App\Request\Http $request
    ) {
        $this->swatchHelperData = $swatchesHelperData;
        $this->eavConfig = $eavConfig;
        $this->request = $request;
    }

    /**
     * Replace original configurable product with first child
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @param \Magento\Catalog\Block\Product\AbstractProduct $subject
     * @param \Magento\Catalog\Model\Product $product
     * @param string $location
     * @param array $attributes
     * @return array
     */
    public function beforeGetImage(
        \Magento\Catalog\Block\Product\AbstractProduct $subject,
        \Magento\Catalog\Model\Product $product,
        $location,
        array $attributes = []
    ) {
        if ($product->getTypeId() == \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE
            && (strpos($location, self::CATEGORY_PAGE_GRID_LOCATION) !== false || strpos($location, self::CATEGORY_PAGE_LIST_LOCATION) !== false)) {
            $request = $this->request->getParams();
            if (is_array($request)) {
                $filterArray = $this->getFilterArray($request);
                if (!empty($filterArray)) {
                    $product = $this->loadSimpleVariation($product, $filterArray);
                }
            }
        }
        return [$product, $location, $attributes];
    }

    /**
     * {@inheritdoc}
     * @deprecated since Magento 2.1.6
     */
    protected function getFilterArray(array $request)
    {
        $filterArray = [];
        $attributeCodes = $this->eavConfig->getEntityAttributeCodes(\Magento\Catalog\Model\Product::ENTITY);
        foreach ($request as $code => $value) {
            if (in_array($code, $attributeCodes)) {
                $attribute = $this->eavConfig->getAttribute(\Magento\Catalog\Model\Product::ENTITY, $code);
                if ($attribute->getId() && $this->canReplaceImageWithSwatch($attribute)) {
                    $filterArray[$code] = $value;
                }
            }
        }

        $attributeCodes = $this->eavConfig->getEntityAttributeCodes(\Magento\Catalog\Model\Product::ENTITY);

        foreach ($request as $code => $value) {
            if (in_array($code, $attributeCodes)) {
                $attribute = $this->eavConfig->getAttribute(\Magento\Catalog\Model\Product::ENTITY, $code);

                if (isset($filterArray[$code]) && !is_array($filterArray[$code])) {
                    $filterArray[$code] = [$filterArray[$code]];
                }

                if ($attribute->getId() && $this->canReplaceImageWithSwatch($attribute)) {
                    $filterArray[$code][] = $this->swatchHelperData->getOptionIds($attribute, $value);
                }
            }
        }

        return $filterArray;
    }


    /**
     * @param \Magento\Catalog\Model\Product $parentProduct
     * @param array $filterArray
     * @return bool|\Magento\Catalog\Model\Product
     */
    protected function loadSimpleVariation(\Magento\Catalog\Model\Product $parentProduct, array $filterArray)
    {
        $childProduct = $this->swatchHelperData->loadVariationByFallback($parentProduct, $filterArray);
        if ($childProduct && !$childProduct->getImage()) {
            $childProduct = $this->swatchHelperData->loadFirstVariationWithImage($parentProduct, $filterArray);
        }
        if (!$childProduct) {
            $childProduct = $parentProduct;
        }
        return $childProduct;
    }

    /**
     * Check if we can replace original image with swatch image on catalog/category/list page
     *
     * @param \Magento\Catalog\Model\ResourceModel\Eav\Attribute $attribute
     * @return bool
     */
    protected function canReplaceImageWithSwatch($attribute)
    {
        $result = true;
        if (!$this->swatchHelperData->isSwatchAttribute($attribute)) {
            $result = false;
        }

        if (!$attribute->getUsedInProductListing()
            || !$attribute->getIsFilterable()
            || !$attribute->getData('update_product_preview_image')
        ) {
            $result = false;
        }

        return $result;
    }
}
