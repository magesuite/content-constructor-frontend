<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive;

interface DirectiveInterface
{
    /**
     * @param $originalValue string
     * @return mixed
     */
    public function setOriginalValue($originalValue);

    /**
     * @return string
     */
    public function getOriginalValue();

    /**
     * @param $arguments array
     * @return self
     */
    public function setArguments($arguments);

    /**
     * @return array
     */
    public function getArguments();

    /**
     * @param $identifier string
     * @return self
     */
    public function setIdentifier($identifier);

    /**
     * @return string
     */
    public function getIdentifier();

    /**
     * @return string
     */
    public function getValue();

    /**
     * @return array
     */
    public function getIdentities();
}