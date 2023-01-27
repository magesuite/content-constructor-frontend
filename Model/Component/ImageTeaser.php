<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ImageTeaser extends \Magento\Framework\DataObject implements ViewModel, \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide[]|null
     */
    protected $slides = null;

    /**
     * @var ImageTeaser\SlideFactory
     */
    protected $slideFactory;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\SlideFactory $slideFactory,
        array $data = []
    )
    {
        parent::__construct($data);
        $this->slideFactory = $slideFactory;
    }

    public function getSlides() {
        if($this->slides == null) {
            $this->slides = [];

            foreach($this->getData('items') as $slide) {
                $this->slides[] = $this->slideFactory->create(['data' => $slide]);
            }
        }

        return $this->slides;
    }

    public function replaceHtmlTagsWithWhiteSpaces(string $string): string
    {
        $string = html_entity_decode($string, ENT_DISALLOWED);
        $string = preg_replace('#<[^>]+>#', ' ', $string);
        $string = preg_replace('/\s+/u', ' ', $string);
        $string = filter_var($string, FILTER_SANITIZE_ADD_SLASHES);
        return trim($string);
    }
}
