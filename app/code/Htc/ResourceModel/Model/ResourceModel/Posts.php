<?php
namespace Htc\ResourceModel\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class Posts extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('post', 'post_id');
    }
}