<?php

namespace MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect;

class UrlGenerator
{
    /**
     * @var \Magento\Eav\Model\Config
     */
    protected $eavConfig;

    /**
     * @var \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory
     */
    protected $optionsCollectionFactory;

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    protected $categoryRepository;

    const ADMIN_STORE_ID = 0;

    public function __construct(
        \Magento\Eav\Model\Config $eavConfig,
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $optionsCollectionFactory,
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
    )
    {
        $this->eavConfig = $eavConfig;
        $this->optionsCollectionFactory = $optionsCollectionFactory;
        $this->categoryRepository = $categoryRepository;
    }

    public function generateUrl($categoryId, $attributesValues)
    {
        try {
            $category = $this->categoryRepository->get($categoryId);

            $paramsToSearch = ['search_origin' => 'product_finder'];

            foreach ($attributesValues as $attributeCode => $attributeValues) {
                if (isset($attributeValues['range'])) {
                    $paramsToSearch[$attributeCode] = sprintf('%s-%s', $attributeValues['range'][0], $attributeValues['range'][1]);
                } else if (isset($attributeValues['values'])) {
                    $attribute = $this->eavConfig->getAttribute(\Magento\Catalog\Model\Product::ENTITY, $attributeCode);

                    $valuesMapping = $this->getValuesMapping($attribute);

                    foreach ($attributeValues['values'] as $attributeValue) {
                        if (!isset($valuesMapping[$attributeValue])) {
                            continue;
                        }

                        $paramsToSearch[$attributeCode][] = $valuesMapping[$attributeValue];
                    }
                }
            }

            $query = http_build_query($paramsToSearch);

            return sprintf("%s?%s", $category->getUrl(), $query);
        } catch (\Magento\Framework\Exception\LocalizedException $exception) {
            return null;
        }
    }

    /**
     * Returns array with mapping of admin store attribute labels as keys and current store attribute labels as values
     * @param $attribute
     * @return array
     */
    protected function getValuesMapping($attribute)
    {
        $currentStoreOptions = $attribute->getSource()->getAllOptions();

        $adminOptionsCollection = $this->optionsCollectionFactory
            ->create()
            ->setAttributeFilter($attribute->getId())
            ->setStoreFilter(self::ADMIN_STORE_ID, false)
            ->load();

        $mapping = [];

        foreach ($adminOptionsCollection as $adminStoreOption) {
            foreach ($currentStoreOptions as $currentStoreOption) {
                if ($currentStoreOption['value'] == $adminStoreOption->getId()) {
                    $mapping[$adminStoreOption->getValue()] = $currentStoreOption['label'];
                }
            }
        }

        return $mapping;
    }
}