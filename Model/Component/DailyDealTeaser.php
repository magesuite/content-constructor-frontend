<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class DailyDealTeaser extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider
     */
    protected $dailyDealTeaserDataProvider;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider $dailyDealTeaserDataProvider,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->dailyDealTeaserDataProvider = $dailyDealTeaserDataProvider;
    }

    public function getProduct() {
        $configuration = $this->getData();

        $configuration['filter_attributes'] = [
            'daily_deal_enabled' => [
                'value' => 1,
                'operator' => 'eq'
            ]
        ];

        return $this->dailyDealTeaserDataProvider->getProduct($configuration);
    }
}
