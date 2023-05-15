<?php

namespace MageSuite\ContentConstructorFrontend\Model\Sort;

class AttributeSorter implements SorterInterface
{
    public function sort($collection, $field, $order)
    {
        $collection->addAttributeToSelect($field);
        $collection->setOrder($field, strtolower($order));

        return $collection;
    }

    /**
     * Built in attribute sorter has no unique identifier
     * @return null
     */
    public function getIdentifier()
    {
        return null;
    }

    /**
     * Built in attribute sorter has no unique label
     * @return null
     */
    public function getLabel()
    {
        return null;
    }
}
