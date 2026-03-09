<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class GenericSlide extends \Magento\Framework\DataObject
{
    const ASPECT_RATIO_REGEX = '/[0-9]+:[0-9]+/';

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver,
        protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        array $data = []
    ) {
        parent::__construct($data);
    }

    public function getCta(): ?array
    {
        $data = $this->getData();

        if (!isset($data['cta'])) {
            return null;
        }

        $cta = $data['cta'];

        if (!empty($cta['href'])) {
            $cta['href'] = $this->getUrl($cta['href']);
        }

        return $cta;
    }

    public function getHref(): ?string
    {
        $href = $this->_getData('href');

        if (!$href) {
            return $href;
        }

        return $this->getUrl($href);
    }

    public function getUrl(string $url): string
    {
        $url = $this->urlResolver->resolve($url);

        return rtrim($url, '/');
    }

    public function getWidth(): ?int
    {
        if (!$this->getData('width')) {
            $data = $this->getData();

            if (empty($data['image']['decoded'])) {
                return null;
            }

            $srcSetArray = $this->mediaResolver->resolveSrcSetArray($data['image']['decoded']);

            if (empty($srcSetArray) || !is_array($srcSetArray)) {
                return null;
            }

            $this->setData('width', max(array_keys($srcSetArray)));
        }

        return (int)$this->getData('width');
    }

    public function getHeight(): ?int
    {
        $width = $this->getWidth();
        $data = $this->getData();

        if (!$width) {
            return null;
        }

        if ($this->aspectRatioIsDefined($data)) {
            $originalImageSize = $this->mediaResolver->resolveOriginalImageSize($data['image']['decoded']);

            if ($originalImageSize == null || !is_array($originalImageSize)) {
                return null;
            }

            $widthRatio = (int)$originalImageSize['width'];
            $heightRatio = (int)$originalImageSize['height'];
        } else {
            list($widthRatio, $heightRatio) = explode(':', $data['image']['aspect_ratio']);
        }

        return (int)ceil(($width / $widthRatio) * $heightRatio);
    }

    public function getSrc(): ?string
    {
        $data = $this->getData();

        if (!empty($data['decodedImage'])) {
            return $this->mediaResolver->resolve($data['decodedImage']);
        }
    }

    public function getSrcSet(): ?string
    {
        $data = $this->getData();

        if (!empty($data['decodedImage'])) {
            return $this->mediaResolver->resolveSrcSet($data['decodedImage']);
        }
    }

    public function isSvg(): bool
    {
        $src = $this->getSrc();

        if (empty($src)) {
            return false;
        }

        $extension = pathinfo($src, PATHINFO_EXTENSION); //phpcs:ignore

        return strtolower($extension) == 'svg';
    }

    public function getAlt(): string
    {
        $teaser = $this->getData();

        if (!empty($teaser['image_alt'])) {
            return $teaser['image_alt'];
        }

        // If whole teaser is linked return empty alt to avoid duplicate content (link contains accessible text)
        if (empty($teaser['cta']['link'])) {
            return '';
        }

        // Generate alt text based on slogan and description
        $generatedAltText = '';

        if (!empty($teaser['slogan'])) {
            $generatedAltText = $teaser['slogan'];
        }

        if (!empty($teaser['description'])) {
            $generatedAltText = $generatedAltText . ' - ' . $teaser['description'];
        }

        return trim($generatedAltText);
    }

    protected function aspectRatioIsDefined(array $data): bool
    {
        return !isset($data['image']['aspect_ratio']) ||
            empty($data['image']['aspect_ratio']) ||
            !preg_match(self::ASPECT_RATIO_REGEX, $data['image']['aspect_ratio']);
    }
}
