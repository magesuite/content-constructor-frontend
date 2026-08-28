<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class ImageTeaser extends \Magento\Framework\DataObject implements ViewModel, \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide[]|null
     */
    protected $slides = null;

    protected ?array $pinUrlMap = null;
    protected ?array $pinCardMap = null;
    protected array $pinUnresolvedIdentities = [];
    protected ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinProductProvider $pinProductProvider;
    protected ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinsBuilder $pinsBuilder;

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\SlideFactory $slideFactory,
        array $data = [],
        ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinProductProvider $pinProductProvider = null,
        ?\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\PinsBuilder $pinsBuilder = null
    ) {
        parent::__construct($data);

        $this->pinProductProvider = $pinProductProvider;
        $this->pinsBuilder = $pinsBuilder;
    }

    public function getSlides() {
        if($this->slides == null) {
            $this->slides = [];

            foreach($this->getData('items') as $slide) {
                $slide = $this->slideFactory->create(['data' => $slide]);

                if (!$slide->canBeDisplayed()) {
                    continue;
                }

                $this->slides[] = $slide;
            }
        }

        return $this->slides;
    }

    public function hasPins(): bool
    {
        foreach ((array)$this->getData('items') as $item) {
            if (!empty($item['pins']['items'])) {
                return true;
            }
        }

        return false;
    }

    public function getPinProductUrl(string $sku): ?string
    {
        $this->resolvePins();

        return $this->pinUrlMap[$sku]['url'] ?? null;
    }

    public function getPinIdentities(): array
    {
        $this->resolvePins();

        $identityGroups = [$this->pinUnresolvedIdentities];

        foreach ($this->pinUrlMap as $entry) {
            $identityGroups[] = $entry['identities'] ?? [];
        }

        foreach ($this->pinCardMap as $card) {
            $identityGroups[] = $card['identities'] ?? [];
        }

        return array_values(array_unique(array_merge(...$identityGroups)));
    }

    public function getPinProductCard(string $sku): ?array
    {
        $this->resolvePins();

        return $this->pinCardMap[$sku] ?? null;
    }

    public function getSlidePins(\MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide $slide): array
    {
        if ($this->pinsBuilder === null) {
            return [];
        }

        return $this->pinsBuilder->getPins($this, $slide->getPins());
    }

    public function getPinIconAttributes(): array
    {
        if ($this->pinsBuilder === null) {
            return [];
        }

        return $this->pinsBuilder->getIconAttributes();
    }

    protected function resolvePins(): void
    {
        if ($this->pinUrlMap !== null) {
            return;
        }

        if ($this->pinProductProvider === null) {
            $this->pinUrlMap = [];
            $this->pinCardMap = [];

            return;
        }

        $productSkus = [];
        $richSkus = [];

        foreach ((array)$this->getData('items') as $item) {
            foreach ($item['pins']['items'] ?? [] as $pin) {
                if (!empty($pin['use_custom_url'])) {
                    continue;
                }

                $sku = trim((string)($pin['sku'] ?? ''));

                if ($sku === '') {
                    continue;
                }

                $productSkus[$sku] = $sku;

                if (($pin['display'] ?? 'simple') === 'rich') {
                    $richSkus[$sku] = $sku;
                }
            }
        }

        $this->pinUrlMap = $this->pinProductProvider->getUrlMap(array_values($productSkus));
        $this->pinCardMap = $this->pinProductProvider->getCardMap(array_values($richSkus));

        $this->pinUnresolvedIdentities = $this->pinProductProvider->getIdentities(
            array_values(array_diff($productSkus, array_keys($this->pinUrlMap)))
        );
    }

    public function replaceHtmlTagsWithWhiteSpaces(string $string): string
    {
        $string = html_entity_decode($string, ENT_DISALLOWED);
        $string = preg_replace('#<[^>]+>#', ' ', $string);
        $string = preg_replace('/\s+/u', ' ', $string);
        $string = filter_var($string, FILTER_SANITIZE_ADD_SLASHES);
        return trim($string);
    }
}
