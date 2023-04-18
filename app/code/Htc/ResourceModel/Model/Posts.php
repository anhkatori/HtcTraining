<?php
namespace Htc\ResourceModel\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Posts extends AbstractModel{
    protected function _construct()
    {
        $this->_init('Htc\ResourceModel\Model\ResourceModel\Posts');
    }
}