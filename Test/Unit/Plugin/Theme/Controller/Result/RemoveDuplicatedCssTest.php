<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class RemoveDuplicatedCssTest extends \PHPUnit\Framework\TestCase
{
    protected ?\PHPUnit\Framework\MockObject\MockObject $httpResponseStub;
    protected ?\MageSuite\ContentConstructorFrontend\Plugin\Theme\Controller\Result\RemoveDuplicatedCss $plugin;

    protected function setUp(): void
    {
        $this->httpResponseStub = $this->getMockBuilder(\Magento\Framework\App\Response\Http::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->plugin = new \MageSuite\ContentConstructorFrontend\Plugin\Theme\Controller\Result\RemoveDuplicatedCss();
    }

    /**
     * @dataProvider getInputAndExpectedHtml
     */
    public function testItCorrectlyRemovesDuplicatedCSSIncludes(string $input, string $expectedOutput): void
    {
        $result = $this->plugin->execute($input);

        $this->assertEquals($expectedOutput, $result);
    }

    public static function getInputAndExpectedHtml(): array
    {
        return [
            [
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>
<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>',
                '<link rel="stylesheet" href="https://example.com/component.min.css"/><script>/* defer-ignore */</script>' . PHP_EOL
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
