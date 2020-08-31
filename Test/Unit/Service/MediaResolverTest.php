<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class MediaResolverTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\Framework\App\Filesystem\DirectoryList
     */
    protected $directoryListStub;

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\MediaResolver
     */
    private $mediaResolver;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->directoryListStub = $this
            ->getMockBuilder(\Magento\Framework\App\Filesystem\DirectoryList::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->mediaResolver = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Service\MediaResolver::class,
            ['directoryList' => $this->directoryListStub]
        );

    }

    public function testItImplementsMediaResolverInterface()
    {
        $this->assertInstanceOf(\MageSuite\ContentConstructor\Service\MediaResolver::class, $this->mediaResolver);
    }

    public function testItCorrectlyResolvesMediaPath()
    {
        $this->assertEquals(
            'http://localhost/pub/media/wysiwyg/test.png',
            $this->mediaResolver->resolve('{{media url="wysiwyg/test.png"}}')
        );

        $this->assertEquals(
            'http://localhost/pub/media/wysiwyg/test.gif',
            $this->mediaResolver->resolve('{{media url="wysiwyg/test.gif"}}')
        );
    }

    public function testItReturnsUrlDirectlyWhenItsPassed() {
        $this->assertEquals(
            'https://example.com/image.png',
            $this->mediaResolver->resolve('https://example.com/image.png')
        );
    }

    public function testItCorrectlyResolvesSrcSet()
    {
        $wysiwygUploadDirectoryPath = realpath(__DIR__ . '/../assets');

        $this->directoryListStub->method('getPath')->willReturn($wysiwygUploadDirectoryPath);

        $this->assertEquals(
            'http://localhost/pub/media/wysiwyg/test.jpg 1920w, http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg 480w, http://localhost/pub/media/wysiwyg/.thumbs/768/test.jpg 768w',
            $this->mediaResolver->resolveSrcSet('{{media url="wysiwyg/test.jpg"}}')
        );
    }

    public function testItReturnsUrlDirectlyInSrcSetWhenItsPassed() {
        $this->assertEquals(
            'https://example.com/image.png',
            $this->mediaResolver->resolveSrcSet('https://example.com/image.png')
        );
    }

    public function testItCorrectlyResolvesSrcSetByDensity()
    {
        $wysiwygUploadDirectoryPath = realpath(__DIR__ . '/../assets');

        $this->directoryListStub->method('getPath')->willReturn($wysiwygUploadDirectoryPath);

        $this->assertEquals(
            'http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg, http://localhost/pub/media/wysiwyg/.thumbs/960/test.jpg 2x',
            $this->mediaResolver->resolveSrcSetByDensity('{{media url="wysiwyg/test.jpg"}}')
        );
    }

    public function testItCorrectlyResolvesSrcSetIncludingWebp()
    {
        $this->assertEquals(
            'http://localhost/pub/media/wysiwyg/test.jpg.webp 1920w, http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg.webp 480w, http://localhost/pub/media/wysiwyg/.thumbs/768/test.jpg.webp 768w',
            $this->mediaResolver->resolveWebpSrcSet('http://localhost/pub/media/wysiwyg/test.jpg 1920w, http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg 480w, http://localhost/pub/media/wysiwyg/.thumbs/768/test.jpg 768w')
        );

        $this->assertEquals(
            'http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg.webp, http://localhost/pub/media/wysiwyg/.thumbs/960/test.jpg.webp 2x',
            $this->mediaResolver->resolveWebpSrcSet('http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg, http://localhost/pub/media/wysiwyg/.thumbs/960/test.jpg 2x')
        );
    }

    public function testItReturnsUrlDirectlyInDensityBasedSrcSetWhenItsPassed() {
        $this->assertEquals(
            'https://example.com/image.png',
            $this->mediaResolver->resolveSrcSetByDensity('https://example.com/image.png')
        );
    }

    public function testItReturnsEmptySrcSetWhenFileDoesNotExist()
    {
        $wysiwygUploadDirectoryPath = realpath(__DIR__ . '/../assets');

        $this->directoryListStub->method('getPath')->willReturn($wysiwygUploadDirectoryPath);

        $this->assertEquals(
            '',
            $this->mediaResolver->resolveSrcSet('{{media url="wysiwyg/not_existing.jpg"}}')
        );
    }

    public function testItReturnsEmptySrcSetWhenFileIsGif()
    {
        $wysiwygUploadDirectoryPath = realpath(__DIR__ . '/../assets');

        $this->directoryListStub->method('getPath')->willReturn($wysiwygUploadDirectoryPath);

        $this->assertEquals(
            '',
            $this->mediaResolver->resolveSrcSet('{{media url="wysiwyg/test.gif"}}')
        );
    }

    public function testItCorrectlyResolvesPathsInArray()
    {
        $input = [
            'key' => [
                'subkey' => '{{media url="wysiwyg/test.png}}'
            ],
            'other_key' => 'some_string',
            2 => 2
        ];

        $expectedOutput = [
            'key' => [
                'subkey' => 'http://localhost/pub/media/wysiwyg/test.png'
            ],
            'other_key' => 'some_string',
            2 => 2
        ];

        $result = $this->mediaResolver->resolveInArray($input);

        $this->assertEquals($expectedOutput, $result);
    }
}
