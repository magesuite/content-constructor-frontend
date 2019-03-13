<?php

namespace MageSuite\ContentConstructorFrontend\Setup;

class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
{
    public function upgrade(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.2', '<')) {
            $setup->getConnection()->changeColumn(
                $setup->getTable('cms_page'),
                'layout_update_xml',
                'layout_update_xml',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => '10M',
                    'comment' => 'Page Layout Update Content'
                ]
            );
        }

        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            $setup->getConnection()->changeColumn(
                $setup->getTable('cms_page'),
                'layout_update_xml',
                'layout_update_xml',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => '16777216',
                    'comment' => 'Page Layout Update Content'
                ]
            );
        }

        $setup->endSetup();
    }
}