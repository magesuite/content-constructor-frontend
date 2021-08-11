<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\Service;

class CmsPreloadImageResolverTest extends \Magento\TestFramework\TestCase\AbstractController
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    protected $objectManager;

    protected function setUp() : void
    {
        parent::setUp();
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoConfigFixture current_store cc_frontend_extension/preload_image/enabled 1
     * @magentoDataFixture copyImages
     * @magentoDataFixture loadPage
     * @magentoAppArea frontend
     */
    public function testItAddCorrectPreloadUrl()
    {
        $this->dispatch('/page-test');

        $body = $this->getResponse()->getBody();

        $hasPreloadLinkFirstPart = strpos($body, '<link rel="preload" href="http://localhost/') !== false;
        $hasPreloadLinkSecondPart = strpos($body, 'media/wysiwyg/.thumbs/768/magento_image.png" imagesrcset="') !== false;

        $this->assertTrue($hasPreloadLinkFirstPart);
        $this->assertTrue($hasPreloadLinkSecondPart);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoConfigFixture current_store cc_frontend_extension/preload_image/enabled 1
     * @magentoDataFixture copyImages
     * @magentoDataFixture loadPage
     * @magentoAppArea frontend
     */
    public function testItSkipNotMatchingCCComponents()
    {
        $this->dispatch('/page-with-headline');

        $body = $this->getResponse()->getBody();

        $hasPreloadLinkFirstPart = strpos($body, '<link rel="preload" href="http://localhost/') !== false;
        $hasPreloadLinkSecondPart = strpos($body, 'media/wysiwyg/.thumbs/768/magento_image_second.png" imagesrcset="') !== false;

        $this->assertTrue($hasPreloadLinkFirstPart);
        $this->assertTrue($hasPreloadLinkSecondPart);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoConfigFixture current_store cc_frontend_extension/preload_image/enabled 1
     * @magentoDataFixture copyImages
     * @magentoDataFixture loadPage
     * @magentoAppArea frontend
     */
    public function testItCheckComponentVisibilityCorrectly()
    {
        $this->dispatch('/page-with-hidden-component');

        $body = $this->getResponse()->getBody();

        $hasPreloadLinkFirstPart = strpos($body, '<link rel="preload" href="http://localhost/') !== false;
        $hasPreloadLinkSecondPart = strpos($body, 'media/wysiwyg/.thumbs/768/magento_image_third.png" imagesrcset="') !== false;

        $this->assertTrue($hasPreloadLinkFirstPart);
        $this->assertTrue($hasPreloadLinkSecondPart);
    }

    public static function loadPage()
    {
        include __DIR__ . '/../_files/page.php';
    }

    public static function copyImages()
    {
        include __DIR__ . '/../_files/component_image.php';
    }
}
