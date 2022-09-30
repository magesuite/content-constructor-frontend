<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;


abstract class DataProviderComponents implements DataProviderComponentsInterface
{
    protected \Magento\Catalog\Helper\Category $categoryHelper;

    protected \Magento\Framework\UrlInterface $url;

    public function __construct(
            \Magento\Catalog\Helper\Category $categoryHelper,
            \Magento\Framework\UrlInterface $url
    ) {
        $this->categoryHelper = $categoryHelper;
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
