<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class RenderedStylesState
{
    /**
     * @var array Map of stylesheets that have been already printed
     */
    protected $styles = [];

    public function wasRendered($cssPath) {
        return in_array($cssPath, $this->styles);
    }

    public function addRendered($cssPath) {
        $this->styles[] = $cssPath;
    }
}
