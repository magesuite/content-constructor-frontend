<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class ComponentPool
{
    protected $components;
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $components)
    {
        $this->objectManager = $objectManager;
        $this->components = $components;
    }

    /**
     * @param $componentName
     * @param $classOverrides
     * @return \MageSuite\ContentConstructor\Component
     */
    public function getClassName(string $componentName)
    {
        if(!isset($this->components[$componentName])) {
            return null;
        }

        return $this->components[$componentName];
    }
}