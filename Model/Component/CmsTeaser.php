<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class CmsTeaser extends \Magento\Framework\DataObject implements ViewModel
{
    protected const DUMMY_TEASER_IMAGE_URL = '/catalog/category/erin_teaser.png';

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

    protected \Magento\Framework\App\Request\Http $request;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\DataProviders\CmsTeaserDataProvider $dataProvider,
        \MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaser\SlideFactory $slideFactory,
        \Magento\Framework\App\Request\Http $request,
        array $data = []
    ) {
        parent::__construct($data);
        $this->request = $request;
        $this->dataProvider = $dataProvider;
        $this->slideFactory = $slideFactory;
    }

    public function getSlides()
    {
        $loadSampleImagesIfNotProvided = $this->request->getFullActionName() == 'contentconstructor_components_index';
        $pages = $this->dataProvider->getPages($this->getData());

        if ($this->slides == null) {
            $this->slides = [];

            foreach ($pages as $page) {
                $imageUrl = $page['image']['src'];

                if ($loadSampleImagesIfNotProvided && empty($page['image']['src'])) {
                    $imageUrl = self::DUMMY_TEASER_IMAGE_URL;
                }

                $slide = [
                    'image' => [
                        'decoded' => $imageUrl
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
