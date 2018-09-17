<?php

namespace MageSuite\ContentConstructorFrontend\Model\Filter;

class NewProducts implements FilterInterface
{
    public function getIdentifier()
    {
        return 'new_products';
    }

    public function getLabel()
    {
        return 'New products';
    }

    public function filter($collection)
    {
        $now = new \DateTime();

        $collection->addAttributeToSelect('news_from_date');
        $collection->addAttributeToSelect('news_to_date');
        $collection->addFieldToFilter('news_from_date', ['lteq' => $now->format('Y-m-d 00:00:00')]);
        $collection->addFieldToFilter('news_to_date', ['gteq' => $now->format('Y-m-d 23:59:59')]);

        return $collection;
    }
}