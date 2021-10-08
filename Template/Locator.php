<?php

namespace MageSuite\ContentConstructorFrontend\Template;

class Locator
{
    /**
     * @var \MageSuite\Frontend\Template\Locator
     */
    protected $locator;

    public function __construct(\MageSuite\Frontend\Template\Locator $locator)
    {
        $this->locator = $locator;
    }

    public function locate($path)
    {
        return $this->locator->locate($path);
    }
}
