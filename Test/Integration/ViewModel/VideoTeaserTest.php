<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\ViewModel;

class VideoTeaserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\ViewModel\VideoTeaser
     */
    protected $videoTeaser;

    protected function setUp(): void
    {
        $objectManager = \Magento\TestFramework\ObjectManager::getInstance();
        $this->videoTeaser = $objectManager->get(\MageSuite\ContentConstructorFrontend\ViewModel\VideoTeaser::class);
    }

    public function testItReturnsCorrectVideoUrlForMp4File()
    {
        $fileData = [
            'type' => 'file',
            'url' => '{{media url="video/cat3.mp4"}}'
        ];
        $expectedData = [
            'type' => 'file',
            'url' => 'http://localhost/media/video/cat3.mp4'
        ];
        $this->assertEquals($expectedData, $this->videoTeaser->prepareVideoUrl($fileData));
    }

    public function testItReturnsCorrectVideoUrlForYoutube()
    {
        $data = [
            'type' => 'youtube',
            'url' => 'https://www.youtube.com/watch?v=j2Be5rgnQmU'
        ];
        $this->assertEquals($data, $this->videoTeaser->prepareVideoUrl($data));
    }
}
