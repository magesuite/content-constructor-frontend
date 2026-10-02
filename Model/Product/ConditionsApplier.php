<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Product;

class ConditionsApplier
{
    protected const array DATE_ATTRIBUTES = ['special_from_date', 'special_to_date'];

    public function __construct(
        protected \Smile\ElasticsuiteVirtualCategory\Model\RuleFactory $ruleFactory,
        protected \Magento\Widget\Helper\Conditions $conditionsHelper
    ) {
    }

    public function hasConditions(mixed $conditions): bool
    {
        return count($this->decode($conditions)) > 1;
    }

    public function apply(
        \Smile\ElasticsuiteCatalog\Model\ResourceModel\Product\Fulltext\Collection $collection,
        mixed $conditions
    ): void {
        $rule = $this->ruleFactory->create();
        $rule->loadPost(['conditions' => $this->prepareConditions($this->decode($conditions))]);

        $searchQuery = $rule->getConditions()->getSearchQuery();

        if ($searchQuery !== null) {
            $collection->addQueryFilter($searchQuery);
        }
    }

    protected function decode(mixed $conditions): array
    {
        if (is_string($conditions)) {
            return $conditions === '' ? [] : (array) $this->conditionsHelper->decode($conditions);
        }

        return is_array($conditions) ? $conditions : [];
    }

    protected function prepareConditions(array $conditions): array
    {
        foreach ($conditions as $key => $condition) {
            if (in_array((string) ($condition['attribute'] ?? ''), self::DATE_ATTRIBUTES, true)) {
                $conditions[$key]['value'] = date('Y-m-d H:i:s', (int) strtotime((string) $condition['value']));
            }
        }

        return $conditions;
    }
}
