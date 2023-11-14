<?php

namespace MageSuite\ContentConstructorFrontend\Template;

class Twig implements \MageSuite\ContentConstructor\View\Template
{
    /**
     * @var \MageSuite\Frontend\Template\Twig
     */
    private $twig;

    public function __construct(\MageSuite\Frontend\Template\Twig $twig)
    {
        $this->twig = $twig;
    }

    public function render(string $templateLocation, array $data)
    {
        return $this->twig->render($templateLocation, $data);
    }
}
