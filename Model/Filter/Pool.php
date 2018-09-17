<?php

namespace MageSuite\ContentConstructorFrontend\Model\Filter;

class Pool
{
    protected $filters = [];

    /**
     * @var array
     */
    protected $additionalFilters;

    public function __construct($filters = [])
    {
        $this->additionalFilters = $filters;
    }

    /**
     * @param $identifier
     * @return FilterInterface
     */
    public function getFilter($identifier) {
        $filters = $this->getFilters();

        if(!isset($filters[$identifier])) {
            return null;
        }

        if(!isset($filters[$identifier]['filter_object'])) {
            return null;
        }

        return $filters[$identifier]['filter_object'];
    }

    public function getFilters() {
        if(empty($this->filters)) {
            $this->buildAdditionalFilters();
        }

        return $this->filters;
    }

    protected function buildAdditionalFilters()
    {
        /** @var FilterInterface $additionalFilter */
        foreach ($this->additionalFilters as $additionalFilter) {
            if(!$additionalFilter instanceof FilterInterface) {
                throw new \Magento\Framework\Exception\LocalizedException(__("Additional filter must implement interface FilterInterface"));
            }

            $this->filters[$additionalFilter->getIdentifier()] = [
                'label' => $additionalFilter->getLabel(),
                'value' => $additionalFilter->getIdentifier(),
                'filter_object' => $additionalFilter
            ];
        }
    }
}