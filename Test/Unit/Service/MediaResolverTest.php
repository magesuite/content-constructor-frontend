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
    protected $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\MediaResolver
     */
    protected $mediaResolver;

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
        $url = $this->mediaResolver->resolve('{{media url="wysiwyg/test.png"}}');
        $url = str_replace('pub/', '', $url);
        $this->assertEquals(
            'http://localhost/media/wysiwyg/test.png',
            $url
        );

        $url = $this->mediaResolver->resolve('{{media url="wysiwyg/test.gif"}}');
        $url = str_replace('pub/', '', $url);
        $this->assertEquals(
            'http://localhost/media/wysiwyg/test.gif',
            $url
        );
    }

    public function testItReturnsUrlDirectlyWhenItsPassed()
    {
        $this->assertEquals(
            'https://example.com/image.png',
            $this->mediaResolver->resolve('https://example.com/image.png')
        );
    }

    public function testItCorrectlyResolvesSrcSet()
    {
        $wysiwygUploadDirectoryPath = realpath(__DIR__ . '/../assets');

        $this->directoryListStub->method('getPath')->willReturn($wysiwygUploadDirectoryPath);

        $srcSet = $this->mediaResolver->resolveSrcSet('{{media url="wysiwyg/test.jpg"}}');
        $srcSet = str_replace('pub/', '', $srcSet);
        $this->assertEquals(
            'http://localhost/media/wysiwyg/test.jpg 1920w, http://localhost/media/wysiwyg/.thumbs/480/test.jpg 480w, http://localhost/media/wysiwyg/.thumbs/768/test.jpg 768w',
            $srcSet
        );
    }

    public function testItReturnsUrlDirectlyInSrcSetWhenItsPassed()
    {
        $this->assertEquals(
            'https://example.com/image.png',
            $this->mediaResolver->resolveSrcSet('https://example.com/image.png')
        );
    }

    public function testItCorrectlyResolvesSrcSetByDensity()
    {
        $wysiwygUploadDirectoryPath = realpath(__DIR__ . '/../assets');

        $this->directoryListStub->method('getPath')->willReturn($wysiwygUploadDirectoryPath);

        $srcSet = $this->mediaResolver->resolveSrcSetByDensity('{{media url="wysiwyg/test.jpg"}}');
        $srcSet = str_replace('pub/', '', $srcSet);
        $this->assertEquals(
            'http://localhost/media/wysiwyg/.thumbs/480/test.jpg, http://localhost/media/wysiwyg/.thumbs/960/test.jpg 2x',
            $srcSet
        );
    }

    public function testItCorrectlyResolvesSrcSetIncludingWebp()
    {
        $srcSet = $this->mediaResolver->resolveWebpSrcSet('http://localhost/pub/media/wysiwyg/test.jpg 1920w, http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg 480w, http://localhost/pub/media/wysiwyg/.thumbs/768/test.jpg 768w');
        $srcSet = str_replace('pub/', '', $srcSet);
        $this->assertEquals(
            'http://localhost/media/wysiwyg/test.jpg.webp 1920w, http://localhost/media/wysiwyg/.thumbs/480/test.jpg.webp 480w, http://localhost/media/wysiwyg/.thumbs/768/test.jpg.webp 768w',
            $srcSet
        );

        $srcSet = $this->mediaResolver->resolveWebpSrcSet('http://localhost/pub/media/wysiwyg/.thumbs/480/test.jpg, http://localhost/pub/media/wysiwyg/.thumbs/960/test.jpg 2x');
        $srcSet = str_replace('pub/', '', $srcSet);
        $this->assertEquals(
            'http://localhost/media/wysiwyg/.thumbs/480/test.jpg.webp, http://localhost/media/wysiwyg/.thumbs/960/test.jpg.webp 2x',
            $srcSet
        );
    }

    public function testItReturnsUrlDirectlyInDensityBasedSrcSetWhenItsPassed()
    {
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
                'subkey' => 'http://localhost/media/wysiwyg/test.png'
            ],
            'other_key' => 'some_string',
            2 => 2
        ];

        $result = $this->mediaResolver->resolveInArray($input);
        $result['key']['subkey'] = str_replace('pub/', '', $result['key']['subkey']);

        $this->assertEquals($expectedOutput, $result);
    }
}
