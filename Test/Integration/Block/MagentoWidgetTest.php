<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Block;

use Magento\TestFramework\Fixture\AppArea;
use Magento\TestFramework\Fixture\AppIsolation;

#[AppArea('frontend')]
#[AppIsolation(true)]
class MagentoWidgetTest extends \PHPUnit\Framework\TestCase
{
    protected ?\Magento\TestFramework\ObjectManager $objectManager;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();
    }

    public function testItRendersWithoutContainerByDefault(): void
    {
        $block = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Block\Component\MagentoWidget::class,
            ['data' => ['widget' => '', 'wrapInContainer' => false]]
        );

        $this->assertStringNotContainsString('cs-container--magento-widget', $block->toHtml());
    }

    public function testItWrapsInContainerWhenEnabled(): void
    {
        $block = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Block\Component\MagentoWidget::class,
            ['data' => ['widget' => '', 'wrapInContainer' => true]]
        );

        $html = $block->toHtml();
        $this->assertStringContainsString('cs-container cs-container--magento-widget', $html);
        $this->assertStringContainsString('cs-container__inner', $html);
    }
}
