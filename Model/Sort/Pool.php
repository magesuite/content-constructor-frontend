<?php

namespace MageSuite\ContentConstructorFrontend\Model\Sort;

class Pool
{
    protected $sorters = [];

    /**
     * @var \Magento\Catalog\Model\Config\Source\ListSort
     */
    protected $sortableAttributesProvider;

    /**
     * @var array
     */
    protected $additionalSorters;

    /**
     * @var AttributeSorter
     */
    protected $attributeSorter;

    public function __construct(
        \Magento\Catalog\Model\Config\Source\ListSort $sortableAttributesProvider,
        AttributeSorter $attributeSorter,
        $sorters = []
    )
    {
        $this->sortableAttributesProvider = $sortableAttributesProvider;
        $this->additionalSorters = $sorters;
        $this->attributeSorter = $attributeSorter;
    }

    public function getSorters() {
        if(empty($this->sorters)) {
            $this->buildAttributeSorters();
            $this->buildAdditionalSorters();
        }

        return $this->sorters;
    }

    /**
     * @param $identifier
     * @return SorterInterface
     */
    public function getSorter($identifier) {
        $sorters = $this->getSorters();

        if(!isset($sorters[$identifier])) {
            return null;
        }

        if(!isset($sorters[$identifier]['sorter_object'])) {
            return null;
        }

        return $sorters[$identifier]['sorter_object'];
    }

    protected function buildAttributeSorters()
    {
        $builtInAttributeSorters = $this->sortableAttributesProvider->toOptionArray();

        foreach ($builtInAttributeSorters as $sorter) {
            $this->sorters[$sorter['value']] = [
                'label' => $sorter['label'],
                'value' => $sorter['value'],
                'sorter_object' => $this->attributeSorter
            ];
        }
    }

    protected function buildAdditionalSorters()
    {
        /** @var SorterInterface $additionalSorter */
        foreach ($this->additionalSorters as $additionalSorter) {
            if (!$additionalSorter instanceof SorterInterface) {
                throw new \Magento\Framework\Exception\LocalizedException(__("Additional sorter must implement interface SorterInterface"));
            }

            $this->sorters[$additionalSorter->getIdentifier()] = [
                'label' => $additionalSorter->getLabel(),
                'value' => $additionalSorter->getIdentifier(),
                'sorter_object' => $additionalSorter
            ];
        }
    }
}