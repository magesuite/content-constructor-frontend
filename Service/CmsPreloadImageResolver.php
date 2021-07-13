<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class CmsPreloadImageResolver
{
    const PRELOAD_IMAGE_PATH = 'data/items/0/image/decoded';

    protected $allowedComponents = [
        'hero-carousel',
        'image-teaser-2',
        'mosaic'
    ];
    /**
     * @var \MageSuite\ContentConstructor\Service\MediaResolver
     */
    protected $mediaResolver;
    /**
     * @var \Magento\Framework\Stdlib\ArrayManager
     */
    protected $arrayManager;

    public function __construct(
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        \Magento\Framework\Stdlib\ArrayManager $arrayManager
    ) {
        $this->mediaResolver = $mediaResolver;
        $this->arrayManager = $arrayManager;
    }

    public function resolve($contentConstructorContent, $imageWidth)
    {
        if (empty($contentConstructorContent)) {
            return null;
        }

        return $this->getPreloadImageUrl($contentConstructorContent, $imageWidth);
    }

    public function getPreloadImageUrl($contentConstructorContent, $imageWidth)
    {
        $component = $this->fetchMatchingComponent($contentConstructorContent);

        if (!$component) {
            return null;
        }

        $image = $this->fetchMatchingImage($component);

        if (!$image) {
            return null;
        }

        return $this->resolveSrcSet($image, $imageWidth);
    }

    public function resolveSrcSet($image, $imageWidth)
    {
        $srcSet = $this->mediaResolver->resolveSrcSetArray($image);

        if (!isset($srcSet[$imageWidth])) {
            return null;
        }

        return $srcSet[$imageWidth];
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
                return $component;
            }
        }

        return null;
    }
}
