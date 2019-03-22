<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class DailyDealTeaser extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider
     */
    protected $dailyDealTeaserDataProvider;

    /**
     * @var \Magento\Catalog\Block\Product\ListProduct
     */
    protected $listProductBlock;

    protected $product = null;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider $dailyDealTeaserDataProvider,
        \Magento\Catalog\Block\Product\ListProduct $listProductBlock,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->dailyDealTeaserDataProvider = $dailyDealTeaserDataProvider;
        $this->listProductBlock = $listProductBlock;
    }

    public function getProduct() {
        if($this->product == null) {
            $configuration = $this->getData();

            $configuration['filter_attributes'] = [
                'daily_deal_enabled' => [
                    'value' => 1,
                    'operator' => 'eq'
                ]
            ];

            $this->product = $this->dailyDealTeaserDataProvider->getProduct($configuration);
        }

        return $this->product;
    }

    public function getAddToCartParameters($product)
    {
        $postParams = $this->listProductBlock->getAddToCartPostParams($product);

        return [
            'action' => $postParams['action'],
            'productId' => $postParams['data']['product'],
            'uencKey' => \Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED,
            'uencValue' => $postParams['data'][\Magento\Framework\App\Action\Action::PARAM_NAME_URL_ENCODED],
            'formKey' => $this->listProductBlock->getBlockHtml('formkey'),
        ];
    }


}
