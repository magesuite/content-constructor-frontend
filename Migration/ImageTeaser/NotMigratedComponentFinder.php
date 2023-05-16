<?php

namespace MageSuite\ContentConstructorFrontend\Migration\ImageTeaser;

class NotMigratedComponentFinder
{
    const COMPONENTS_WITH_IMAGE_TEASER = ['hero-carousel', 'product-grid', 'image-teaser', 'image-teaser-2', 'icon', 'teaser-and-text'];
    const CMS_RESULT_FORMAT = '%s "%s" (%s) contains not migrated component %s, component name "%s"';
    const STORE_SPECIFIC_RESULT_FORMAT = '%s "%s" (%s) contains not migrated component %s in store %s, component name "%s"';

    protected $types = [
        'page' => [
            'layoutXmlKey' => 'layout_update_xml',
            'identifier' => 'identifier'
        ],
        'category' => [
            'layoutXmlKey' => 'custom_layout_update',
            'identifier' => 'entity_id'
        ],
        'product' => [
            'layoutXmlKey' => 'custom_layout_update',
            'identifier' => 'sku'
        ]
    ];

    /**
     * @var \Magento\Cms\Model\ResourceModel\Page\CollectionFactory
     */
    protected $pageCollectionFactory;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory
     */
    protected $categoryCollectionFactory;

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    protected $productCollectionFactory;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper
     */
    protected $xmlToComponentConfigurationMapper;

    public function __construct(
        \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \MageSuite\ContentConstructorAdmin\Repository\Xml\XmlToComponentConfigurationMapper $xmlToComponentConfigurationMapper
    ) {
        $this->pageCollectionFactory = $pageCollectionFactory;
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->storeManager = $storeManager;
        $this->xmlToComponentConfigurationMapper = $xmlToComponentConfigurationMapper;
    }

    public function execute()
    {

        $cmsPages = $this->findInCmsPages();
        $categories = $this->findInCategories();
        $products = $this->findInProducts();

        $result = array_merge($cmsPages, $categories, $products);

        return implode(PHP_EOL, $result);
    }

    protected function findInCmsPages()
    {
        $pageCollection = $this->getCmsPagesCollection();

        if (empty($pageCollection)) {
            return [];
        }

        return $this->getNonMigratedComponents($pageCollection, 'page');
    }

    protected function findInCategories()
    {
        $result = [];

        foreach ($this->storeManager->getStores(true) as $store) {
            $categoryCollection = $this->getCategoriesCollection($store);

            if (empty($categoryCollection)) {
                return [];
            }

            $result[] = $this->getNonMigratedComponents($categoryCollection, 'category', $store->getCode());
        }

        return array_merge(...$result);
    }

    protected function findInProducts()
    {
        $result = [];

        foreach ($this->storeManager->getStores(true) as $store) {
            $productCollection = $this->getProductCollection($store);

            if (empty($productCollection)) {
                return [];
            }

            $result[] = $this->getNonMigratedComponents($productCollection, 'product', $store->getCode());
        }

        return array_merge(...$result);
    }

    private function getCmsPagesCollection()
    {
        $collection = $this->pageCollectionFactory->create();
        $collection
            ->addFieldToSelect(['identifier', 'layout_update_xml'])
            ->addFieldToFilter('layout_update_xml', ['notnull' => true])
            ->addFieldToFilter('layout_update_xml', ['neq' => '']);

        return $collection->getItems();
    }

    private function getCategoriesCollection($store)
    {
        $collection = $this->categoryCollectionFactory->create();
        $collection
            ->setStore($store)
            ->addFieldToSelect(['entity_id', 'custom_layout_update'])
            ->addFieldToFilter('custom_layout_update', ['notnull' => true])
            ->addFieldToFilter('custom_layout_update', ['neq' => '']);

        return $collection->getItems();
    }

    private function getProductCollection($store)
    {
        $collection = $this->productCollectionFactory->create();
        $collection
            ->addStoreFilter($store)
            ->addFieldToSelect(['sku', 'custom_layout_update'])
            ->addFieldToFilter('custom_layout_update', ['notnull' => true])
            ->addFieldToFilter('custom_layout_update', ['neq' => '']);

        return $collection->getItems();
    }

    protected function getNonMigratedComponents($collection, $type, $storeCode = null)
    {
        $result = [];

        foreach ($collection as $item) {
            $components = $this->getComponentsWithImageTeaser($item->getData($this->types[$type]['layoutXmlKey']));

            if (empty($components)) {
                continue;
            }

            foreach ($components as $component) {
                $isMigrated = $this->isComponentMigrated($component);

                if ($isMigrated) {
                    continue;
                }

                if (!empty($storeCode)) {
                    $result[] = sprintf(
                        self::STORE_SPECIFIC_RESULT_FORMAT,
                        ucfirst($type),
                        $item->getData($this->types[$type]['identifier']),
                        $this->types[$type]['identifier'],
                        $component['type'],
                        $storeCode,
                        $component['id']
                    );
                } else {
                    $result[] = sprintf(
                        self::CMS_RESULT_FORMAT,
                        ucfirst($type),
                        $item->getData($this->types[$type]['identifier']),
                        $this->types[$type]['identifier'],
                        $component['type'],
                        $component['id']
                    );
                }


            }
        }

        return $result;
    }

    private function getComponentsWithImageTeaser($layoutUpdateXml)
    {
        $components = $this->xmlToComponentConfigurationMapper->map($layoutUpdateXml);

        $componentsWithImageTeaser = [];

        foreach ($components as $component) {
            if (!in_array($component['type'], self::COMPONENTS_WITH_IMAGE_TEASER)) {
                continue;
            }

            $componentsWithImageTeaser[] = $component;
        }

        return $componentsWithImageTeaser;
    }

    private function isComponentMigrated($component)
    {
        if (!isset($component['data']) || !isset($component['data']['items'])) {
            return true;
        }

        foreach ($component['data']['items'] as $item) {
            if (!isset($item['slogan'])) {
                return false;
            }
        }

        return true;
    }

}
