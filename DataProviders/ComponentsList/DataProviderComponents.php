<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;


abstract class DataProviderComponents implements DataProviderComponentsInterface
{
    protected \Magento\Catalog\Helper\Category $categoryHelper;

    public function __construct(\Magento\Catalog\Helper\Category $categoryHelper)
    {
        $this->categoryHelper = $categoryHelper;
    }

    protected function getDecodedImage($name)
    {
        return '{{media url="creative_components/' . $name . '"}}';
    }

    protected function getImage($name)
    {
        $decodedImage = $this->getDecodedImage($name);

        return '/admin/content-constructor/image/show/image/' . base64_encode($decodedImage);
    }

    public static function getHeadlineBlock($title, $subtitle = ''){
        $data = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => $title
                ]
            ]
        ];

        if($subtitle) {
            $data['_data']['data']['subtitle'] = $subtitle;
        }

        return $data;
    }
}
