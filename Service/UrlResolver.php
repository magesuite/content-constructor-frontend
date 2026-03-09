<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Service;

class UrlResolver
{
    protected array $classesToTypes = [
        \Magento\Catalog\Block\Category\Widget\Link::class => self::TYPE_CATEGORY,
        \Magento\Catalog\Block\Product\Widget\Link::class => self::TYPE_PRODUCT,
        \Magento\Cms\Block\Widget\Page\Link::class => self::TYPE_PAGE
    ];

    public const TYPE_CATEGORY = 'category';
    public const TYPE_PRODUCT = 'product';
    public const TYPE_PAGE = 'page';
    public const TYPE_DIRECT = 'direct';
    public const TYPE_MEDIA = 'media';

    public const WIDGET_REGEXP = '/{{widget .*?}}/si';
    public const MEDIA_REGEXP = '/{{media .*?}}/si';

    protected \Magento\Catalog\Api\ProductRepositoryInterface $productRepository;
    protected \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository;
    protected \Magento\Framework\UrlInterface $urlBuilder;
    protected \Magento\Cms\Api\PageRepositoryInterface $pageRepository;
    protected \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver;

    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
        \Magento\Cms\Api\PageRepositoryInterface $pageRepository,
        \Magento\Framework\UrlInterface $urlBuilder,
        \MageSuite\ContentConstructorFrontend\Service\MediaResolver $mediaResolver
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->pageRepository = $pageRepository;
        $this->urlBuilder = $urlBuilder;
        $this->mediaResolver = $mediaResolver;
    }

    /**
     * Returns URL for entities (product, category, cms page) using identifier
     * example: {{widget type="Magento\Catalog\Block\Product\Widget\Link" template="product/widget/link/link_block.phtml" id_path="product/106101"}}
     */
    public function resolve(string $resourceIdentifier): string
    {
        if (empty($resourceIdentifier)) {
            return $resourceIdentifier;
        }

        if ($this->isMediaUrl($resourceIdentifier)) {
            return $this->getMediaUrl($resourceIdentifier);
        }

        if ($this->isDirectUrl($resourceIdentifier)) {
            return $this->getUrl($resourceIdentifier);
        }

        $type = $this->getEntityType($resourceIdentifier);

        if (empty($type)) {
            return '';
        }

        $id = $this->getEntityId($resourceIdentifier, $type);

        $functionName = sprintf('get%sUrl', ucfirst($type));

        return $this->$functionName($id);
    }

    protected function isDirectUrl(string $resourceIdentifier): bool
    {
        return preg_match(self::WIDGET_REGEXP, $resourceIdentifier) !== 1;
    }

    protected function isMediaUrl(string $resourceIdentifier): bool
    {
        return preg_match(self::MEDIA_REGEXP, $resourceIdentifier) === 1;
    }

    protected function getMediaUrl(string $resourceIdentifier): string
    {
        return $this->mediaResolver->resolve($resourceIdentifier);
    }

    protected function getProductUrl(string $id): string
    {
        $product = $this->productRepository->getById($id);

        return $product->getUrlModel()->getUrl($product);
    }

    protected function getUrl(string $url): string
    {
        if (str_starts_with($url, '#')) {
            return $url;
        }

        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return $url;
        }

        if (str_starts_with($url, '/')) {
            return $this->urlBuilder->getUrl('', ['_direct' => ltrim($url, '/')]);
        }

        $url = ltrim($url, '/');

        return $this->urlBuilder->getUrl($url);
    }

    protected function getCategoryUrl(string $id): string
    {
        return $this->categoryRepository->get($id)->getUrl();
    }

    protected function getPageUrl(string $id): string
    {
        $page = $this->pageRepository->getById($id);

        return $this->urlBuilder->getUrl(null, ['_direct' => $page->getIdentifier()]);
    }

    public function getEntityId(string $string, string $type): string
    {
        if ($type == self::TYPE_PAGE) {
            return $this->getPageId($string);
        }

        return $this->getProductOrCategoryId($string, $type);
    }

    public function getEntityType(string $string): ?string
    {
        if ($this->isDirectUrl($string)) {
            return self::TYPE_DIRECT;
        }

        preg_match_all('/type="(?<class>.+?)"/si', $string, $results, PREG_PATTERN_ORDER);

        $class = $results['class'][0];

        return $this->classesToTypes[$class] ?? null;
    }

    protected function getPageId(string $string): string
    {
        preg_match_all('/page_id="(?<id>[0-9]+)"/', $string, $results, PREG_PATTERN_ORDER);

        return $results['id'][0];
    }

    protected function getProductOrCategoryId(string $string, string $type): string
    {
        preg_match_all('/' . $type . '\/(?<id>[0-9]+)/si', $string, $results, PREG_PATTERN_ORDER);

        return $results['id'][0];
    }
}
