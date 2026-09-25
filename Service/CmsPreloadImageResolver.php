<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class CmsPreloadImageResolver
{
    public const PRELOAD_IMAGE_PATH = 'data/items/0/image/decoded';
    public const BREAKPOINT_MOBILE = 'mobile';
    public const BREAKPOINT_DESKTOP = 'desktop';

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        protected \Magento\Framework\Stdlib\ArrayManager $arrayManager,
        protected \MageSuite\ContentConstructorFrontend\Helper\ComponentVisibility $componentVisibilityHelper,
        protected array $allowedComponents = []
    ) {
    }

    public function resolve($contentConstructorContent, $imageWidth)
    {
        $preloadImageData = $this->getPreloadImageData($contentConstructorContent, $imageWidth);

        if (!$preloadImageData) {
            return null;
        }

        [$previewImage, $srcSet, $mediaQuery] = $preloadImageData;

        return [
            'preload_image' => $previewImage,
            'src_set' => $srcSet,
            'media' => $mediaQuery
        ];
    }

    public function resolveAll(?string $contentConstructorContent, int $imageWidth): array
    {
        if (empty($contentConstructorContent)) {
            return [];
        }

        $resolvedByBreakpoint = $this->resolveForBreakpoints(
            $this->decodeComponents($contentConstructorContent),
            [self::BREAKPOINT_MOBILE, self::BREAKPOINT_DESKTOP],
            $imageWidth
        );

        return $this->buildPreloadEntries($resolvedByBreakpoint);
    }

    public function getPreloadImageData(?string $contentConstructorContent, int $imageWidth): ?array
    {
        if (empty($contentConstructorContent)) {
            return null;
        }

        $resolvedByBreakpoint = $this->resolveForBreakpoints(
            $this->decodeComponents($contentConstructorContent),
            [self::BREAKPOINT_MOBILE],
            $imageWidth
        );

        $resolved = $resolvedByBreakpoint[self::BREAKPOINT_MOBILE] ?? null;

        if ($resolved === null) {
            return null;
        }

        return [
            $resolved['preload_image'],
            $resolved['src_set'],
            $this->componentVisibilityHelper->getVisibilityMediaQuery($resolved['component']['data'])
        ];
    }

    protected function resolveForBreakpoints(array $components, array $breakpoints, int $imageWidth): array
    {
        $resolvedByBreakpoint = [];
        $resolvedImages = [];

        foreach ($components as $component) {
            $pendingBreakpoints = array_diff($breakpoints, array_keys($resolvedByBreakpoint));

            if (empty($pendingBreakpoints)) {
                break;
            }

            if (!$this->isAllowedComponent($component)) {
                continue;
            }

            $visibleBreakpoints = $this->filterVisibleBreakpoints($component, $pendingBreakpoints);

            if (empty($visibleBreakpoints)) {
                continue;
            }

            $image = $this->fetchComponentImagePath($component);

            if ($image === null) {
                continue;
            }

            if (!array_key_exists($image, $resolvedImages)) {
                $resolvedImages[$image] = $this->resolveImage($image, $imageWidth);
            }

            if ($resolvedImages[$image] === null) {
                continue;
            }

            $resolvedByBreakpoint += array_fill_keys($visibleBreakpoints, ['component' => $component] + $resolvedImages[$image]);
        }

        return $resolvedByBreakpoint;
    }

    protected function fetchComponentImagePath(array $component): ?string
    {
        $image = $this->fetchMatchingImage($component);

        if (!is_string($image) || $image === '') {
            return null;
        }

        return $image;
    }

    protected function filterVisibleBreakpoints(array $component, array $breakpoints): array
    {
        $componentConfiguration = $component['data'] ?? [];

        return array_filter(
            $breakpoints,
            fn (string $breakpoint) => $this->componentVisibilityHelper->isVisibleOnBreakpoint($componentConfiguration, $breakpoint)
        );
    }

    protected function resolveImage(string $image, int $imageWidth): ?array
    {
        $previewImage = $this->resolvePreviewImage($image, $imageWidth);

        if (!$previewImage) {
            return null;
        }

        return ['preload_image' => $previewImage, 'src_set' => $this->resolveSrcSet($image)];
    }

    protected function buildPreloadEntries(array $resolvedByBreakpoint): array
    {
        $mobile = $resolvedByBreakpoint[self::BREAKPOINT_MOBILE] ?? null;
        $desktop = $resolvedByBreakpoint[self::BREAKPOINT_DESKTOP] ?? null;

        if ($mobile && $desktop && $mobile['preload_image'] === $desktop['preload_image']) {
            return [$this->buildPreloadEntry($mobile, '')];
        }

        $entries = [];

        foreach ([self::BREAKPOINT_MOBILE, self::BREAKPOINT_DESKTOP] as $breakpoint) {
            if (!isset($resolvedByBreakpoint[$breakpoint])) {
                continue;
            }

            $entries[] = $this->buildPreloadEntry($resolvedByBreakpoint[$breakpoint], $this->resolveBreakpointMediaQuery($breakpoint));
        }

        return $entries;
    }

    protected function buildPreloadEntry(array $resolved, string $mediaQuery): array
    {
        return [
            'preload_image' => $resolved['preload_image'],
            'src_set' => $resolved['src_set'],
            'media' => $mediaQuery
        ];
    }

    protected function resolveBreakpointMediaQuery(string $breakpoint): string
    {
        return $this->componentVisibilityHelper->getVisibilityMediaQuery([
            'componentVisibility' => [
                self::BREAKPOINT_MOBILE => $breakpoint === self::BREAKPOINT_MOBILE,
                self::BREAKPOINT_DESKTOP => $breakpoint === self::BREAKPOINT_DESKTOP
            ]
        ]);
    }

    protected function decodeComponents(?string $contentConstructorContent): array
    {
        $components = json_decode((string)$contentConstructorContent, true);

        return is_array($components) ? $components : [];
    }

    protected function isAllowedComponent(array $component): bool
    {
        return in_array($component['type'] ?? '', $this->allowedComponents);
    }

    public function resolvePreviewImage(?string $image, int $imageWidth): ?string
    {
        if (!is_string($image) || $image === '') {
            return null;
        }

        $srcSet = $this->mediaResolver->resolveSrcSetArray($image);

        if (is_string($srcSet)) {
            return $srcSet;
        }

        if (empty($srcSet)) {
            return null;
        }

        if (isset($srcSet[$imageWidth])) {
            return $srcSet[$imageWidth];
        }

        return $srcSet[$this->resolveClosestWidth(array_keys($srcSet), $imageWidth)];
    }

    protected function resolveClosestWidth(array $availableWidths, int $imageWidth): int
    {
        sort($availableWidths);

        foreach ($availableWidths as $availableWidth) {
            if ($availableWidth >= $imageWidth) {
                return $availableWidth;
            }
        }

        return end($availableWidths);
    }

    public function resolveSrcSet(string $image): string
    {
        return $this->mediaResolver->resolveSrcSet($image);
    }

    public function fetchMatchingImage(array $component): mixed
    {
        return $this->arrayManager->get(self::PRELOAD_IMAGE_PATH, $component);
    }

    public function fetchMatchingComponent(?string $contentConstructorContent): ?array
    {
        return $this->fetchMatchingComponents($contentConstructorContent)[0] ?? null;
    }

    public function fetchMatchingComponents(?string $contentConstructorContent): array
    {
        $matchingComponents = [];

        foreach ($this->decodeComponents($contentConstructorContent) as $component) {
            if (!$this->isAllowedComponent($component)) {
                continue;
            }

            if (!$this->componentVisibilityHelper->isVisibleOnBreakpoint($component['data'] ?? [], self::BREAKPOINT_MOBILE)) {
                continue;
            }

            $matchingComponents[] = $component;
        }

        return $matchingComponents;
    }
}
