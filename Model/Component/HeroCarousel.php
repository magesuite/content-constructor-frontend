<?php


namespace MageSuite\ContentConstructorFrontend\Model\Component;


class HeroCarousel extends \Magento\Framework\DataObject implements ViewModel
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
        \MageSuite\ContentConstructorFrontend\Model\Component\HeroCarousel\SlideFactory $slideFactory,
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
