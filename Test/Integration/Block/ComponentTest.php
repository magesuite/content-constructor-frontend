<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Block;

class ComponentTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Block\Component
    */
    protected $block;

    /**
     * @var \Magento\Framework\App\State
     */
    protected $state;

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    public function setUp(): void {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->block = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Block\Component::class);
        $this->state = $this->objectManager->get(\Magento\Framework\App\State::class);
    }

    public function testItImplementsBlockInterface() {
        $this->assertInstanceOf(\Magento\Framework\View\Element\BlockInterface::class, $this->block);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testItThrowsExceptionWhenNoTypeIsPassed() {
        $this->block->toHtml();
    }

    /**
     * @dataProvider componentVisibilityDataProvider
     * @magentoCache all disabled
     */
    public function testItReturnsCorrectValuesBasedOnVisibilitySettings($visibility, $expectedResult)
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

        $this->state->emulateAreaCode(\Magento\Framework\App\Area::AREA_FRONTEND,function () use ($baseData, $expectedResult) {
            $this->block->setData($baseData);
            $this->assertEquals($expectedResult, $this->block->toHtml());
        });
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoAppArea frontend
     */
    public function testItShowsHeadlineComponent() {
        $this->block->setData([
            'type' => 'headline',
            'data' => [
                'tag' => 'h1',
                'title' => 'Main',
                'subtitle' => 'Sub'
            ]
        ]);

        $htmlOutput = $this->block->toHtml();

        $this->assertContains('>Main<', $htmlOutput);
        $this->assertContains('>Sub<', $htmlOutput);
    }

    public static function componentVisibilityDataProvider()
    {
        $expectedHtml = <<<HTML

<div >
    <div class="cs-container cs-container--headline">
        <div class="cs-container__inner">
            <div class="cs-headline ">
                <h2 class="cs-headline__title">Headline H2</h2>
                                    <p class="cs-headline__subtitle">Subheadline</p>
                            </div>
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
