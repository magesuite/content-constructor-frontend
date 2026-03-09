<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class UrlResolverTest extends \PHPUnit\Framework\TestCase
{
    protected ?\Magento\TestFramework\ObjectManager $objectManager;
    protected ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepositoryStub;
    protected ?\Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepositoryStub;
    protected ?\Magento\Cms\Api\PageRepositoryInterface $pageRepositoryStub;
    protected ?\MageSuite\ContentConstructorFrontend\Service\UrlResolver $urlResolver;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->productRepositoryStub = $this->getMockBuilder(\Magento\Catalog\Api\ProductRepositoryInterface::class)->getMock();
        $this->categoryRepositoryStub = $this->getMockBuilder(\Magento\Catalog\Api\CategoryRepositoryInterface::class)->getMock();
        $this->pageRepositoryStub = $this->getMockBuilder(\Magento\Cms\Api\PageRepositoryInterface::class)->getMock();

        $this->urlResolver = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Service\UrlResolver::class,
            [
                'productRepository' => $this->productRepositoryStub,
                'categoryRepository' => $this->categoryRepositoryStub,
                'pageRepository' => $this->pageRepositoryStub
            ]
        );
    }

    public function testItImplementsUrlResolverInterface(): void
    {
        $this->assertInstanceOf(\MageSuite\ContentConstructorFrontend\Service\UrlResolver::class, $this->urlResolver);
    }

    public function testItProperlyResolvesUrlType(): void
    {
        $this->assertEquals(\MageSuite\ContentConstructorFrontend\Service\UrlResolver::TYPE_DIRECT, $this->urlResolver->getEntityType('http://google.pl'));
    }

    public function testItProperlyResolvesMediaUrl(): void
    {
        $url = $this->urlResolver->resolve('{{media url="wysiwyg/file.pdf"}}');

        $url = str_replace('pub/', '', $url);
        $this->assertEquals('http://localhost/media/wysiwyg/file.pdf', $url);
    }

    public function testItReturnsEmptyStringWhenUnknownWidgetTypeIsPassed(): void
    {
        $url = $this->urlResolver->resolve('{{widget type="unknown-widget-type"}}');

        $this->assertEquals('', $url);
    }

    public function testItProperlyResolvesDirectUrl(): void
    {
        $url = $this->urlResolver->resolve('http://google.com');

        $this->assertEquals('http://google.com', $url);
    }

    public function testItProperlyResolvesLinkToSection(): void
    {
        $url = $this->urlResolver->resolve('#dummy-section');

        $this->assertEquals('#dummy-section', $url);
    }

    public function testItProperlyResolvesRelativeUrl(): void
    {
        $urls = [
            'dummy-link' => 'http://localhost/index.php/dummy-link/',
            '/dummy-link' => 'http://localhost/index.php/dummy-link',
            '/dummy-link/part_one/part_two/part_three' => 'http://localhost/index.php/dummy-link/part_one/part_two/part_three',
        ];

        foreach ($urls as $url => $expectedUrl) {
            $url = $this->urlResolver->resolve($url);
            $this->assertEquals($expectedUrl, $url);
        }
    }

    public function testItProperlyResolvesProductUrl(): void
    {
        $product = $this->getProductFixture()->setUrlKey('product.phtml');

        $this->productRepositoryStub->method('getById')->willReturn($product);

        $url = $this->urlResolver->resolve('{{widget type="Magento\Catalog\Block\Product\Widget\Link" template="product/widget/link/link_block.phtml" id_path="product/106101"}}');

        $this->assertEquals('http://localhost/index.php/catalog/product/view/s/product.phtml/', $url);
    }

    public function testItProperlyResolvesCategoryUrl(): void
    {
        $category = $this->getCategoryFixture()->setUrl('category.phtml');

        $this->categoryRepositoryStub->method('get')->willReturn($category);

        $url = $this->urlResolver->resolve('{{widget type="Magento\Catalog\Block\Category\Widget\Link" template="category/widget/link/link_block.phtml" id_path="category/50"}}');

        $this->assertEquals('category.phtml', $url);
    }

    public function testItProperlyResolvesPageUrl(): void
    {
        $page = $this->getPageFixture()->setIdentifier('page.phtml');

        $this->pageRepositoryStub->method('getById')->willReturn($page);

        $url = $this->urlResolver->resolve('{{widget type="Magento\Cms\Block\Widget\Page\Link" template="widget/link/link_block.phtml" page_id="149"}}');

        $this->assertEquals('http://localhost/index.php/page.phtml', $url);
    }

    private function getProductFixture(): \Magento\Catalog\Api\Data\ProductInterface
    {
        return $this->objectManager->create(\Magento\Catalog\Api\Data\ProductInterface::class);
    }

    private function getCategoryFixture(): \Magento\Catalog\Api\Data\CategoryInterface
    {
        return $this->objectManager->create(\Magento\Catalog\Api\Data\CategoryInterface::class);
    }

    private function getPageFixture(): \Magento\Cms\Api\Data\PageInterface
    {
        return $this->objectManager->create(\Magento\Cms\Api\Data\PageInterface::class);
    }
}
