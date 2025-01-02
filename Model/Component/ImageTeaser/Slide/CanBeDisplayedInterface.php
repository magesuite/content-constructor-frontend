<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide;

interface CanBeDisplayedInterface
{
    /**
     * Determine if slide should be displayed
     * @param array $slide
     * @return bool
     */
    public function execute(\MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Slide $slide): bool;
}
