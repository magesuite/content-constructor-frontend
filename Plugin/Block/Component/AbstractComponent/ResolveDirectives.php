<?php

namespace MageSuite\ContentConstructorFrontend\Plugin\Block\Component\AbstractComponent;

class ResolveDirectives
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\DirectiveApplier
     */
    protected $directiveApplier;

    public function __construct(\MageSuite\ContentConstructorFrontend\Service\DirectiveApplier $directiveApplier)
    {
        $this->directiveApplier = $directiveApplier;
    }

    public function afterGetData(\MageSuite\ContentConstructorFrontend\Block\Component\AbstractComponent $subject, $result, $key = '') {
        if(!empty($key) or empty($result)) {
            return $result;
        }

        $this->directiveApplier->clearIdentities();

        $result = $this->applyDirectivesRecursively($result);

        $subject->addIdentities($this->directiveApplier->getIdentities());

        return $result;
    }

    protected function applyDirectivesRecursively(&$array) {
        foreach($array as &$item) {
            if(is_array($item)) {
                $this->applyDirectivesRecursively($item);
            } else {
                $item = $this->directiveApplier->apply($item);
            }
        }

        return $array;
    }
}