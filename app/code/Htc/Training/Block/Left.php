<?php
namespace Htc\Training\Block;
class Left extends \Magento\Framework\View\Element\Template
{
    protected $_coreRegistry = null;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $_coreRegistry) {
        parent::__construct($context);
        $this->_coreRegistry = $_coreRegistry;
      }
     public function show(){
        $show = $this->_coreRegistry->registry('enable_left');
        return $show;
      }
}