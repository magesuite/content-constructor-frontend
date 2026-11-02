<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Setup\Patch\Data;

class CopyCreativeComponentsImages implements \Magento\Framework\Setup\Patch\DataPatchInterface, \Magento\Framework\Setup\Patch\PatchVersionInterface
{
    protected const PRODUCT_FINDER_SUBDIRECTORY = 'product_finder';

    public function __construct(protected \MageSuite\ContentConstructorFrontend\Service\CreativeComponentsImagesCopier $creativeComponentsImagesCopier)
    {
    }

    public function apply(): self
    {
        $this->creativeComponentsImagesCopier->copy();
        $this->creativeComponentsImagesCopier->copy(self::PRODUCT_FINDER_SUBDIRECTORY);

        return $this;
    }

    public static function getVersion(): string
    {
        return '1.0.4';
    }

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }
}
