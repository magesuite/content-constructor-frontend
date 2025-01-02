<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide;

class CanBeDisplayed implements CanBeDisplayedInterface
{
    public function execute(\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide $slide): bool
    {
        return true;
    }
}
