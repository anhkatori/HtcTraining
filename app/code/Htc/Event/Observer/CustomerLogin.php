<?php

namespace Htc\Event\Observer;

use Magento\Framework\Event\ObserverInterface;

class CustomerLogin implements ObserverInterface
{ /**
     * @var \Magento\Framework\App\Http\Context
  */
    protected $_messageManager;
    protected $_context;

    /**
     * Add constructor.
     * @param \Magento\Framework\App\Http\Context $context
     */
    public function __construct(\Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\App\Http\Context $context)
    {
        $this->_messageManager = $messageManager;
        $this->_context = $context;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (!$this->_context->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH)){
            echo"aaa";
            $this->_messageManager->addSuccess("Logged in");
        }
    }
}