<?php

namespace MageSuite\ContentConstructorFrontend\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{
    /**
     * @var \Magento\Eav\Setup\EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * @var \Magento\Framework\Setup\ModuleDataSetupInterface
     */
    protected $moduleDataSetupInterface;

    /**
     * @var \Magento\Eav\Setup\EavSetup
     */
    protected $eavSetup;

    /**
     * @var CopyCreativeComponentsImages
     */
    private $copyCreativeComponentsImages;

    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory,
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetupInterface,
        CopyCreativeComponentsImages $copyCreativeComponentsImages
    )
    {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->moduleDataSetupInterface = $moduleDataSetupInterface;
        $this->eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetupInterface]);
        $this->copyCreativeComponentsImages = $copyCreativeComponentsImages;
    }

    public function upgrade(
        \Magento\Framework\Setup\ModuleDataSetupInterface $setup,
        \Magento\Framework\Setup\ModuleContextInterface $context
    )
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.3', '<')) {
            $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

            $eavSetup->updateAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'news_from_date',
                'is_searchable',
                true
            );

            $eavSetup->updateAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'news_to_date',
                'is_searchable',
                true
            );
        }

        if (version_compare($context->getVersion(), '0.0.6', '<')) {
            $this->copyCreativeComponentsImages->install($setup, $context);
        }

        $setup->endSetup();
    }
}
