<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Model\Component\ImageTeaser;

class PinsBuilderTest extends \PHPUnit\Framework\TestCase
{
    protected const RESOLVED_SKU = 'RESOLVED-SKU';
    protected const UNRESOLVED_SKU = 'UNRESOLVED-SKU';

    protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinsBuilder $pinsBuilder;

    protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser $imageTeaser;

    protected array $viewVars = [
        'teaser/pins/default_color' => '#0a7d3e',
        'teaser/pins/icon/path' => 'images/icons/pins/pin.svg',
        'teaser/pins/icon/inlined' => true,
        'teaser/pins/icon/lazy_loaded' => false,
    ];

    protected function setUp(): void
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        $viewConfigFile = $this->createMock(\Magento\Framework\Config\View::class);
        $viewConfigFile->method('getVarValue')
            ->willReturnCallback(fn (string $module, string $var) => $this->viewVars[$var] ?? false);

        $viewConfig = $this->createMock(\Magento\Framework\View\ConfigInterface::class);
        $viewConfig->method('getViewConfig')->willReturn($viewConfigFile);

        $this->pinsBuilder = $objectManager->create(
            \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinsBuilder::class,
            ['viewConfig' => $viewConfig]
        );

        $this->imageTeaser = $this->createMock(
            \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser::class
        );
        $this->imageTeaser->method('getPinProductUrl')
            ->willReturnCallback(
                fn (string $sku): ?string => $sku === self::RESOLVED_SKU
                    ? 'https://example.com/product.html'
                    : null
            );
        $this->imageTeaser->method('getPinProductCard')
            ->willReturnCallback(
                fn (string $sku): ?array => $sku === self::RESOLVED_SKU ? $this->getCardData() : null
            );
    }

    protected function getCardData(): array
    {
        return [
            'url' => 'https://example.com/product.html',
            'name' => 'Test Product',
            'image' => 'https://example.com/image.jpg',
            'price' => '<span class="price">10,00 €</span>',
            'sale' => 25,
            'rating' => ['data' => ['maxStars' => 5, 'activeStars' => 4.5, 'count' => 9]],
        ];
    }

    protected function buildPins(array $items, ?string $baseColor = null): array
    {
        $configuration = ['items' => $items];

        if ($baseColor !== null) {
            $configuration['base_color'] = $baseColor;
        }

        return $this->pinsBuilder->getPins($this->imageTeaser, $configuration);
    }

    protected function buildSinglePin(array $item, ?string $baseColor = null)
    {
        $pins = $this->buildPins([$item], $baseColor);

        $this->assertCount(1, $pins);

        return $pins[0];
    }

    public function testItReturnsNoPinsForEmptyConfiguration(): void
    {
        $this->assertSame([], $this->pinsBuilder->getPins($this->imageTeaser, null));
        $this->assertSame([], $this->pinsBuilder->getPins($this->imageTeaser, []));
        $this->assertSame([], $this->pinsBuilder->getPins($this->imageTeaser, ['items' => []]));
    }

    public function testItDropsPinsWithoutAnyTarget(): void
    {
        $pins = $this->buildPins([
            ['sku' => ''],
            ['sku' => '   '],
            ['use_custom_url' => 1, 'url' => ''],
            ['sku' => self::RESOLVED_SKU],
        ]);

        $this->assertCount(1, $pins);
        $this->assertSame('https://example.com/product.html', $pins[0]->getHref());
    }

    public function testItBuildsLinkOnlyPin(): void
    {
        $pin = $this->buildSinglePin(['sku' => self::RESOLVED_SKU, 'display' => 'simple']);

        $this->assertSame('cs-pins__pin cs-pins__pin--simple', $pin->getCssClasses());
        $this->assertSame('https://example.com/product.html', $pin->getHref());
        $this->assertSame('_self', $pin->getTarget());
        $this->assertNull($pin->getCard());
        $this->assertSame(['role' => 'link'], $pin->getTriggerAttributes());
        $this->assertSame([], $pin->getCardAttributes());
        $this->assertSame('View product', $pin->getAriaLabel());
    }

    public function testItBuildsProductCardPin(): void
    {
        $pin = $this->buildSinglePin(['sku' => self::RESOLVED_SKU, 'display' => 'rich']);

        $this->assertSame('cs-pins__pin cs-pins__pin--rich', $pin->getCssClasses());
        $this->assertSame(['aria-expanded' => 'false'], $pin->getTriggerAttributes());
        $this->assertSame('Show details for Test Product', $pin->getAriaLabel());

        $card = $pin->getCard();

        $this->assertNotNull($card);
        $this->assertSame('Test Product', $card->getName());
        $this->assertSame('Test Product', $card->getAriaLabel());
        $this->assertSame('https://example.com/image.jpg', $card->getImageUrl());
        $this->assertSame('<span class="price">10,00 €</span>', $card->getPriceHtml());
        $this->assertSame('cs-pins__card-price cs-pins__card-price--sale', $card->getPriceCssClasses());
        $this->assertSame(25, $card->getSalePercentage());
    }

    public function testItBuildsRating(): void
    {
        $card = $this->buildSinglePin(['sku' => self::RESOLVED_SKU, 'display' => 'rich'])->getCard();
        $rating = $card->getRating();

        $this->assertNotNull($rating);
        $this->assertSame(5, $rating->getMaxStars());
        $this->assertSame(4.5, $rating->getActiveStars());
        $this->assertSame(9, $rating->getReviewsCount());
    }

    public function testItHidesRatingWhenToggledOff(): void
    {
        $card = $this->buildSinglePin([
            'sku' => self::RESOLVED_SKU,
            'display' => 'rich',
            'show_rating' => false,
        ])->getCard();

        $this->assertNull($card->getRating());
    }

    public function testItHidesSaleBadgeWhenToggledOffButKeepsSalePriceStyling(): void
    {
        $card = $this->buildSinglePin([
            'sku' => self::RESOLVED_SKU,
            'display' => 'rich',
            'show_sale' => false,
        ])->getCard();

        $this->assertNull($card->getSalePercentage());
        $this->assertSame('cs-pins__card-price cs-pins__card-price--sale', $card->getPriceCssClasses());
    }

    public function testItMarksPinUnresolvedWhenCardCannotBeBuilt(): void
    {
        $pin = $this->buildSinglePin(['sku' => self::UNRESOLVED_SKU, 'display' => 'rich']);

        $this->assertSame(
            'cs-pins__pin cs-pins__pin--simple cs-pins__pin--unresolved',
            $pin->getCssClasses()
        );
        $this->assertNull($pin->getCard());
        $this->assertSame('', $pin->getHref());
    }

    public function testItMarksPinUnresolvedWhenProductHasNoUrl(): void
    {
        $pin = $this->buildSinglePin(['sku' => self::UNRESOLVED_SKU, 'display' => 'simple']);

        $this->assertSame(
            'cs-pins__pin cs-pins__pin--simple cs-pins__pin--unresolved',
            $pin->getCssClasses()
        );
        $this->assertSame('', $pin->getHref());
    }

    public function testItNeverBuildsCardForCustomUrlPin(): void
    {
        $pin = $this->buildSinglePin([
            'use_custom_url' => 1,
            'url' => 'https://example.com/landing-page',
            'display' => 'rich',
            'new_tab' => 1,
        ]);

        $this->assertNull($pin->getCard());
        $this->assertSame('https://example.com/landing-page', $pin->getHref());
        $this->assertSame('_blank', $pin->getTarget());
        $this->assertSame('cs-pins__pin cs-pins__pin--simple', $pin->getCssClasses());
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('colorOverrideDataProvider')]
    public function testItValidatesColorOverride(array $item, string $expectedColor): void
    {
        $pin = $this->buildSinglePin(array_merge(['sku' => self::RESOLVED_SKU], $item), '#00ff00');

        $this->assertStringContainsString('--cs-pins-color: ' . $expectedColor . ';', $pin->getStyle());
    }

    public static function colorOverrideDataProvider(): array
    {
        return [
            'six digit hex' => [['override_color' => 1, 'color' => '#123456'], '#123456'],
            'three digit hex' => [['override_color' => 1, 'color' => '#abc'], '#abc'],
            'uppercase hex' => [['override_color' => 1, 'color' => '#ABCDEF'], '#ABCDEF'],
            'css injection' => [['override_color' => 1, 'color' => 'red; background: url(x)'], '#00ff00'],
            'named colour' => [['override_color' => 1, 'color' => 'red'], '#00ff00'],
            'empty colour' => [['override_color' => 1, 'color' => ''], '#00ff00'],
            'override disabled' => [['override_color' => 0, 'color' => '#123456'], '#00ff00'],
        ];
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('baseColorDataProvider')]
    public function testItFallsBackThroughBaseColorChain(?string $baseColor, string $expectedColor): void
    {
        $pin = $this->buildSinglePin(['sku' => self::RESOLVED_SKU], $baseColor);

        $this->assertStringContainsString('--cs-pins-color: ' . $expectedColor . ';', $pin->getStyle());
    }

    public static function baseColorDataProvider(): array
    {
        return [
            'stored colour wins' => ['#00ff00', '#00ff00'],
            'invalid stored colour falls back to view.xml' => ['not-a-colour', '#0a7d3e'],
            'absent stored colour falls back to view.xml' => [null, '#0a7d3e'],
        ];
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('cardAttributesDataProvider')]
    public function testItWhitelistsCardAttributes(array $item, array $expectedAttributes): void
    {
        $pin = $this->buildSinglePin(array_merge(
            ['sku' => self::RESOLVED_SKU, 'display' => 'rich'],
            $item
        ));

        $this->assertSame($expectedAttributes, $pin->getCardAttributes());
    }

    public static function cardAttributesDataProvider(): array
    {
        return [
            'valid values kept' => [
                ['card_trigger' => 'click', 'card_position' => 'left'],
                ['data-trigger' => 'click', 'data-position' => 'left'],
            ],
            'unknown values replaced' => [
                ['card_trigger' => 'nope', 'card_position' => 'nope'],
                ['data-trigger' => 'hover', 'data-position' => 'top'],
            ],
            'null values replaced' => [
                ['card_trigger' => null, 'card_position' => null],
                ['data-trigger' => 'hover', 'data-position' => 'top'],
            ],
            'missing values replaced' => [
                [],
                ['data-trigger' => 'hover', 'data-position' => 'top'],
            ],
        ];
    }

    public function testItAppliesCoordinateDefaultsForLegacyPins(): void
    {
        $pin = $this->buildSinglePin(['sku' => self::RESOLVED_SKU], '#00ff00');

        $this->assertSame('left: 50%; top: 50%; --cs-pins-color: #00ff00;', $pin->getStyle());
    }

    public function testItCastsCoordinatesToNumbers(): void
    {
        $pin = $this->buildSinglePin(
            ['sku' => self::RESOLVED_SKU, 'x' => '12.75', 'y' => 99],
            '#00ff00'
        );

        $this->assertSame('left: 12.75%; top: 99%; --cs-pins-color: #00ff00;', $pin->getStyle());
    }

    public function testItTrimsSkuBeforeResolving(): void
    {
        $pin = $this->buildSinglePin(['sku' => '  ' . self::RESOLVED_SKU . '  ', 'display' => 'rich']);

        $this->assertNotNull($pin->getCard());
    }

    public function testItTreatsUnknownDisplayValueAsLinkOnly(): void
    {
        $pin = $this->buildSinglePin(['sku' => self::RESOLVED_SKU, 'display' => 'whatever']);

        $this->assertNull($pin->getCard());
        $this->assertSame('cs-pins__pin cs-pins__pin--simple', $pin->getCssClasses());
    }

    public function testItReturnsIconAttributes(): void
    {
        $this->assertSame(
            [
                'icon_url' => 'images/icons/pins/pin.svg',
                'css_class' => 'cs-pins__icon',
                'inlined' => true,
                'lazy_loaded' => false,
            ],
            $this->pinsBuilder->getIconAttributes()
        );
    }

    public function testItReturnsNoIconAttributesWithoutConfiguredPath(): void
    {
        $this->viewVars['teaser/pins/icon/path'] = '';

        $this->assertSame([], $this->pinsBuilder->getIconAttributes());
    }
}
