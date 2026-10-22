<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Setup\Patch\Data;

class SetNewsDatesSearchable implements \Magento\Framework\Setup\Patch\DataPatchInterface, \Magento\Framework\Setup\Patch\PatchVersionInterface
{
    protected const ATTRIBUTE_CODES = [
        'news_from_date',
        'news_to_date',
    ];

    public function __construct(
        protected \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        protected \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
    ) {
    }

    public function apply(): self
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);

        foreach (self::ATTRIBUTE_CODES as $attributeCode) {
            $eavSetup->updateAttribute(\Magento\Catalog\Model\Product::ENTITY, $attributeCode, 'is_searchable', true);
        }

        return $this;
    }

    public static function getVersion(): string
    {
        return '0.0.3';
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
