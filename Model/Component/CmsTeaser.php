<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class CmsTeaser extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\CmsTeaserDataProvider
     */
    protected $dataProvider;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaser\Slide[]
     */
    protected $slides;

    /**
     * @var CmsTeaser\SlideFactory
     */
    protected $slideFactory;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\CmsTeaserDataProvider $dataProvider,
        \MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaser\SlideFactory $slideFactory,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->dataProvider = $dataProvider;
        $this->slideFactory = $slideFactory;
    }

    public function getSlides() 
    {
        $pages = $this->dataProvider->getPages($this->getData());

        if ($this->slides == null) {
            $this->slides = [];

            foreach ($pages as $page) {
                $slide = [
                    'image' => [
                        'decoded' => $page['image']['src']
                    ],
                    'cta' => [
                        'href' => $page['href'],
                        'label' => ''
                    ],
                    'slogan' => $page['headline'],
                    'description' => ''
                ];

                $this->slides[] = $slide;
            }
        }

        return $this->slides;
    }
}