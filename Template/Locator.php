<?php

namespace MageSuite\ContentConstructorFrontend\Template;

class Locator implements \MageSuite\ContentConstructor\View\TemplateLocator
{
    /**
     * @var \MageSuite\Frontend\Template\Locator
     */
    private $locator;

    public function __construct(\MageSuite\Frontend\Template\Locator $locator)
    {
        $this->locator = $locator;
    }

    public function locate($path)
    {
        return $this->locator->locate($path);
    }
}
