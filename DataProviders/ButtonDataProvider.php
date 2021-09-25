<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class ButtonDataProvider
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\UrlResolver
     */
    protected $urlResolver;

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\Category
     */
    protected $categoryHelper;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver,
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \MageSuite\ContentConstructorFrontend\Helper\Category $categoryHelper
    ) {
        $this->urlResolver = $urlResolver;
        $this->categoryRepository = $categoryRepository;
        $this->categoryHelper = $categoryHelper;
    }

    public function addCategoryInformation($buttonConfiguration)
    {
        if (!isset($buttonConfiguration['target'])) {
            return $buttonConfiguration;
        }

        if ($this->urlResolver->getEntityType($buttonConfiguration['target']) == \MageSuite\ContentConstructorFrontend\Service\UrlResolver::TYPE_CATEGORY) {
            try {
                $categoryId = $this->urlResolver->getEntityId($buttonConfiguration['target'], \MageSuite\ContentConstructorFrontend\Service\UrlResolver::TYPE_CATEGORY);
                $category = $this->categoryRepository->get($categoryId);
                $buttonConfiguration['number_of_products'] = $this->categoryHelper->getNumberOfProducts($category);
            } catch (\Magento\Framework\Exception\NoSuchEntityException $exception) { //phpcs:ignore

            }
        }

        return $buttonConfiguration;
    }
}
