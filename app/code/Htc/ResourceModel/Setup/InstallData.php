<?php
namespace Htc\ResourceModel\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable('post');
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'name' => 'Post1',
                    'content' => 'content1',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Post2',
                    'content' => 'content2',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Post3',
                    'content' => 'content3',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Post4',
                    'content' => 'content4',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Post5',
                    'content' => 'content5',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Post6',
                    'content' => 'content6',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
            ];
            foreach ($data as $item) {
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}