<?php

namespace MageSuite\ContentConstructorFrontend\Api\Data;

interface ComponentInterface
{
    /**
     * Renders component with specified configuration
     * @param array $configuration
     * @return mixed
     */
    public function render(array $configuration);
}
