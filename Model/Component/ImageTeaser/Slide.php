<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser;

class Slide extends \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\DirectiveFilter
     */
    private $directiveFilter;

    public function __construct(
        \MageSuite\ContentConstructor\Service\UrlResolver $urlResolver,
        \MageSuite\ContentConstructor\Service\MediaResolver $mediaResolver,
        \MageSuite\ContentConstructorFrontend\Service\DirectiveFilter $directiveFilter,
        array $data = []
    ) {
        parent::__construct($urlResolver, $mediaResolver, $data);
        $this->urlResolver = $urlResolver;
        $this->mediaResolver = $mediaResolver;
        $this->directiveFilter = $directiveFilter;
    }

    public function getSrc()
    {
        $data = $this->getData();

        if (!empty($data['image']['decoded'])) {
            return $this->mediaResolver->resolve($data['image']['decoded']);
        }
    }

    public function getSrcSet()
    {
        $data = $this->getData();

        if (!empty($data['image']['decoded'])) {
            return $this->mediaResolver->resolveSrcSet($data['image']['decoded']);
        }
    }


    public function getAlt()
    {
        $teaser = $this->getData();

        if (isset($teaser['image']['alt']) and !empty($teaser['image']['alt'])) {
            return $teaser['image']['alt'];
        } else if (isset($teaser['headline']) and !empty($teaser['headline'])) {
            return $teaser['headline'];
        } else if (isset($teaser['subheadline']) and !empty($teaser['subheadline'])) {
            return $teaser['subheadline'];
        }

        return  __('Teaser image');
    }

    public function getBadge()
    {
        $teaser = $this->getData();

        if (isset($teaser['badge']) and isset($teaser['badge']['value']) and !empty($teaser['badge']['value'])) {
            return $this->directiveFilter->filter($teaser['badge']['value']);
        }
    }
}