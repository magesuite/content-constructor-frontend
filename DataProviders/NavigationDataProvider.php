<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class NavigationDataProvider implements \MageSuite\ContentConstructor\Components\Navigation\DataProvider
{

    const MEDIA_CATEGORY_PATH = 'pub/media/catalog/category';

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\Category
     */
    protected $categoryHelper;

    /**
     * @var \MageSuite\Frontend\Helper\Category
     */
    protected $categoryFrontendHelper;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var \MageSuite\Frontend\Model\Category\Tree
     */
    protected $categoryTree;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\MediaResolver
     */
    protected $mediaResolver;

    public function __construct(
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \MageSuite\ContentConstructorFrontend\Helper\Category $categoryHelper,
        \MageSuite\Frontend\Helper\Category $categoryFrontendHelper,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \MageSuite\Frontend\Model\Category\Tree $categoryTree,
        \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->categoryHelper = $categoryHelper;
        $this->categoryFrontendHelper = $categoryFrontendHelper;
        $this->storeManager = $storeManager;
        $this->scopeConfig = $scopeConfig;
        $this->categoryTree = $categoryTree;
        $this->mediaResolver = $mediaResolver;
    }

    public function getNavigationStructure($categoryId = null, $returnOnlyIncludedInMenu = true)
    {
        $items = [];

        if(!$categoryId){
            $categoryId = $this->storeManager->getStore()->getRootCategoryId();
        }

        $rootCategory = $this->categoryRepository->get($categoryId);

        $childCategories = $this->getChildrenCategories($rootCategory);

        /** @var \Magento\Catalog\Model\Category $category */
        foreach($childCategories as $category) {
            $tree = $this->buildCategoryTree($category, $returnOnlyIncludedInMenu);

            if($tree == null) {
                continue;
            }

            $items[] = $tree;
        }

        return ['items' => $items];
    }

    /**
     * @param $category \Magento\Catalog\Model\Category
     * @return array
     */
    protected function buildCategoryTree($category, $returnOnlyIncludedInMenu) {
        if($returnOnlyIncludedInMenu and !$category->getIncludeInMenu()) {
            return null;
        }

        $result = [
            'id' => $category->getId(),
            'category_identifier' => $category->getCategoryIdentifier(),
            'parent_id' => $category->getParentId(),
            'is_active' => $category->getIsActive(),
            'hasChildren' => false,
            'url' => $category->getUrl(),
            'label' => $category->getName(),
            'number_of_products' => $this->categoryHelper->getNumberOfProducts($category),
            'do_not_expand_flyout' => $category->getDoNotExpandFlyout(),
            'category_custom_url' => $this->categoryFrontendHelper->prepareCategoryCustomUrl($category->getCategoryCustomUrl()),
            'featured_products_header' => $category->getFeaturedProductsHeader(),
            'featured_products' => $this->categoryFrontendHelper->getFeaturedProducts($category),
            'image_teaser' => $this->getImageTeaser($category)
        ];

        if($category->hasChildren()) {
            $childrens =  $this->getChildrenCategories($category);

            $result['hasChildren'] = true;

            $subcategories = [];

            foreach($childrens as $children) {
                $tree = $this->buildCategoryTree($children, $returnOnlyIncludedInMenu);

                if($tree == null) {
                    continue;
                }

                $subcategories[] = $tree;
            }

            if($this->scopeConfig->getValue('cc_frontend_extension/configuration/sort_alphabetically')) {
                usort($subcategories, function ($a, $b)
                {
                    setlocale(LC_ALL, 'en_GB');
                    $c = iconv('UTF-8', 'ASCII//TRANSLIT', $a['label']);
                    $d = iconv('UTF-8', 'ASCII//TRANSLIT', $b['label']);
                    return ($c <=> $d);
                }
                );
            }

            $result['subcategories'] = $subcategories;
        }

        return $result;
    }

    /**
     * Standard Category collection does not return include_in_menu attribute value. It must be added.
     * @param \Magento\Catalog\Model\Category $category
     * @return mixed
     */
    protected function getChildrenCategories($category) {
        $categories = $category->getChildrenCategories();

        $categories->clear();
        $categories->addAttributeToSelect([
            'parent_id',
            'include_in_menu',
            'do_not_expand_flyout',
            'category_custom_url',
            'category_identifier',
            'featured_products_header',
            'featured_products',
            'image_teaser_headline',
            'image_teaser_subheadline',
            'image_teaser_paragraph',
            'image_teaser_button_label',
            'image_teaser_button_link',
            'image_teaser'
        ]);
        $categories->load();

        return $categories;
    }

    protected function getImageTeaser($category)
    {
        if($category->getLevel() != 2){
            return false;
        }

        $categoryData = $category->getData();
        $imageTeaserUrl = (isset($categoryData['image_teaser']) AND $categoryData['image_teaser']) ? $this->categoryFrontendHelper->getImageTeaser($categoryData['image_teaser']) : '';
        $imageTeaser = [
            'image' => (isset($categoryData['image_teaser']) AND $categoryData['image_teaser']) ? $this->categoryFrontendHelper->getImageTeaser($categoryData['image_teaser']) : '',
            'headline' => $categoryData['image_teaser_headline'] ?? '',
            'subheadline' => $categoryData['image_teaser_subheadline'] ?? '',
            'paragraph' => $categoryData['image_teaser_paragraph'] ?? '',
            'button_label' => $categoryData['image_teaser_button_label'] ?? '',
            'button_link' => (isset($categoryData['image_teaser_button_link']) AND $categoryData['image_teaser_button_link']) ? $this->categoryFrontendHelper->prepareCategoryCustomUrl($categoryData['image_teaser_button_link']) : '',
            'src_set' => $imageTeaserUrl ? $this->mediaResolver->resolveSrcSetByDensity($imageTeaserUrl) : ''
        ];

        return $imageTeaser;
    }
}
