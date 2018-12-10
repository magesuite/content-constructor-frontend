<?php

namespace MageSuite\ContentConstructorFrontend\Block;

class Component extends \Magento\Framework\View\Element\AbstractBlock implements \Magento\Framework\View\Element\BlockInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_LIFETIME = 86400;
    const CACHE_KEY = 'component_html_%s_%s';

    private $component;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ComponentFactory
     */
    private $componentFactory;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \MageSuite\ContentConstructor\Factory\ComponentFactory $componentFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);

        $this->storeManager = $storeManager;
        $this->componentFactory = $componentFactory;

        $componentHash = substr(md5(serialize($this->getData())), 0 ,8);

        $cacheKey = sprintf(
            self::CACHE_KEY,
            $componentHash,
            $this->storeManager->getStore()->getId()
        );

        $serverName = $context->getRequest()->getServer('HTTP_HOST');

        if($serverName != null and !empty($serverName)) {
            $cacheKey .= '_'.md5($serverName);
        }

        $this->setData('cache_key', $cacheKey);
        $this->setData('cache_lifetime', self::CACHE_LIFETIME);
    }

    public function getIdentities()
    {
        if(!$this->component){
            return [];
        }

        $tags = [];

        foreach($this->component->getIdentities() as $identities){

            if(is_string($identities)) {
                $identities = [$identities];
            }

            $tags = array_merge($tags, $identities);
        }

        return $tags;
    }

    public function _toHtml()
    {
        if(!$this->hasData('type')) {
            throw new \InvalidArgumentException("Block must receive it's type in configuration");
        }

        $type = $this->getData('type');
        $componentData = $this->getData('data');
        $classOverrides = $componentData['class_overrides'] ?? [];

        $output = '<!-- new one  -->';

        if($type == 'product-carousel') {
            $output .= $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\ProductCarousel::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'product-grid') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\ProductGrid::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'headline') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\Headline::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'image-teaser') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\ImageTeaser::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'hero-carousel') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\HeroCarousel::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'button') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\Button::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'separator') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\Separator::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'category-links') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\CategoryLinks::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'brand-carousel') {
            $output .=  $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\BrandCarousel::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'custom-html') {
            return $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\CustomHtml::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }
        else if($type == 'paragraph') {
            return $this->getLayout()->createBlock(
                \MageSuite\ContentConstructorFrontend\Block\Component\Paragraph::class,
                '',
                ['data' => $componentData]
            )->toHtml();
        }


        $this->component = $this->componentFactory->create($this->getData('type'), $classOverrides);

        if($this->component == null) {
            return '';
        }

        $output .= '<!-- old one -->';

        $output .= $this->component->render($componentData);

        $output .= '<!-- old one end -->';

        return $output;
    }

    
}