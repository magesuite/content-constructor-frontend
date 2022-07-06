<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class GenericSlide extends \Magento\Framework\DataObject
{
    const ASPECT_RATIO_REGEX = '/[0-9]+:[0-9]+/';
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\UrlResolver
     */
    protected $urlResolver;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\MediaResolver
     */
    protected $mediaResolver;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver,
        \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver,
        array $data = []
    )
    {
        parent::__construct($data);

        $this->urlResolver = $urlResolver;
        $this->mediaResolver = $mediaResolver;
    }

    public function getCta()
    {
        $data = $this->getData();

        if (!isset($data['cta'])) {
            return null;
        }

        $cta = $data['cta'];
        if (isset($cta['href']) && !empty($cta['href'])) {
            $cta['href'] = $this->urlResolver->resolve($cta['href']);
        }

        return $cta;
    }

    public function getWidth()
    {
        if (!$this->getData('width')) {
            $data = $this->getData();

            if (empty($data['image']['decoded'])) {
                return null;
            }

            $srcSetArray = $this->mediaResolver->resolveSrcSetArray($data['image']['decoded']);

            $this->setData('width', max(array_keys($srcSetArray)));
        }

        return $this->getData('width');
    }

    public function getHeight()
    {
        $width = $this->getWidth();
        $data = $this->getData();

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

    public function getSrc()
    {
        $data = $this->getData();

        if (!empty($data['decodedImage'])) {
            return $this->mediaResolver->resolve($data['decodedImage']);
        }
    }

    public function getSrcSet()
    {
        $data = $this->getData();

        if (!empty($data['decodedImage'])) {
            return $this->mediaResolver->resolveSrcSet($data['decodedImage']);
        }
    }

    public function getWebpSrcSet()
    {
        $srcSet = $this->getSrcSet();

        return $this->mediaResolver->resolveWebpSrcSet($srcSet);
    }

    public function isSvg()
    {
        $src = $this->getSrc();

        if (empty($src)) {
            return false;
        }

        $extension = pathinfo($src, PATHINFO_EXTENSION);

        return strtolower($extension) == 'svg';
    }

    public function getAlt()
    {
        $hero = $this->getData();

        if (isset($hero['image']['alt']) and !empty($hero['image']['alt'])) {
            return $hero['image']['alt'];
        } else if (isset($hero['headline']) and !empty($hero['headline'])) {
            return $hero['headline'];
        } else if (isset($hero['subheadline']) and !empty($hero['subheadline'])) {
            return $hero['subheadline'];
        }

        return __('Teaser image');
    }

    /**
     * @param $data
     * @return bool
     */
    protected function aspectRatioIsDefined($data): bool
    {
        return !isset($data['image']['aspect_ratio']) ||
            empty($data['image']['aspect_ratio']) ||
            !preg_match(self::ASPECT_RATIO_REGEX, $data['image']['aspect_ratio']);
    }
}
