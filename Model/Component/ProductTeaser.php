<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ProductTeaser extends \Magento\Framework\DataObject implements ViewModel
{
    protected $product = null;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider
     */
    protected $productDataProvider;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\ProductCarouselDataProvider $productDataProvider,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->productDataProvider = $productDataProvider;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->getData('sku');
    }

    /**
     * @return string
     */
    public function getSlogan()
    {
        return $this->getData('slogan');
    }

    /**
     * @return string
     */
    public function getSubslogan()
    {
        return $this->getData('subslogan');
    }

    /**
     * @return string
     */
    public function getSpecialDescription()
    {
        return $this->getData('specialdescription');
    }

    /**
     * @return string
     */
    public function getBackground()
    {
        return $this->getData('background');
    }

    /**
     * @return string
     */
    public function hasBorder()
    {
        return $this->getData('border');
    }

    /**
     * @return string
     */
    public function hasShadow()
    {
        return $this->getData('shadow');
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
}
