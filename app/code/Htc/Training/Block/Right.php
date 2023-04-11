<?php
namespace Htc\Training\Block;
class Right extends \Magento\Framework\View\Element\Template
{
    protected $_coreRegistry = null;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $_coreRegistry) {
        parent::__construct($context);
        $this->_coreRegistry = $_coreRegistry;
      }
     public function number(){
        $number = $this->_coreRegistry->registry('number');
        return $number;
      }
}