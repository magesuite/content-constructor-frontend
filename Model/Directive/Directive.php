<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive;

class Directive implements DirectiveInterface
{
    /**
     * @var array
     */
    protected $arguments;

    /**
     * @var string
     */
    protected $identifier;

    /**
     * @var string
     */
    protected $originalValue;

    public function setArguments($arguments)
    {
        $this->arguments = $arguments;
    }

    public function getArguments()
    {
        return $this->arguments;
    }

    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function setOriginalValue($originalValue)
    {
        $this->originalValue = $originalValue;
    }

    public function getOriginalValue()
    {
        return $this->originalValue;
    }

    public function getValue()
    {
        return null;
    }

    public function getIdentities()
    {
        return [];
    }
}
