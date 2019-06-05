<?php
namespace MageSuite\ContentConstructorFrontend\Service;

class DirectiveFilter extends \Magento\Framework\Filter\Template
{
    protected $allowedAttributes = [
        'price',
        'sku',
        'qty'
    ];
    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $productRepository;
    /**
     * @var \Magento\Framework\Pricing\Helper\Data
     */
    private $pricingHelper;

    public function __construct(
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\Helper\Data $pricingHelper,
        array $variables = []
    )
    {
        parent::__construct($string, $variables);
        $this->productRepository = $productRepository;
        $this->pricingHelper = $pricingHelper;
    }

    /**
     * Filter the string as template.
     *
     * @param string $value
     * @return string
     * @throws \Exception
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function filter($value)
    {
        foreach ($this->allowedAttributes as $attribute) {
            if (preg_match_all(sprintf('/{{(%s)(.*?)}}/si', $attribute), $value, $constructions, PREG_SET_ORDER)) {
                foreach ($constructions as $construction) {
                    $callback = [$this, $attribute . 'Directive'];
                    if (!is_callable($callback)) {
                        continue;
                    }
                    try {
                        $replacedValue = call_user_func($callback, $construction);
                    } catch (\Exception $e) {
                        throw $e;
                    }
                    $value = str_replace($construction[0], $replacedValue, $value);
                }
            }
        }

        $value = $this->afterFilter($value);
        return $value;
    }

    public function getSku($construction)
    {
        if (!isset($construction[2])) {
            return '';
        }
        $sku = str_replace("\"", "", $construction[2]);
        $sku = str_replace(" sku=", "", $sku);

        return $sku;
    }

    public function getProduct($construction)
    {
        $sku = $this->getSku($construction);

        if(!$sku){
            return null;
        }

        return $this->productRepository->get($sku);
    }

    public function priceDirective($construction)
    {
        $product = $this->getProduct($construction);

        return $this->pricingHelper->currency($product->getFinalPrice(), true, false);
    }

    public function skuDirective($construction)
    {
        $product = $this->getProduct($construction);

        return $product->getSku();
    }

    public function qtyDirective($construction)
    {
        $product = $this->getProduct($construction);

        return $product->getQty();
    }

}