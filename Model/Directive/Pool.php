<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive;

class Pool
{
    /**
     * @var string[]
     */
    protected $directives = [];

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $objectManager;

    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        $directives = []
    ) {
        $this->directives = $directives;
        $this->objectManager = $objectManager;
    }

    public function create($identifier)
    {
        if (!isset($this->directives[$identifier])) {
            return null;
        }

        $className = $this->directives[$identifier];

        return $this->objectManager->create($className);
    }

    public function getDefinedDirectivesIdentifiers()
    {
        return array_keys($this->directives);
    }
}
