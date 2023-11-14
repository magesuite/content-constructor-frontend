<?php

namespace MageSuite\ContentConstructorFrontend\Model\Sort;

interface SorterInterface
{
    public function getIdentifier();
    public function getLabel();
    public function sort($collection, $field, $order);
}
