<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class InstagramFeed extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide[]|null
     */
    protected $slides = null;

    /**
     * @var ImageTeaser\SlideFactory
     */
    protected $slideFactory;
    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\InstagramFeedDataProvider
     */
    private $instagramFeedDataProvider;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\SlideFactory $slideFactory,
        \MageSuite\ContentConstructorFrontend\DataProviders\InstagramFeedDataProvider $instagramFeedDataProvider,
        array $data = []
    )
    {
        parent::__construct($data);
        $this->slideFactory = $slideFactory;
        $this->instagramFeedDataProvider = $instagramFeedDataProvider;
    }

    public function getFeedData($numberOfSlides) {
        return $this->instagramFeedDataProvider->getFeedData($numberOfSlides);
    }
}
