<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ImageTeaserLegacy extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaserLegacy\Slide[]|null
     */
    protected $slides = null;

    /**
     * @var ImageTeaserLegacy\SlideFactory
     */
    protected $slideFactory;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaserLegacy\SlideFactory $slideFactory,
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
}
