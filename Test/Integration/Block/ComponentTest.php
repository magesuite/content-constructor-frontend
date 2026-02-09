<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Block;

class ComponentTest extends \PHPUnit\Framework\TestCase
{
    protected ?\MageSuite\ContentConstructorFrontend\Block\Component $block;
    protected ?\Magento\Framework\App\State $state;
    protected ?\Magento\Framework\App\ObjectManager $objectManager;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->block = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Block\Component::class);
        $this->state = $this->objectManager->get(\Magento\Framework\App\State::class);
    }

    public function testItImplementsBlockInterface(): void
    {
        $this->assertInstanceOf(\Magento\Framework\View\Element\BlockInterface::class, $this->block);
    }

    public function testItThrowsExceptionWhenNoTypeIsPassed(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->block->toHtml();
    }

    /**
     * @dataProvider componentVisibilityDataProvider
     * @magentoCache all disabled
     */
    public function testItReturnsCorrectValuesBasedOnVisibilitySettings(array $visibility, string $expectedResult): void
    {
        $baseData = [
            'id' => 'component24ab',
            'section' => 'content',
            'type' => 'headline',
            'data' => [
                'title' => 'Headline H2',
                'subtitle' => 'Subheadline',
                'headingTag' => 'h2',
                'componentVisibility' => $visibility
            ]
        ];

        $this->state->emulateAreaCode(\Magento\Framework\App\Area::AREA_FRONTEND, function () use ($baseData, $expectedResult) {
            $this->block->setData($baseData);
            $html = preg_replace('/<!-- last update: \d+ -->/', '', $this->block->toHtml());
            $this->assertEquals($expectedResult, $html);
        });
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoAppArea frontend
     */
    public function testItShowsHeadlineComponent(): void
    {
        $this->block->setData([
            'type' => 'headline',
            'data' => [
                'tag' => 'h1',
                'title' => 'Main',
                'subtitle' => 'Sub'
            ]
        ]);

        $htmlOutput = $this->block->toHtml();

        $assertContains = method_exists($this, 'assertStringContainsString') ? 'assertStringContainsString' : 'assertContains';

        $this->$assertContains('>Main<', $htmlOutput);
        $this->$assertContains('>Sub<', $htmlOutput);
    }

    public static function componentVisibilityDataProvider(): array
    {
        $expectedHtml = <<<HTML

<div class="cs-container cs-container--headline">
    <div class="cs-container__inner">
        <div class="cs-headline ">
            <h2 class="cs-headline__title">Headline H2</h2>
                            <p class="cs-headline__subtitle">Subheadline</p>
                    </div>
    </div>
</div>

HTML;

        return [
            [
                [
                    'mobile' => "0",
                    'desktop' => "0"
                ],
                ""
            ],
            [
                [
                    'mobile' => "1",
                    'desktop' => "0"
                ],
                $expectedHtml
            ],
            [
                [
                    'mobile' => "0",
                    'desktop' => "1"
                ],
                $expectedHtml
            ]
        ];
    }
}
