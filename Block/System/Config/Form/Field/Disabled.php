<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Block\System\Config\Form\Field;

class Disabled extends \Magento\Config\Block\System\Config\Form\Field
{
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element): string
    {
        $element->setDisabled('disabled');

        return $element->getElementHtml();
    }
}
