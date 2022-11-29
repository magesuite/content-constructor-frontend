<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Plugin\Cms\Model\Page;

class ChangeContentReturnType
{
    public function afterGetContent(
        \Magento\Cms\Model\Page $subject,
        $result
    ): string {
        return (string)$result;
    }
}
