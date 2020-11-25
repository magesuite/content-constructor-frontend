<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ProductTeaser extends \Magento\Framework\DataObject implements ViewModel
{
    protected $product = null;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider
     */
    protected $productDataProvider;

    /**
     * @var \Magento\Catalog\Block\Product\ListProduct
     */
    protected $listProductBlock;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider $productDataProvider,
        \Magento\Catalog\Block\Product\ListProduct $listProductBlock,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->productDataProvider = $productDataProvider;
        $this->listProductBlock = $listProductBlock;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->getData('sku');
    }

    /**
     * @return array|null
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductData()
    {
        if ($this->product === null) {
            $products = $this->productDataProvider->getProducts(['skus' => $this->getSku()]);

            $this->product = !empty($products) ? array_shift($products) : false;
        }

        return $this->product;
    }

    /**
     * @return \Magento\Catalog\Api\Data\ProductInterface|null
     */
    public function getProductObject()
    {
        $product = $this->getProductData();

        if (isset($product['object'])) {
            return $product['object'];
        }

        throw new \Magento\Framework\Exception\NoSuchEntityException(__("Product with sku %1 does not exist", $this->getSku()));
    }

    /**
     * @param $product
     * @return array
     */
    public function getAddToCartParameters($product)
    {
        $postParams = $this->listProductBlock->getAddToCartPostParams($product);

        return [
            'action' => $postParams['action'],
            'productId' => $postParams['data']['product'],
            'uencKey' => \Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED,
            'uencValue' => $postParams['data'][\Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED],
            'formKey' => $this->listProductBlock->getBlockHtml('formkey'),
        ];
    }
}
