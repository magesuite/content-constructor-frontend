<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class Headline extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/headline.phtml';

    public function getHeadingTag() {
        return $this->getData('headingTag') ?? 'h1';
    }
}