<?php

namespace MageSuite\ContentConstructorFrontend\Config;

class DefaultComponentSupport implements \MageSuite\ContentConstructor\ComponentSupport
{
    /**
     * All components are supported by default
     * @param string $component component type identifier
     * @return bool
     */
    public function isSupported($component)
    {
        return true;
    }
}
