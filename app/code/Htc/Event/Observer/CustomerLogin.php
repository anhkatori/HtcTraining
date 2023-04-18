<?php

namespace Htc\Event\Observer;

use Magento\Framework\Event\ObserverInterface;

class CustomerLogin implements ObserverInterface
{
    protected $_messageManager;
    protected $dataHelper;
    public function __construct(\Magento\Framework\Message\ManagerInterface $messageManager, \Htc\Event\Helper\Data $dataHelper)
    {
        $this->_messageManager = $messageManager;
        $this->dataHelper = $dataHelper;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $helper = $this->dataHelper;
        $text = $helper->getConfig('event/general_event/display_text');
        if ($observer->getData('customer')) {
            $this->_messageManager->addSuccess($text);
        }
        
    }
}