<?php

namespace MageSuite\ContentConstructorFrontend\Block\Component;

class Paragraph  extends AbstractComponent
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::component/paragraph.phtml';

    protected $identities = [];

    public function setIdentities($identities)
    {
        $this->identities = $identities;
    }

    public function getIdentities()
    {
        return $this->identities;
    }
}
