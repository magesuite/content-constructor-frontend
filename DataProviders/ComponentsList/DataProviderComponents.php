<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;


abstract class DataProviderComponents implements DataProviderComponentsInterface
{
    protected \Magento\Framework\UrlInterface $url;

    public function __construct(\Magento\Framework\UrlInterface $url) {
        $this->url = $url;
    }

    protected function getDecodedImage($name)
    {
        return $this->url->getUrl('contentconstructor/components/image', ['image_path' => base64_encode($name)]);
    }

    protected function getImage($name)
    {
        $decodedImage = $this->getDecodedImage($name);

        return '/admin/content-constructor/image/show/image/' . base64_encode($decodedImage);
    }
}
