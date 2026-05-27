<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Model\Component;

class MagentoWidgetTest extends \PHPUnit\Framework\TestCase
{
    protected \MageSuite\ContentConstructorFrontend\Model\Template\Filter $widgetFilter;

    protected function setUp(): void
    {
        $this->widgetFilter = $this->createMock(
            \MageSuite\ContentConstructorFrontend\Model\Template\Filter::class
        );
    }

    public function testItReturnsEmptyStringWhenWidgetIsNotConfigured(): void
    {
        $viewModel = new \MageSuite\ContentConstructorFrontend\Model\Component\MagentoWidget(
            $this->widgetFilter
        );

        $this->assertSame('', $viewModel->getContent());
    }

    public function testItFiltersWidgetDirective(): void
    {
        $widgetDirective = '{{widget type="Magento\Cms\Block\Widget\Block" block_id="1"}}';
        $expectedContent = '<div class="cms-block">Block content</div>';

        $this->widgetFilter->expects($this->once())
            ->method('filter')
            ->with($widgetDirective)
            ->willReturn($expectedContent);

        $this->widgetFilter->method('getCollectedIdentities')->willReturn([]);

        $viewModel = new \MageSuite\ContentConstructorFrontend\Model\Component\MagentoWidget(
            $this->widgetFilter,
            ['widget' => $widgetDirective]
        );

        $this->assertSame($expectedContent, $viewModel->getContent());
    }

    public function testItCollectsIdentitiesFromRenderedWidget(): void
    {
        $widgetDirective = '{{widget type="Magento\Cms\Block\Widget\Block" block_id="1"}}';

        $this->widgetFilter->method('filter')->willReturn('content');
        $this->widgetFilter->method('getCollectedIdentities')->willReturn(['cms_b_1']);

        $viewModel = new \MageSuite\ContentConstructorFrontend\Model\Component\MagentoWidget(
            $this->widgetFilter,
            ['widget' => $widgetDirective]
        );

        $viewModel->getContent();

        $this->assertSame(['cms_b_1'], $viewModel->getIdentities());
    }
}
