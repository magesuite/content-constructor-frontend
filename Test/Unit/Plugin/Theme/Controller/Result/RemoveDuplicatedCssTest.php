<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class RemoveDuplicatedCssTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    protected $httpResponseStub;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Plugin\Theme\Controller\Result\RemoveDuplicatedCss
     */
    protected $plugin;

    public function setUp(): void
    {
        $this->httpResponseStub = $this->getMockBuilder(\Magento\Framework\App\Response\Http::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->plugin = new \MageSuite\ContentConstructorFrontend\Plugin\Theme\Controller\Result\RemoveDuplicatedCss();
    }

    /**
     * @dataProvider getInputAndExpectedHtml
     */
    public function testItCorrectlyRemovesDuplicatedCSSIncludes($input, $expectedOutput) {
        $result = $this->plugin->execute($input);

        $this->assertEquals($expectedOutput, $result);
    }

    public static function getInputAndExpectedHtml() {
        return [
            [
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>
<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>',
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>'.PHP_EOL
            ],
            [
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>',
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>'
            ],
            [
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>
<link rel="stylesheet" href="https://example.com/other-component.min.css"/><script>/* defer-ignore */</script>',
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>
<link rel="stylesheet" href="https://example.com/other-component.min.css"/><script>/* defer-ignore */</script>'
            ],
            [
                '<link rel="stylesheet" href="https://example.com/component.min.css">',
                '<link rel="stylesheet" href="https://example.com/component.min.css">'
            ],
        ];
    }
}
