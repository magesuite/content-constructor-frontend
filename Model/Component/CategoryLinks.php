<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class CategoryLinks extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider
     */
    protected $dataProvider;

    /**
     * @var array|null
     */
    protected $categories = null;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\CategoryLinksDataProvider $dataProvider,
        array $data = []
    )
    {
        parent::__construct($data);
        $this->dataProvider = $dataProvider;
    }

    public function getCategories() {
        if($this->categories == null) {
            $configuration = $this->getData();

            $this->categories = $this->dataProvider->getCategories(
                $configuration['main_category_id'],
                explode(',', $configuration['sub_categories_ids'])
            );
        }

        return $this->categories;
    }

    public function hasSubcategories() {
        $categories = $this->getCategories();
        $subCategories = $categories['sub_categories'];

        return count($subCategories) > 0;
    }

    public function shouldShowProductsCount() {
        return $this->getData('shownumbers');
    }
}
