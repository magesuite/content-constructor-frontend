<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component\ProductGrid\ImageTeaser;

class Configuration
{
    /**
     * @var \MageSuite\ContentConstructor\Service\UrlResolver
     */
    protected $urlResolver;

    public function __construct(\MageSuite\ContentConstructor\Service\UrlResolver $urlResolver)
    {
        $this->urlResolver = $urlResolver;
    }

    public function parseImageTeaser($data)
    {
        $configuration = $data[0];
        $configuration = $this->prepareHref($configuration);

        return [$configuration];
    }

    public function prepareHref($configuration)
    {
        if(!isset($configuration['cta']) || !isset($configuration['cta']['href'])){
            return $configuration;
        }

        $configuration['cta']['href'] = $this->urlResolver->resolve($configuration['cta']['href']);

        return $configuration;
    }

    public function mapImageTeaserConfig($data)
    {
        return [
            'id' => '0',
            'mobile' => $data[0]['isAvailableForMobile'] ? 1 : 0,
            'size' => $this->extractSizeValues($data[0]['sizeSelect']),
            'gridPosition' => [
                'x' => $data[0]['position'],
                'y' => $data[0]['row'],
            ],
        ];

    }

    protected function extractSizeValues($sizeSelect)
    {
        $sizes = explode('x', $sizeSelect);

        return [
            'x' => $sizes[0],
            'y' => $sizes[1]
        ];
    }
}
