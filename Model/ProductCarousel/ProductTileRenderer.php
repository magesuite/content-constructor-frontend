<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\ProductCarousel;

class ProductTileRenderer
{
    protected const string SWATCHES_BLOCK_NAME = 'product.tile.details.renderers.configurable';
    protected const string ADD_TO_CART_FORM_TEMPLATE = '<form data-role="tocart-form" action="%s" method="post">
                <input type="hidden" name="product" value="%s">
                <input type="hidden" name="%s" value="%s">
                %s
                <button disabled type="submit" title="%s"
                class="tocart | cs-button cs-button--type_grid-tocart">
                    <span class="cs-button__span">%s</span>
                </button>
            </form>';

    public function __construct(
        protected \Magento\Catalog\Block\Product\View $productView,
        protected \Magento\Catalog\Block\Product\ListProduct $listProductBlock,
        protected \Magento\Framework\View\Layout $layout
    ) {
    }

    public function getPriceHtml(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        return (string) $this->productView->getProductPriceHtml(
            $product,
            'final_price',
            \Magento\Framework\Pricing\Render::ZONE_ITEM_LIST,
            ['include_container' => true]
        );
    }

    public function getSwatchesHtml(\Magento\Catalog\Api\Data\ProductInterface $product): string|false
    {
        if ($product->getTypeId() !== \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE) {
            return false;
        }

        $swatchesBlock = $this->layout->getBlock(self::SWATCHES_BLOCK_NAME);

        if (!$swatchesBlock) {
            return false;
        }

        $swatchesBlock->setProduct($product);

        return $swatchesBlock->toHtml();
    }

    public function getAddToCartButtonHtml(\Magento\Catalog\Api\Data\ProductInterface $product): string
    {
        $postParams = $this->listProductBlock->getAddToCartPostParams($product);
        $isConfigurable = $product->getTypeId()
            === \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE;
        $addToCartText = $isConfigurable ? __('Configure') : __('Add to cart');

        return sprintf(
            self::ADD_TO_CART_FORM_TEMPLATE,
            $postParams['action'],
            $postParams['data']['product'],
            \Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED,
            $postParams['data'][\Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED],
            $this->listProductBlock->getBlockHtml('formkey'),
            $addToCartText,
            $addToCartText
        );
    }
}
