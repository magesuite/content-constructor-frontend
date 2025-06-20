<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class NavigationDataProvider
{
    public const MEDIA_CATEGORY_PATH = 'pub/media/catalog/category';

    protected \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository;
    protected \MageSuite\ContentConstructorFrontend\Helper\Category $categoryHelper;
    protected \MageSuite\Frontend\Helper\Category $categoryFrontendHelper;
    protected \Magento\Store\Model\StoreManagerInterface $storeManager;
    protected \MageSuite\Frontend\Model\Category\Tree $categoryTree;
    protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver;
    protected \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration;

    public function __construct(
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \MageSuite\ContentConstructorFrontend\Helper\Category $categoryHelper,
        \MageSuite\Frontend\Helper\Category $categoryFrontendHelper,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \MageSuite\Frontend\Model\Category\Tree $categoryTree,
        \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->categoryHelper = $categoryHelper;
        $this->categoryFrontendHelper = $categoryFrontendHelper;
        $this->storeManager = $storeManager;
        $this->categoryTree = $categoryTree;
        $this->mediaResolver = $mediaResolver;
        $this->configuration = $configuration;
    }

    public function getNavigationStructure(?int $categoryId = null, bool $returnOnlyIncludedInMenu = true): array
    {
        $items = [];

        if (!$categoryId) {
            $categoryId = $this->storeManager->getStore()->getRootCategoryId();
        }

        $rootCategory = $this->categoryRepository->get($categoryId);

        $childCategories = $this->getChildrenCategories($rootCategory);

        /** @var \Magento\Catalog\Model\Category $category */
        foreach ($childCategories as $category) {
            $tree = $this->buildCategoryTree($category, $returnOnlyIncludedInMenu);

            if ($tree == null) {
                continue;
            }

            $items[] = $tree;
        }

        return ['items' => $items];
    }

    protected function buildCategoryTree(\Magento\Catalog\Model\Category $category, bool $returnOnlyIncludedInMenu): ?array
    {
        if ($returnOnlyIncludedInMenu and !$category->getIncludeInMenu()) {
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
            'number_of_products' => $this->categoryHelper->getNumberOfProducts($category, false),
            'do_not_expand_flyout' => $category->getDoNotExpandFlyout(),
            'category_custom_url' => $this->categoryFrontendHelper->prepareCategoryCustomUrl($category->getCategoryCustomUrl()),
            'featured_products_header' => $category->getFeaturedProductsHeader(),
            'featured_products' => $this->categoryFrontendHelper->getFeaturedProducts($category),
            'image_teaser' => $this->getImageTeaser($category) ?? false
        ];

        if ($category->hasChildren()) {
            $children = $this->getChildrenCategories($category);

            $result['hasChildren'] = true;

            $subcategories = [];

            foreach ($children as $child) {
                $tree = $this->buildCategoryTree($child, $returnOnlyIncludedInMenu);

                if ($tree == null) {
                    continue;
                }

                $subcategories[] = $tree;
            }

            if ($this->configuration->isSortAlphabeticallyEnabled()) {
                usort($subcategories, function ($a, $b) {
                    setlocale(LC_ALL, 'en_GB'); //phpcs:ignore
                    $c = iconv('UTF-8', 'ASCII//TRANSLIT', $a['label']);
                    $d = iconv('UTF-8', 'ASCII//TRANSLIT', $b['label']);
                    return ($c <=> $d);
                });
            }

            $result['subcategories'] = $subcategories;
        }

        return $result;
    }

    protected function getChildrenCategories(\Magento\Catalog\Model\Category $category): \Magento\Catalog\Model\ResourceModel\Category\Collection
    {
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
            'image_teaser_alt',
            'image_teaser'
        ]);
        $categories->load();

        return $categories;
    }

    protected function getImageTeaser(\Magento\Catalog\Model\Category $category): ?array
    {
        if ($category->getLevel() != 2) {
            return null;
        }

        $categoryData = $category->getData();
        $imageTeaserUrl = (isset($categoryData['image_teaser']) and $categoryData['image_teaser']) ? $this->categoryFrontendHelper->getImageTeaser($categoryData['image_teaser']) : '';

        return [
            'image' => (isset($categoryData['image_teaser']) and $categoryData['image_teaser']) ? $this->categoryFrontendHelper->getImageTeaser($categoryData['image_teaser']) : '',
            'headline' => $categoryData['image_teaser_headline'] ?? '',
            'subheadline' => $categoryData['image_teaser_subheadline'] ?? '',
            'paragraph' => $categoryData['image_teaser_paragraph'] ?? '',
            'button_label' => $categoryData['image_teaser_button_label'] ?? '',
            'button_link' => (isset($categoryData['image_teaser_button_link']) and $categoryData['image_teaser_button_link']) ? $this->categoryFrontendHelper->prepareCategoryCustomUrl($categoryData['image_teaser_button_link']) : '',
            'image_alt' => $categoryData['image_teaser_alt'] ?? '',
            'src_set' => $imageTeaserUrl ? $this->mediaResolver->resolveSrcSetByDensity($imageTeaserUrl) : ''
        ];
    }
}
