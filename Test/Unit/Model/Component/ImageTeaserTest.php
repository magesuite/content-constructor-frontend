<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Model\Component;

class ImageTeaserTest extends \PHPUnit\Framework\TestCase
{
    protected ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser $imageTeaser;

    protected function setUp(): void
    {
        $objectManager = \Magento\TestFramework\ObjectManager::getInstance();
        $this->imageTeaser = $objectManager->get(\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser::class);
    }

    /**
     * @dataProvider provider
     */
    public function testItCorrectlyRemovesHtmlTags($string, $expected)
    {
        $this->assertEquals($expected, $this->imageTeaser->replaceHtmlTagsWithWhiteSpaces($string));
    }

    /**
     * @return array[]
     */
    public function provider(): array
    {
        return [
            ['Test<br>this is <b><span>a description</span></b>', 'Test this is a description'],
            ['Remove  double <br> whitespaces', 'Remove double whitespaces'],
            ['this is<h1>a</h1>test', 'this is a test'],
            ['test<p>test</p>', 'test test']
        ];
    }
}
