<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class CmsTeaserDataProvider implements \MageSuite\ContentConstructor\Components\CmsTeaser\DataProvider
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;
    /**
     * @var \Magento\Cms\Model\ResourceModel\Page\CollectionFactory
     */
    private $cmsPageCollectionFactory;
    /**
     * @var \MageSuite\CmsTagManager\Service\Mapper\CmsPageDataMapper
     */
    private $cmsPageDataMapper;

    public function __construct(
        \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $cmsPageCollectionFactory,
        \MageSuite\CmsTagManager\Service\Mapper\CmsPageDataMapper $cmsPageDataMapper,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        $this->cmsPageCollectionFactory = $cmsPageCollectionFactory;
        $this->cmsPageDataMapper = $cmsPageDataMapper;
        $this->storeManager = $storeManager;
    }

    /**
     * @param array $configuration
     * @return array
     */
    public function getPages($configuration)
    {
        $currentStore = $this->storeManager->getStore();
        $limit = ($configuration['limit'] != 1000) ? $configuration['limit'] : null;

        $pagesCollection = $this->cmsPageCollectionFactory->create();

        $pagesCollection->addStoreFilter($currentStore);
        $pagesCollection->addFieldToFilter('is_active', 1);
        $pagesCollection->setPageSize($limit);
        $this->buildCollectionFilters($configuration, $pagesCollection);

        $pagesData = [];

        foreach ($pagesCollection as $page) {
            $pagesData[] = $this->cmsPageDataMapper->mapPage($page);
        }

        $pagesData = $this->sortResults($pagesData, $configuration);

        return $pagesData;
    }

    /**
     * @param $configuration
     * @param $pagesCollection
     * @return mixed
     */
    protected function buildCollectionFilters($configuration, $pagesCollection)
    {
        if (isset($configuration['ids']) and !empty($configuration['ids'])) {
            $ids = explode(',', $configuration['ids']);

            $pagesCollection->addFieldToFilter('page_id', ['in' => $ids]);

            return;
        }

        if (isset($configuration['tags']) and !empty($configuration['tags'])) {
            $tags = explode(',', $configuration['tags']);

            $pagesCollection->setOrder('creation_time', 'DESC')
                ->addFieldToFilter('cms_page_tags', ['in' => $tags]);
        }
    }

    /**
     * If IDs of cms pages are passed results needs to be sorted to reflect their order
     * @param $pages
     * @param $criteria
     */
    protected function sortResults($pages, $configuration)
    {
        if (!isset($configuration['ids']) or empty($configuration['ids'])) {
            return $pages;
        }

        $ids = explode(',', $configuration['ids']);

        $sortedPages = [];

        foreach ($pages as $page) {
            $sortedPages[array_search($page['id'], $ids)] = $page;
        }

        ksort($sortedPages);

        return $sortedPages;
    }
}