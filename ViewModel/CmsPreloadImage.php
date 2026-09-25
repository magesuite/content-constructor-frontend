<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\ViewModel;

class CmsPreloadImage implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected ?array $preloadImageData = null;

    protected bool $preloadImageDataResolved = false;

    protected array $preloadImages = [];

    protected bool $preloadImagesResolved = false;

    protected \Magento\Cms\Model\Page $cmsPage;

    protected \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver $cmsPreloadImageResolver;

    protected \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration;

    public function __construct(
        \Magento\Cms\Model\Page $cmsPage,
        \MageSuite\ContentConstructorFrontend\Service\CmsPreloadImageResolver $cmsPreloadImageResolver,
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration
    ) {
        $this->cmsPage = $cmsPage;
        $this->cmsPreloadImageResolver = $cmsPreloadImageResolver;
        $this->configuration = $configuration;
    }

    protected function getPreloadImageData($imageWidth)
    {
        if (!$this->configuration->isPreloadImageEnabled()) {
            return null;
        }

        if (!$this->preloadImageDataResolved) {
            $this->preloadImageData = $this->cmsPreloadImageResolver->resolve($this->cmsPage->getContentConstructorContent(), $imageWidth);
            $this->preloadImageDataResolved = true;
        }

        return $this->preloadImageData;
    }

    public function getPreloadImage($imageWidth)
    {
        $preloadImageData = $this->getPreloadImageData($imageWidth);

        if (!empty($preloadImageData['preload_image'])) {
            return $preloadImageData['preload_image'];
        }

        return false;
    }

    public function getPreloadImageSrcSet($imageWidth)
    {
        $preloadImageData = $this->getPreloadImageData($imageWidth);

        if (!empty($preloadImageData['src_set'])) {
            return $preloadImageData['src_set'];
        }

        return false;
    }

    public function getPreloadImageMedia(int $imageWidth): ?string
    {
        $preloadImageData = $this->getPreloadImageData($imageWidth);

        if (!empty($preloadImageData['media'])) {
            return $preloadImageData['media'];
        }

        return null;
    }

    public function getPreloadImages(int $imageWidth): array
    {
        if (!$this->configuration->isPreloadImageEnabled()) {
            return [];
        }

        if (!$this->preloadImagesResolved) {
            $this->preloadImages = $this->cmsPreloadImageResolver->resolveAll($this->cmsPage->getContentConstructorContent(), $imageWidth);
            $this->preloadImagesResolved = true;
        }

        return $this->preloadImages;
    }
}
