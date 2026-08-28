<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser;

class PinsBuilder
{
    public const VIEW_CONFIG_MODULE = 'MageSuite_ContentConstructor';

    public const VAR_DEFAULT_COLOR = 'teaser/pins/default_color';
    public const VAR_ICON_PATH = 'teaser/pins/icon/path';
    public const VAR_ICON_INLINED = 'teaser/pins/icon/inlined';
    public const VAR_ICON_LAZY_LOADED = 'teaser/pins/icon/lazy_loaded';

    public const FALLBACK_COLOR = '#324dcf';
    public const DEFAULT_COORDINATE = 50;
    public const CARD_DISPLAY = 'rich';
    public const DEFAULT_DISPLAY = 'simple';
    public const CARD_TRIGGERS = ['hover', 'click'];
    public const DEFAULT_CARD_TRIGGER = 'hover';
    public const CARD_POSITIONS = ['top', 'right', 'bottom', 'left'];
    public const DEFAULT_CARD_POSITION = 'top';
    public const ICON_CSS_CLASS = 'cs-pins__icon';

    protected const HEX_COLOR_PATTERN = '/^#[0-9a-fA-F]{3}(?:[0-9a-fA-F]{3})?$/';

    public function __construct(
        protected \Magento\Framework\View\ConfigInterface $viewConfig,
        protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinFactory $pinFactory,
        protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin\CardFactory $cardFactory,
        protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin\RatingFactory $ratingFactory
    ) {
    }

    public function getPins(
        \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser $imageTeaser,
        ?array $pinsConfiguration
    ): array {
        $items = $pinsConfiguration['items'] ?? [];

        if (empty($items)) {
            return [];
        }

        $baseColor = $this->getBaseColor($pinsConfiguration['base_color'] ?? null);
        $pins = [];

        foreach ($items as $item) {
            $pin = $this->createPin($imageTeaser, (array)$item, $baseColor);

            if ($pin !== null) {
                $pins[] = $pin;
            }
        }

        return $pins;
    }

    public function getIconAttributes(): array
    {
        $path = $this->getViewConfigValue(self::VAR_ICON_PATH);

        if (empty($path)) {
            return [];
        }

        return [
            'icon_url' => $path,
            'css_class' => self::ICON_CSS_CLASS,
            'inlined' => $this->getViewConfigValue(self::VAR_ICON_INLINED),
            'lazy_loaded' => $this->getViewConfigValue(self::VAR_ICON_LAZY_LOADED),
        ];
    }

    protected function createPin(
        \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser $imageTeaser,
        array $item,
        string $baseColor
    ): ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin {
        $usesCustomUrl = !empty($item['use_custom_url']);
        $sku = trim((string)($item['sku'] ?? ''));

        if (!$this->hasTarget($item, $usesCustomUrl, $sku)) {
            return null;
        }

        $wantsCard = !$usesCustomUrl && ($item['display'] ?? self::DEFAULT_DISPLAY) === self::CARD_DISPLAY;
        $card = $wantsCard ? $this->createCard($item, $imageTeaser->getPinProductCard($sku)) : null;
        $href = $usesCustomUrl
            ? (string)($item['url'] ?? '')
            : (string)$imageTeaser->getPinProductUrl($sku);

        $hasCard = $card !== null;

        return $this->pinFactory->create(['data' => [
            'css_classes' => $this->getCssClasses(
                $hasCard,
                $this->isUnresolved($usesCustomUrl, $wantsCard, $hasCard, $href)
            ),
            'style' => $this->getStyle($item, $baseColor),
            'href' => $href,
            'target' => empty($item['new_tab']) ? '_self' : '_blank',
            'aria_label' => $this->getTriggerLabel($card),
            'trigger_attributes' => $this->getTriggerAttributes($hasCard),
            'card_attributes' => $hasCard ? $this->getCardAttributes($item) : [],
            'card' => $card,
        ]]);
    }

    protected function createCard(
        array $item,
        ?array $cardData
    ): ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin\Card {
        if ($cardData === null) {
            return null;
        }

        $name = (string)($cardData['name'] ?? '');
        $salePercentage = (int)($cardData['sale'] ?? 0);

        return $this->cardFactory->create(['data' => [
            'name' => $name,
            'aria_label' => $name === '' ? (string)__('View product') : $name,
            'image_url' => empty($cardData['image']) ? '' : (string)$cardData['image'],
            'price_html' => (string)($cardData['price'] ?? ''),
            'price_css_classes' => $this->getPriceCssClasses($salePercentage),
            'sale_percentage' => $this->getSalePercentage($item, $salePercentage),
            'rating' => $this->createRating($item, $cardData['rating']['data'] ?? null),
        ]]);
    }

