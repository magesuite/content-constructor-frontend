<?php

namespace MageSuite\ContentConstructorFrontend\Model\Directive;

class Parser implements ParserInterface
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Model\Directive\Pool
     */
    protected $directivePool;

    public function __construct(\MageSuite\ContentConstructorFrontend\Model\Directive\Pool $directivePool)
    {
        $this->directivePool = $directivePool;
    }

    /**
     * @param $text
     * @return Directive[]
     */
    public function getDirectives($text)
    {
        $definedDirectivesIdentifiers = $this->directivePool->getDefinedDirectivesIdentifiers();

        preg_match_all('/\{\{([a-zA-Z]+) (.+?)\}\}/si', $text, $directives, PREG_SET_ORDER);

        if (empty($directives)) {
            return [];
        }

        $parsedDirectives = [];

        foreach ($directives as $directive) {
            $originalValue = $directive[0];
            $identifier = $directive[1];
            $arguments = $this->parseArguments($directive[2]);

            if (!in_array($identifier, $definedDirectivesIdentifiers)) {
                continue;
            }

            /** @var Directive $directive */
            $directive = $this->directivePool->create($identifier);

            $directive->setOriginalValue($originalValue);
            $directive->setIdentifier($identifier);
            $directive->setArguments($arguments);

            $parsedDirectives[] = $directive;
        }

        return $parsedDirectives;
    }

    private function parseArguments($argumentsString)
    {
        $xml = new \SimpleXMLElement("<element $argumentsString/>");

        $arguments = [];

        foreach ($xml->attributes() as $name => $value) {
            $arguments[$name] = (string)$value[0];
        }

        return $arguments;
    }
}
