<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class CategoryLinks extends \Magento\Framework\DataObject
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider
     */
    protected $dataProvider;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider $dataProvider,
        array $data = []
    )
    {
        parent::__construct($data);
        $this->dataProvider = $dataProvider;
    }

    public function getCategories() {
        $configuration = $this->getData();

        return $this->dataProvider->getCategories(
            $configuration['main_category_id'],
            explode(',', $configuration['sub_categories_ids'])
        );
    }
}
