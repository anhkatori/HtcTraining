<?php
namespace Htc\ResourceModel\Model\ResourceModel\Posts;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Htc\ResourceModel\Model\Posts',
            'Htc\ResourceModel\Model\ResourceModel\Posts'
        );
    }
}