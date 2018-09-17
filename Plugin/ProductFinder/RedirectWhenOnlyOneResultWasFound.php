<?php

namespace MageSuite\ContentConstructorFrontend\Plugin\ProductFinder;

class RedirectWhenOnlyOneResultWasFound
{
    /**
     * @var \Magento\Catalog\Model\Layer\Resolver
     */
    protected $layerResolver;

    /**
     * @var \Magento\Framework\Controller\ResultFactory
     */
    protected $resultFactory;

    public function __construct(
        \Magento\Catalog\Model\Layer\Resolver $layerResolver,
        \Magento\Framework\Controller\ResultFactory $resultFactory
    )
    {
        $this->layerResolver = $layerResolver;
        $this->resultFactory = $resultFactory;
    }

    public function aroundExecute(
        \Magento\Catalog\Controller\Category\View $subject,
        \Closure $proceed
    )
    {
        $result = $proceed();

        $params = $subject->getRequest()->getParams();

        if (!$this->customerCameFromProductFinder($params)) {
            return $result;
        }

        if (!$subject->getResponse()->isRedirect()) {
            $layer = $this->layerResolver->get();
            $productCollection = $layer->getProductCollection();

            if ($productCollection->getCurPage() === 1 && $productCollection->getSize() === 1) {
                /** @var \Magento\Catalog\Api\Data\ProductInterface $product */
                $product = $productCollection->getFirstItem();

                if ($product->getId()) {
                    $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
                    $result->setUrl($product->getProductUrl());
                }
            }
        }

        return $result;
    }

    /**
     * @param $params
     * @return bool
     */
    protected function customerCameFromProductFinder($params)
    {
        return isset($params['search_origin']) and !empty($params['search_origin']) and $params['search_origin'] = 'product_finder';
    }

}
