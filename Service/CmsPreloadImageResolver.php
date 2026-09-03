<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class CmsPreloadImageResolver
{
    public const PRELOAD_IMAGE_PATH = 'data/items/0/image/decoded';

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        protected \Magento\Framework\Stdlib\ArrayManager $arrayManager,
        protected \MageSuite\ContentConstructorFrontend\Helper\ComponentVisibility $componentVisibilityHelper,
        protected array $allowedComponents = []
    ) {
    }

    public function resolve($contentConstructorContent, $imageWidth)
    {
        if (empty($contentConstructorContent)) {
            return null;
        }

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

    public function getPreloadImageData($contentConstructorContent, $imageWidth)
    {
        $component = $this->fetchMatchingComponent($contentConstructorContent);

        if (!$component) {
            return null;
        }

        $image = $this->fetchMatchingImage($component);

        if (!$image) {
            return null;
        }

        return [
            $this->resolvePreviewImage($image, $imageWidth),
            $this->resolveSrcSet($image),
            $this->componentVisibilityHelper->getVisibilityMediaQuery($component['data'])
        ];
    }

    public function resolvePreviewImage($image, $imageWidth)
    {
        $srcSet = $this->mediaResolver->resolveSrcSetArray($image);

        if (!isset($srcSet[$imageWidth])) {
            return null;
        }

        return $srcSet[$imageWidth];
    }

    public function resolveSrcSet($image)
    {
        return $this->mediaResolver->resolveSrcSet($image);
    }

    public function fetchMatchingImage($component)
    {
        return $this->arrayManager->get(self::PRELOAD_IMAGE_PATH, $component);
    }

    public function fetchMatchingComponent($contentConstructorContent)
    {
        $components = json_decode($contentConstructorContent, true);

        foreach ($components as $component) {
            if (in_array($component['type'], $this->allowedComponents)) {
                if (!($component['data']['componentVisibility']['mobile'] ?? false)) {
                    continue;
                }

                return $component;
            }
        }

        return null;
    }
}
