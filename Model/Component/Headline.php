<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class Headline extends \Magento\Framework\DataObject
{
    public function getHeadingTag() {
        return $this->getData('headingTag') ?? 'h1';
    }
}
