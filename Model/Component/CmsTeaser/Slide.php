<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\CmsTeaser;

class Slide extends \MageSuite\ContentConstructorFrontend\Model\Component\GenericSlide
{
    public function getHref() {
        if(!empty($this->getData()['href'])) {
            return $this->getData()['href'] = $this->urlResolver->resolve($this->getData()['href']);
        }

        return '';
    }

    public function getSrc()
    {
        $data = $this->getData();

        return $data['image']['src'] ?? '';
    }

    public function getSrcSet()
    {
        $data = $this->getData();

        return $data['image']['srcSet'] ?? '';
    }
}