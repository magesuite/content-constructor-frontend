<?php

namespace MageSuite\ContentConstructorFrontend\Test\Integration\DataProviders;

class BrandDataProviderTest extends \PHPUnit\Framework\TestCase
{
    protected $expectedBrands = [
        [
            'href' => 'http://localhost/index.php/brands/urlkey',
            'image' => [
                'src' => 'http://localhost/media/brands/testimage.png',
                'alt' => 'test_brand_name'
            ]
        ],
        [
            'href' => 'http://localhost/index.php/brands/urlkey2',
            'image' => [
                'src' => 'http://localhost/media/brands/testimage.png',
                'alt' => 'test_brand_name2'
            ]
        ]
    ];

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\DataProviders\BrandDataProvider
     */
    private $dataProvider;

    public function setUp(): void
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->dataProvider = $this->objectManager
            ->get(\MageSuite\ContentConstructorFrontend\DataProviders\BrandDataProvider::class);
    }

    /**
     * @magentoDbIsolation enabled
     * @magentoDataFixture loadBrands
     */
    public function testItReturnsBrandsCorrectly()
    {
        $brands = $this->dataProvider->getBrands();
        foreach ($brands as $index => $brand) {
            $brands[$index]['image']['src'] = str_replace('pub/', '', $brand['image']['src']);
        }

        $this->assertEquals($this->expectedBrands, $brands);
    }

    public static function loadBrands()
    {
        include __DIR__ . '/_files/brands.php';
    }
}
