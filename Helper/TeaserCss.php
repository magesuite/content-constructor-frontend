<?php
namespace MageSuite\ContentConstructorFrontend\Helper;

class TeaserCss extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getUniqueComponentId()
    {
        return uniqid('t-');
    }
}
