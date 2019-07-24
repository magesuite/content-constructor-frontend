<?php

namespace MageSuite\ContentConstructorFrontend\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{
    /**
     * @var \Magento\Eav\Setup\EavSetupFactory
     */
    protected $eavSetupFactory;

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
    protected $copyCreativeComponentsImages;

    /**
     * @var CopyCreativeComponentsImages
     */
    protected $copyProductFinderImages;

    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory,
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetupInterface,
        CopyCreativeComponentsImages $copyCreativeComponentsImages,
        CopyProductFinderImages $copyProductFinderImages
    )
    {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->moduleDataSetupInterface = $moduleDataSetupInterface;
        $this->eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetupInterface]);
        $this->copyCreativeComponentsImages = $copyCreativeComponentsImages;
        $this->copyProductFinderImages = $copyProductFinderImages;
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

        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $this->copyCreativeComponentsImages->install($setup, $context);
        }

        if (version_compare($context->getVersion(), '1.0.3', '<')) {
            $this->copyProductFinderImages->install($setup, $context);
        }

        $setup->endSetup();
    }
}
