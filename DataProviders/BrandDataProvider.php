<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class BrandDataProvider implements \MageSuite\ContentConstructor\Components\BrandCarousel\DataProvider
{
    /**
     * @var \MageSuite\BrandManagement\Model\ResourceModel\Brands\CollectionFactory
     */
    private $brandCollection;

    /**
     * @var \MageSuite\BrandManagement\Model\BrandsRepository
     */
    protected $brandsRepository;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    public function __construct(
        \MageSuite\BrandManagement\Model\ResourceModel\Brands\CollectionFactory $brandCollection,
        \MageSuite\BrandManagement\Model\BrandsRepository $brandsRepository,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        $this->brandCollection = $brandCollection;
        $this->brandsRepository = $brandsRepository;
        $this->storeManager = $storeManager;
    }

    public function getBrands() {
        $brands = $this->brandCollection->create();

        $data = [];

        if(empty($brands)) {
            return $data;
        }

        foreach($brands as $brand) {
            $storeId = $this->storeManager->getStore()->getId();
            $brand = $this->brandsRepository->getById($brand->getEntityId(), $storeId);

            if(!$brand->getEnabled()) {
                continue;
            }

            if(!$brand->getShowInBrandCarousel()) {
                continue;
            }

            if(empty($brand->getBrandIconUrl())) {
                continue;
            }

            if(empty($brand->getBrandUrl())) {
                continue;
            }

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
}
