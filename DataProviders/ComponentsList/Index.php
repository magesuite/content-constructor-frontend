<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class Index extends DataProviderComponents
{
    protected array $blocks = [];

    public function getBlocks(): array
    {
        $this->blocks[] = self::getHeadlineBlock('CONTENT CONSTRUCTOR', 'The list of components');
        $blocksToAdd = [
            ['Accordion - Container Width', 'accordioncontainerwidth'],
            ['Accordion - Optimal Reading Width', 'accordionoptimalreadingwidth', true],
            ['Brand Carousel', 'brand-carousel', true],
            ['Button', 'button', true],
            ['Category Links', 'category-links', true],
            ['CMS Pages Teaser', 'cms-pages-teaser', true],
            ['Daily Deal', 'daily-deal', true],
            ['Headline', 'headline', true],
            ['Hero Carousel Large teaser mobile scenario', 'herocarousel-large'],
            ['Hero Carousel Slider mobile scenario', 'herocarousel-slider'],
            ['Hero Carousel with Advanced Options', 'hero-carousel-with-advanced-options', true],
            ['Icon', 'icon'],
            ['Icon with Advanced Options', 'icon-with-advanced-options', true],
            ['Image Teaser Browser width', 'itbrowserwidth'],
            ['Image Teaser Content width', 'itcontentwidth'],
            ['Image Teaser Browser width slider', 'itbrowserwidthslider'],
            ['Image Teaser Content width slider', 'itcontentwidthslider'],
            ['Image Teaser with Advanced Options', 'image-teaser-with-advanced-options'],
            ['Contrast Optimizers', 'contrastoptimizers', true],
            ['Instagram', 'instagram', true],
            ['Mosaic - Content', 'mosaiccontentwidth'],
            ['Mosaic - Browser', 'mosaicbrowserwidth'],
            ['Mosaic with Advanced Options', 'mosaic-with-advanced-options', true],
            ['Products grid without image teaser', 'products-grid-no-it'],
            ['Products grid with image teaser on the left', 'products-grid-it-left'],
            ['Products grid with image teaser on the right', 'products-grid-it-right'],
            ['Products grid with image teaser in the middle', 'products-grid-it-center'],
            ['Products grid with Advanced Options', 'products-grid-with-advanced-options', true],
            ['Paragraph', 'paragraph', true],
            ['Product Carousel', 'product-carousel', true],
            ['Product Finder', 'productfinder', true],
            ['Teaser & Text Browser width', 'ttbrowserwidth'],
            ['Teaser & Text Content width', 'ttcontentwidth'],
            ['Teaser & Text with Advanced Options', 'teaser-and-text-with-advanced-options', true],
            ['Video YT', 'video-yt'],
            ['Video Vimeo', 'video-vimeo'],
            ['Video FB', 'video-fb'],
            ['Video MP4', 'video-mp4', true],
        ];

        foreach ($blocksToAdd as $block) {
            $this->addBlock($block[0], $block[1]);
            if (isset($block[2]) && $block[2]) {
                $this->addSeparator();
            }
        }
        return $this->blocks;
    }

    protected function addBlock(string $text, string $path): void
    {
        $this->blocks[] = [
            '_type' => '\Magento\Cms\Block\Widget\Page\Link',
            '_template' => 'MageSuite_ContentConstructorFrontend::widget/link/link_block.phtml',
            '_data' => [
                'section' => 'content',
                'anchor_text' => $text,
                '_path' => 'contentconstructor/components/index/page/' . $path
            ],
        ];
    }

    protected function addSeparator(): void
    {
        $this->blocks[] = [
            '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
            '_data' => [
                'section' => 'content',
                'type' => 'separator',
                'data' => []
            ]
        ];
    }
}
