<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

abstract class DataProviderComponents implements DataProviderComponentsInterface
{
    protected $categoryId = null;
    protected $cmsPageId = null;
    protected $productSku = null;

    protected \Magento\Catalog\Helper\Category $categoryHelper;

    protected \Magento\Framework\UrlInterface $url;

    protected \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $cmsPageCollectionFactory;

    protected \Magento\Store\Model\StoreManagerInterface $storeManager;

    protected \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory;

    public function __construct(
        \Magento\Catalog\Helper\Category $categoryHelper,
        \Magento\Framework\UrlInterface $url,
        \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $cmsPageCollectionFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
    ) {
        $this->categoryHelper = $categoryHelper;
        $this->url = $url;
        $this->cmsPageCollectionFactory = $cmsPageCollectionFactory;
        $this->storeManager = $storeManager;
        $this->productCollectionFactory = $productCollectionFactory;
    }

    protected function getDecodedImage($name)
    {
        return $this->url->getUrl('contentconstructor/components/image', ['image_path' => base64_encode($name)]);
    }

    protected function getVideoUrl($name)
    {
        return $this->url->getUrl('contentconstructor/components/video', ['video_path' => base64_encode($name)]);
    }

    protected function getImage($name)
    {
        $decodedImage = $this->getDecodedImage($name);

        return '/admin/content-constructor/image/show/image/' . base64_encode($decodedImage);
    }

    public static function getHeadlineBlock($title, $subtitle = ''){
        $data = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => $title
                ]
            ]
        ];

        if($subtitle) {
            $data['_data']['data']['subtitle'] = $subtitle;
        }

        return $data;
    }

    protected function getMainCategoryId()
    {
        if (empty($this->categoryId)) {
            /** @var $mainCategory \Magento\Catalog\Model\Category */
            $mainCategory = null;

            foreach ($this->categoryHelper->getStoreCategories(false, true) as $category) {
                /** @var $category \Magento\Catalog\Model\Category */
                if ($category->hasChildren()) {
                    $mainCategory = $category;
                    break;
                }
            }

            if (!$mainCategory) {
                $this->categoryId = \Magento\Catalog\Model\Category::ROOT_CATEGORY_ID;
            }

            $this->categoryId = $mainCategory->getId();
        }

        return $this->categoryId;
    }

    protected function getCmsPageId()
    {
        if (empty($this->cmsPageId)) {
            $currentStoreId = $this->storeManager->getStore()->getId();
            $pagesCollection = $this->cmsPageCollectionFactory->create();

            $pagesCollection->addStoreFilter($currentStoreId);
            $pagesCollection->addFieldToFilter('is_active', 1);
            $pagesCollection->setPageSize(1);

            $this->cmsPageId = $pagesCollection->getFirstItem()->getPageId();
        }

        return $this->cmsPageId;
    }

    protected function getProductSku()
    {
        if (empty($this->productSku)) {
            $productCollection = $this->productCollectionFactory->create();
            $productCollection
                ->setStore($this->storeManager->getStore())
                ->addStoreFilter()
                ->setPageSize(1)
                ->setFlag('has_stock_status_filter', true)
                ->addAttributeToFilter('status', ['eq' => \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED])
                ->addAttributeToFilter('visibility', ['eq' => \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH]);

            $this->productSku = $productCollection->getFirstItem()->getSku();
        }

        return $this->productSku;
    }
}
