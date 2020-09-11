<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Plugin\Theme\Controller\Result;

class RemoveDuplicatedCss
{
    public function beforeSendResponse(\Magento\Framework\App\Response\Http $subject)
    {
        $content = $subject->getContent() ?: '';
        $content = $this->execute($content);

        $subject->setContent($content);
    }

    /**
     * Remove all but first occurrences of each stylesheet declarations.
     */
    public function execute($html) {
        $stylesOpeningMarkup = '<link rel="stylesheet"';
        $stylesClosing = '"/>';
        $stylesOpeningPosition = strpos($html, $stylesOpeningMarkup);

        while ($stylesOpeningPosition !== false) {
            $stylesClosingPosition = strpos($html, $stylesClosing, $stylesOpeningPosition);
            $styles = substr($html, $stylesOpeningPosition, $stylesClosingPosition - $stylesOpeningPosition + strlen($stylesClosing))
                . '<script>/* defer-ignore */</script>';

            $html = substr($html, 0, $stylesClosingPosition + 1) .
                str_replace($styles, '', substr($html, $stylesClosingPosition + 1));

            $stylesOpeningPosition = strpos($html, $stylesOpeningMarkup, $stylesClosingPosition);
        }

        return $html;
    }
}
