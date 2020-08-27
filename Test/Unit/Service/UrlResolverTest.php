<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class UrlResolverTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\UrlResolver
     */
    private $urlResolver;

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $productRepositoryStub;

    /**
     * @var \Magento\Catalog\Api\CategoryRepositoryInterface
     */
    private $categoryRepositoryStub;

    /**
     * @var \Magento\Cms\Api\PageRepositoryInterface
     */
    private $pageRepositoryStub;

    public function setUp(): void {
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

    public function testItImplementsUrlResolverInterface() {
        $this->assertInstanceOf(\MageSuite\ContentConstructor\Service\UrlResolver::class, $this->urlResolver);
    }

    public function testItProperlyResolvesUrlType() {
        $this->assertEquals(\MageSuite\ContentConstructorFrontend\Service\UrlResolver::TYPE_DIRECT,$this->urlResolver->getEntityType('http://google.pl'));
    }

    public function testItProperlyResolvesMediaUrl() {
        $url = $this
            ->urlResolver
            ->resolve('{{media url="wysiwyg/file.pdf"}}');

        $this->assertEquals('http://localhost/pub/media/wysiwyg/file.pdf', $url);
    }

    public function testItReturnsEmptyStringWhenUnknownWidgetTypeIsPassed() {
        $url = $this->urlResolver->resolve('{{widget type="unknown-widget-type"}}');

        $this->assertEquals('', $url);
    }

    public function testItProperlyResolvesDirectUrl() {
        $url = $this
            ->urlResolver
            ->resolve('http://google.com');

        $this->assertEquals('http://google.com', $url);
    }

    public function testItProperlyResolvesProductUrl() {
        $product = $this->getProductFixture()->setUrlKey('product.phtml');

        $this->productRepositoryStub->method('getById')->willReturn($product);

        $url = $this
            ->urlResolver
            ->resolve('{{widget type="Magento\Catalog\Block\Product\Widget\Link" template="product/widget/link/link_block.phtml" id_path="product/106101"}}');

        $this->assertEquals('http://localhost/index.php/catalog/product/view/s/product.phtml/', $url);
    }

    public function testItProperlyResolvesCategoryUrl() {
        $category = $this->getCategoryFixture()->setUrl('category.phtml');

        $this->categoryRepositoryStub->method('get')->willReturn($category);

        $url = $this
            ->urlResolver
            ->resolve('{{widget type="Magento\Catalog\Block\Category\Widget\Link" template="category/widget/link/link_block.phtml" id_path="category/50"}}');

        $this->assertEquals('category.phtml', $url);
    }

    public function testItProperlyResolvesPageUrl() {
        $page = $this->getPageFixture()->setIdentifier('page.phtml');

        $this->pageRepositoryStub->method('getById')->willReturn($page);

        $url = $this
            ->urlResolver
            ->resolve('{{widget type="Magento\Cms\Block\Widget\Page\Link" template="widget/link/link_block.phtml" page_id="149"}}');

        $this->assertEquals('http://localhost/index.php/page.phtml', $url);
    }

    /**
     * @return \Magento\Catalog\Model\Product
     */
    private function getProductFixture() {
        return $this->objectManager->create(\Magento\Catalog\Api\Data\ProductInterface::class);
    }

    /**
     * @return \Magento\Catalog\Model\Category
     */
    private function getCategoryFixture() {
        return $this->objectManager->create(\Magento\Catalog\Api\Data\CategoryInterface::class);
    }

    /**
     * @return \Magento\Cms\Model\Page
     */
    private function getPageFixture() {
        return $this->objectManager->create(\Magento\Cms\Api\Data\PageInterface::class);
    }
}
