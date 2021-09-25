<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class CategoryLinksDataProvider
{
    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\Category
     */
    protected $categoryHelper;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory
     */
    protected $categoryCollectionFactory;

    public function __construct(
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \MageSuite\ContentConstructorFrontend\Helper\Category $categoryHelper
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->categoryHelper = $categoryHelper;
        $this->categoryCollectionFactory = $categoryCollectionFactory;
    }

    public function getCategories($mainCategoryId, $subCategoriesIds) {
        $categoriesIds = array_merge([$mainCategoryId], $subCategoriesIds);

        $categories = $this->getCategoriesFromCollection($categoriesIds);

        $subCategories = [];

        $mainCategory = $this->getCategoryData($this->getCategoryById($mainCategoryId, $categories));

        foreach($subCategoriesIds as $subCategoryId) {
            if(!$subCategoryId){
                continue;
            }

            $subcategoryData = $this->getCategoryData($this->getCategoryById($subCategoryId, $categories));
            if($subcategoryData['is_active']==1) {
                $subCategories[] = $subcategoryData;
            }
        }

        return [
            'main_category' => $mainCategory,
            'sub_categories' => $subCategories
        ];
    }

    protected function getCategoryData($category)
    {
        return [
            'name' => $category->getName(),
            'url' => $category->getUrl(),
            'products_count' => $this->categoryHelper->getNumberOfProducts($category),
            'is_active' => $category->getIsActive()
        ];
    }

    /**
     * @param $categoryId
     * @param $categories
     * @return null
     */
    protected function getCategoryById($categoryId, $categories)
    {
        foreach($categories as $category) {
            if($category->getId() == $categoryId) {
                return $category;
            }
        }

        throw new \InvalidArgumentException(sprintf('Category with category id %s does not exist', $categoryId));
    }

    /**
     * @param $categoriesIds
     * @return \Magento\Framework\DataObject[]
     */
    protected function getCategoriesFromCollection($categoriesIds)
    {
        $categoryCollection = $this->categoryCollectionFactory->create();
        $categoryCollection->addIdFilter($categoriesIds);
        $categoryCollection->addAttributeToSelect('name');
        $categoryCollection->addAttributeToSelect('is_active');
        $categoryCollection->addAttributeToSelect('url_key');

        return $categoryCollection->getItems();
    }
}
