<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive;

interface ParserInterface
{
    /**
     * @param $text
     * @return Directive[]
     */
    public function getDirectives($text);
}