<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class AccordionGroupClassResolverTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\AccordionGroupClassResolver
     */
    private $accordionGroupClassResolver;

    public function setUp()
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->accordionGroupClassResolver = $this->objectManager->create(\MageSuite\ContentConstructorFrontend\Service\AccordionGroupClassResolver::class);
    }

    public function testReturnCorrectCssClass()
    {
        $headline = 'Weiß, Goldmann, Göbel, Weiss, Göthe, Goethe und Götz';
        
        $this->assertEquals('group-weiss-goldmann-gobel', $this->accordionGroupClassResolver->resolveGroupClass($headline));
    }
}