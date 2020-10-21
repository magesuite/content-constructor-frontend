<?php

namespace MageSuite\ContentConstructorFrontend\Model\Filter;

class DailyDeal implements FilterInterface
{
    const IDENTIFIER = 'daily_deal';

    /**
     * @var \Magento\CatalogInventory\Model\ResourceModel\Stock\Status
     */
    protected $status;

    public function __construct(\Magento\CatalogInventory\Model\ResourceModel\Stock\Status $status)
    {
        $this->status = $status;
    }

    public function getIdentifier()
    {
        return self::IDENTIFIER;
    }

    public function getLabel()
    {
        return 'Daily Deal';
    }

    public function filter($collection)
    {
        $collection->addIsInStockFilter()
            ->addAttributeToFilter('daily_deal_enabled', ['eq' => 1]);

        return $collection;
    }
}