    protected function createRating(
        array $item,
        ?array $ratingData
    ): ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin\Rating {
        if (!($item['show_rating'] ?? true)) {
            return null;
        }

        if (empty($ratingData['count'])) {
            return null;
        }

        return $this->ratingFactory->create(['data' => [
            'max_stars' => (int)($ratingData['maxStars'] ?? 0),
            'active_stars' => (float)($ratingData['activeStars'] ?? 0),
            'reviews_count' => (int)$ratingData['count'],
        ]]);
    }

    protected function hasTarget(array $item, bool $usesCustomUrl, string $sku): bool
    {
        if ($usesCustomUrl) {
            return !empty($item['url']);
        }

        return $sku !== '';
    }

    protected function isUnresolved(bool $usesCustomUrl, bool $wantsCard, bool $hasCard, string $href): bool
    {
        if ($wantsCard && !$hasCard) {
            return true;
        }

        return !$usesCustomUrl && $href === '';
    }

    protected function getCssClasses(bool $hasCard, bool $isUnresolved): string
    {
        $cssClasses = ['cs-pins__pin'];
        $cssClasses[] = $hasCard ? 'cs-pins__pin--rich' : 'cs-pins__pin--simple';

        if ($isUnresolved) {
            $cssClasses[] = 'cs-pins__pin--unresolved';
        }

        return implode(' ', $cssClasses);
    }

    protected function getStyle(array $item, string $baseColor): string
    {
        return sprintf(
            'left: %s%%; top: %s%%; --cs-pins-color: %s;',
            (float)($item['x'] ?? self::DEFAULT_COORDINATE),
            (float)($item['y'] ?? self::DEFAULT_COORDINATE),
            $this->getPinColor($item, $baseColor)
        );
    }

    protected function getPinColor(array $item, string $baseColor): string
    {
        if (empty($item['override_color'])) {
            return $baseColor;
        }

        $color = $item['color'] ?? null;

        return $this->isHexColor($color) ? (string)$color : $baseColor;
    }

    protected function getBaseColor(mixed $configuredColor): string
    {
        if ($this->isHexColor($configuredColor)) {
            return (string)$configuredColor;
        }

        $themeColor = $this->getViewConfigValue(self::VAR_DEFAULT_COLOR);

        if ($this->isHexColor($themeColor)) {
            return (string)$themeColor;
        }

        return self::FALLBACK_COLOR;
    }

    protected function isHexColor(mixed $candidate): bool
    {
        return is_string($candidate) && preg_match(self::HEX_COLOR_PATTERN, $candidate) === 1;
    }

    protected function getTriggerLabel(
        ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin\Card $card
    ): string {
        if ($card === null) {
            return (string)__('View product');
        }

        if ($card->getName() === '') {
            return (string)__('Show product details');
        }

        return (string)__('Show details for %1', $card->getName());
    }

    protected function getTriggerAttributes(bool $hasCard): array
    {
        return $hasCard ? ['aria-expanded' => 'false'] : ['role' => 'link'];
    }

    protected function getCardAttributes(array $item): array
    {
        return [
            'data-trigger' => $this->getAllowedValue(
                $item['card_trigger'] ?? null,
                self::CARD_TRIGGERS,
                self::DEFAULT_CARD_TRIGGER
            ),
            'data-position' => $this->getAllowedValue(
                $item['card_position'] ?? null,
                self::CARD_POSITIONS,
                self::DEFAULT_CARD_POSITION
            ),
        ];
    }

    protected function getAllowedValue(mixed $value, array $allowedValues, string $defaultValue): string
    {
        return in_array($value, $allowedValues, true) ? (string)$value : $defaultValue;
    }

    protected function getPriceCssClasses(int $salePercentage): string
    {
        if ($salePercentage <= 0) {
            return 'cs-pins__card-price';
        }

        return 'cs-pins__card-price cs-pins__card-price--sale';
    }

    protected function getSalePercentage(array $item, int $salePercentage): ?int
    {
        if (!($item['show_sale'] ?? true)) {
            return null;
        }

        return $salePercentage > 0 ? $salePercentage : null;
    }

    protected function getViewConfigValue(string $path): mixed
    {
        return $this->viewConfig->getViewConfig()->getVarValue(self::VIEW_CONFIG_MODULE, $path);
    }
}
