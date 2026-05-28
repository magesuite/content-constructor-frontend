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

    public function generateUrl(int $categoryId, array $attributesValues): ?string
    {
        try {
            $category = $this->categoryRepository->get($categoryId);

            $paramsToSearch = ['search_origin' => 'product_finder'];

            foreach ($attributesValues as $attributeCode => $attributeValues) {
                if (isset($attributeValues['range']) && isset($attributeValues['range'][0]) && isset($attributeValues['range'][1])) {
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
     */
    protected function getValuesMapping(\Magento\Eav\Model\Entity\Attribute $attribute): array
    {
        if (!$attribute?->getId()) {
            return [];
        }

        $currentStoreOptions = $attribute->getSource()->getAllOptions();

        $adminOptionsCollection = $this->optionsCollectionFactory
            ->create()
            ->setAttributeFilter($attribute->getId())
            ->setStoreFilter(\Magento\Store\Model\Store::DEFAULT_STORE_ID, false)
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
