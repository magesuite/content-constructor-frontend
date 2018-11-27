<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;


abstract class DataProviderComponents implements DataProviderComponentsInterface
{
    protected function getDecodedImage($name) {
        return '{{media url="creative_components/'.$name.'"}}';
    }

    protected function getImage($name){
        $decodedImage = $this->getDecodedImage($name);

        return '/admin/content-constructor/image/show/image/'.base64_encode($decodedImage);
    }
}
