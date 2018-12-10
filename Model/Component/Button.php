<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class Button extends \Magento\Framework\DataObject
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\UrlResolver
     */
    private $urlResolver;

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\Category
     */
    private $categoryHelper;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver,
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \MageSuite\ContentConstructorFrontend\Helper\Category $categoryHelper,
        array $data = []
    )
    {
        $this->urlResolver = $urlResolver;
        $this->categoryRepository = $categoryRepository;
        $this->categoryHelper = $categoryHelper;

        parent::__construct($data);
    }

    public function getNumberOfProducts()
    {
        $buttonConfiguration = $this->getData();

        if(!isset($buttonConfiguration['target'])) {
            null;
        }

        if($this->urlResolver->getEntityType($buttonConfiguration['target']) == \MageSuite\ContentConstructorFrontend\Service\UrlResolver::TYPE_CATEGORY) {
            try {
                $categoryId = $this->urlResolver->getEntityId($buttonConfiguration['target'], \MageSuite\ContentConstructorFrontend\Service\UrlResolver::TYPE_CATEGORY);
                $category = $this->categoryRepository->get($categoryId);
                return $this->categoryHelper->getNumberOfProducts($category);
            }
            catch(\Magento\Framework\Exception\NoSuchEntityException $exception) {
                return null;
            }
        }

        return null;
    }

    public function getHref() {
        $configuration = $this->getData();

        if(isset($configuration['target']) and !empty($configuration['target'])) {
            return $this->urlResolver->resolve($configuration['target']);
        }

        return null;
    }
}
