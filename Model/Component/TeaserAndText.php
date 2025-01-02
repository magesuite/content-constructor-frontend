<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class TeaserAndText extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide[]|null
     */
    protected $slides = null;

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\SlideFactory $slideFactory,
        array $data = []
    ) {
        parent::__construct($data);
    }

    public function getSlides() {
        if($this->slides == null) {
            $this->slides = [];

            foreach($this->getData('items') as $slide) {
                $slide = $this->slideFactory->create(['data' => $slide]);

                if (!$slide->canBeDisplayed()) {
                    continue;
                }

                $this->slides[] = $slide;
            }
        }

        return $this->slides;
    }
}
