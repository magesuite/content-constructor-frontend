<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaser;

class Slide extends \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
{
    public function getHref(): ?string
    {
        if (!empty($this->getData()['href'])) {
            return $this->getData()['href'] = $this->urlResolver->resolve($this->getData()['href']);
        }

        return '';
    }

    public function getSrc(): ?string
    {
        $data = $this->getData();

        return $data['image']['src'] ?? '';
    }

    public function getSrcSet(): ?string
    {
        $data = $this->getData();

        return $data['image']['srcSet'] ?? '';
    }
}
