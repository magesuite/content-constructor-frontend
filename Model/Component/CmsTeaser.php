<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class CmsTeaser extends \Magento\Framework\DataObject
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

    public function getSlides() {
        $pages = $this->dataProvider->getPages($this->getData());

        if($this->slides == null) {
            $this->slides = [];

            foreach($pages as $page) {
                $this->slides[] = $this->slideFactory->create(['data' => $page]);
            }
        }

        return $this->slides;
    }
}