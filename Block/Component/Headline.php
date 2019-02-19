<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class Headline extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/headline.phtml';

    public function getHeadingTag() {
        return $this->getData('headingTag') ?? 'h1';
    }
}