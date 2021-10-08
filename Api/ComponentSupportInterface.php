<?php

namespace MageSuite\ContentConstructorFrontend\Api;

/**
 * Interface returns information if the component is supported in project
 * @package MageSuite\ContentConstructor
 */
interface ComponentSupportInterface
{
    /**
     * @param string $component component type identifier
     * @return bool
     */
    public function isSupported($component);
}
