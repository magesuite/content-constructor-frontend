<?php

namespace MageSuite\ContentConstructorFrontend\Test\Unit\Service;

class DirectiveApplierTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\MageSuite\ContentConstructorFrontend\Model\Directive\Parser
     */
    protected $directiveParserStub;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\DirectiveApplier
     */
    protected $directiveApplier;

    /**
     * @var \Magento\TestFramework\ObjectManager
     */
    private $objectManager;

    public function setUp()
    {
        $this->objectManager = \Magento\TestFramework\ObjectManager::getInstance();

        $this->directiveParserStub = $this
            ->getMockBuilder(\MageSuite\ContentConstructorFrontend\Model\Directive\Parser::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->directiveApplier = $this->objectManager->create(
            \MageSuite\ContentConstructorFrontend\Service\DirectiveApplier::class,
            ['directiveParser' => $this->directiveParserStub]
        );
    }

    public function testItReplacesDirectivesWithTheirValues()
    {
        $text = '{{sample argument1="value1"}}' . PHP_EOL . ' some text ' . PHP_EOL . '{{sample argument2="value2"}}';

        $this->directiveParserStub->method('getDirectives')->willReturn([
            $this->createDirectiveStub('{{sample argument1="value1"}}', 'first_directive_value'),
            $this->createDirectiveStub('{{sample argument2="value2"}}', 'second_directive_value'),
        ]);

        $textAfterDirectivesWereApplied = $this->directiveApplier->apply($text);

        $this->assertEquals('first_directive_value' . PHP_EOL . ' some text ' . PHP_EOL . 'second_directive_value', $textAfterDirectivesWereApplied);
    }

    public function testItReplacesDirectivesWithEmptyTextWhenExceptionIsThrown()
    {
        $text = '{{sample argument1="value1"}}' . PHP_EOL . 'some text';

        $this->directiveParserStub->method('getDirectives')->willReturn([
            $this->createDirectiveStub('{{sample argument1="value1"}}', 'second_directive_value', true),
        ]);

        $textAfterDirectivesWereApplied = $this->directiveApplier->apply($text);

        $this->assertEquals('' . PHP_EOL . 'some text', $textAfterDirectivesWereApplied);
    }

    protected function createDirectiveStub(string $originalValue, string $value, $exceptionThrown = false)
    {
        $directiveStub = $this->getMockBuilder(\MageSuite\ContentConstructorFrontend\Model\Directive\DirectiveInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        if ($exceptionThrown) {
            $directiveStub->method('getValue')->willThrowException(new \Exception('Generic exception'));
        } else {
            $directiveStub->method('getValue')->willReturn($value);
        }

        $directiveStub->method('getOriginalValue')->willReturn($originalValue);
        $directiveStub->method('getIdentities')->willReturn([]);

        return $directiveStub;
    }
}
