<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class GenericSlideTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
     */
    protected $model;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\MageSuite\ContentConstructorFrontend\Service\UrlResolver
     */
    protected $urlResolverStub;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\MageSuite\ContentConstructorFrontend\Service\MediaResolver
     */
    protected $mediaResolverStub;

    public function setUp(): void
    {
        $this->urlResolverStub = $this->getMockBuilder(\MageSuite\ContentConstructorFrontend\Service\UrlResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->mediaResolverStub = $this->getMockBuilder(\MageSuite\ContentConstructorFrontend\Service\MediaResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->model = new \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide(
            $this->urlResolverStub,
            $this->mediaResolverStub,
            []
        );
    }

    public function testItGeneratesWidthAndHeightBasedOnDefinedAspectRatio()
    {
        $this->model->setData([
            'image' => [
                'decoded' => '{{media url="wysiwyg/content_constructor/teaser_1.jpg"}}',
                'aspect_ratio' => '1:2',
                'image' => 'http://localhost/wysiwyg/content_constructor/teaser_1.jpg',
            ]
        ]);

        $this->mediaResolverStub->method('resolveSrcSetArray')->willReturn([
            '1080' => 'https://localhost/media/wysiwyg/.thumbs/1080/test.png',
            '1800' => 'https://localhost/media/wysiwyg/test.png',
            '720' => 'https://localhost/media/wysiwyg/.thumbs/720/test.png',
        ]);

        $this->assertEquals(1800, $this->model->getWidth());
        $this->assertEquals(3600, $this->model->getHeight());
    }

    public function testItGeneratesWidthAndHeightWhenAspectRatioIsMissing()
    {
        $this->model->setData([
            'image' => [
                'decoded' => '{{media url="wysiwyg/content_constructor/teaser_1.jpg"}}',
                'aspect_ratio' => '',
                'image' => 'http://localhost/wysiwyg/content_constructor/teaser_1.jpg',
            ]
        ]);

        $this->mediaResolverStub->method('resolveOriginalImageSize')->willReturn(['width' => 2000, 'height' => 6000]);

        $this->mediaResolverStub->method('resolveSrcSetArray')->willReturn([
            '1080' => 'https://localhost/media/wysiwyg/.thumbs/1080/test.png',
            '720' => 'https://localhost/media/wysiwyg/.thumbs/720/test.png',
        ]);

        $this->assertEquals(1080, $this->model->getWidth());
        $this->assertEquals(3240, $this->model->getHeight());
    }
}
