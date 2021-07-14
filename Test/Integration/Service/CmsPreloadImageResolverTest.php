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
     * @magentoDataFixture copyImages
     * @magentoDataFixture loadPage
     * @magentoAppArea frontend
     */
    public function testItAddCorrectPreloadUrl()
    {
        $this->dispatch('/page-test');

        $body = $this->getResponse()->getBody();

        $hasPreloadLink = strpos($body, '<link rel="preload" href="http://localhost/media/wysiwyg/.thumbs/480/magento_image.png" as="image">') !== false;

        $this->assertTrue($hasPreloadLink);
    }

    /**
     * @magentoAppIsolation enabled
     * @magentoDbIsolation enabled
     * @magentoDataFixture copyImages
     * @magentoDataFixture loadPage
     * @magentoAppArea frontend
     */
    public function testItSkipNotMatchingCCComponents()
    {
        $this->dispatch('/page-with-headline');

        $body = $this->getResponse()->getBody();

        $hasPreloadLink = strpos($body, '<link rel="preload" href="http://localhost/media/wysiwyg/.thumbs/480/magento_image_second.png" as="image">') !== false;

        $this->assertTrue($hasPreloadLink);
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
