<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class BrandCarousel extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\BrandManagement\Model\ResourceModel\Brands\CollectionFactory
     */
    protected $brandCollection;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    public function __construct(
        \MageSuite\BrandManagement\Model\ResourceModel\Brands\CollectionFactory $brandCollection,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($data);
        $this->brandCollection = $brandCollection;
        $this->storeManager = $storeManager;
    }

    public function getBrands(): array
    {
        $brands = $this->getCollection();
        $data = [];

        foreach ($brands as $brand) {
            $data[] = [
                'href' => $brand->getBrandUrl(),
                'image' => [
                    'src' => $brand->getBrandIconUrl(),
                    'alt' => $brand->getBrandName()
                ]
            ];
        }

        return $data;
    }

    public function getCollection()
    {
        $storeId = $this->storeManager->getStore()->getId();
        $collection = $this->brandCollection->create();
        $collection->setStoreId($storeId)
            ->addAttributeToSelect('brand_name')
            ->addAttributeToFilter('enabled', 1)
            ->addAttributeToFilter('show_in_brand_carousel', 1)
            ->addAttributeToFilter('brand_url_key', ['notnull' => true])
            ->addAttributeToFilter('brand_icon', ['notnull' => true]);

        return $collection;
    }
}
