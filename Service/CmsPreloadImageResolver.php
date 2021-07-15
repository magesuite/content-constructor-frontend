<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class CmsPreloadImageResolver
{
    const PRELOAD_IMAGE_PATH = 'data/items/0/image/decoded';

    /**
     * @var \MageSuite\ContentConstructor\Service\MediaResolver
     */
    protected $mediaResolver;
    /**
     * @var \Magento\Framework\Stdlib\ArrayManager
     */
    protected $arrayManager;
    /**
     * @var array
     */
    protected $allowedComponents;

    public function __construct(
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        \Magento\Framework\Stdlib\ArrayManager $arrayManager,
        $allowedComponents = []
    ) {
        $this->mediaResolver = $mediaResolver;
        $this->arrayManager = $arrayManager;
        $this->allowedComponents = $allowedComponents;
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
            if (array_key_exists($component['type'], $this->allowedComponents)) {
                if (!$component['data']['componentVisibility']['mobile'] || !$component['data']['componentVisibility']['desktop']) {
                    continue;
                }

                return $component;
            }
        }

        return null;
    }
}
