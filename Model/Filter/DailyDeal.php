<?php

namespace MageSuite\ContentConstructorFrontend\Model\Filter;

class DailyDeal implements FilterInterface
{
    const IDENTIFIER = 'daily_deal';

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
            ->addFieldToFilter('daily_deal_enabled', true);

        return $collection;
    }
}
