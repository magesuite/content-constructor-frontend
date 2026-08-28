<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Model\Component\ImageTeaser;

class SlideTest extends \PHPUnit\Framework\TestCase
{
    protected \Magento\Framework\ObjectManagerInterface $objectManager;

    protected function setUp(): void
    {
        $this->objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('pinsDataProvider')]
    public function testItDetectsConfiguredPins(array $data, bool $expected): void
    {
        $slide = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide::class,
            ['data' => $data]
        );

        $this->assertSame($expected, $slide->hasPins());
    }

    public static function pinsDataProvider(): array
    {
        return [
            'no pins key at all' => [
                [],
                false,
            ],
            'pins key is null' => [
                ['pins' => null],
                false,
            ],
            'pins without items' => [
                ['pins' => ['base_color' => '#324dcf']],
                false,
            ],
            'empty items' => [
                ['pins' => ['items' => []]],
                false,
            ],
            'one pin' => [
                ['pins' => ['items' => [['sku' => 'SKU-1']]]],
                true,
            ],
            'several pins' => [
                ['pins' => ['items' => [['sku' => 'SKU-1'], ['sku' => 'SKU-2']]]],
                true,
            ],
        ];
    }
}
