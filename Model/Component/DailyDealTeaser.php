<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class DailyDealTeaser extends \Magento\Framework\DataObject implements ViewModel
{
    protected \MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider $dailyDealTeaserDataProvider;

    protected \Magento\Catalog\Block\Product\ListProduct $listProductBlock;

    protected ?array $product = null;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\DailyDealTeaserDataProvider $dailyDealTeaserDataProvider,
        \Magento\Catalog\Block\Product\ListProduct $listProductBlock,
        array $data = []
    ) {
        parent::__construct($data);

        $this->dailyDealTeaserDataProvider = $dailyDealTeaserDataProvider;
        $this->listProductBlock = $listProductBlock;
    }

    public function getProduct(): array
    {
        if($this->product == null) {
            $configuration = $this->getData();
            $configuration['filter'] = \MageSuite\ContentConstructorFrontend\Model\Filter\DailyDeal::IDENTIFIER;

            $this->product = $this->dailyDealTeaserDataProvider->getProduct($configuration);
        }

        return $this->product;
    }

    public function isConfigurableProduct(): bool
    {
        $product = $this->getProduct()['productObject'];
        if ($product->getTypeId() && $product->getTypeId() == \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE) {
            return true;
        }

        return false;
    }

    public function getAddToCartParameters($product): array
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
