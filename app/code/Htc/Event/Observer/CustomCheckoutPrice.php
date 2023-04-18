<?php

namespace Htc\Event\Observer;

use Magento\Framework\Event\ObserverInterface;

class CustomCheckoutPrice implements ObserverInterface
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
        $price = $helper->getConfig('event/general_event/price');
        $item = $observer->getEvent()->getData('quote_item');
        $item->setCustomPrice($price);
        $item->setOriginalCustomPrice($price);
        $item->getProduct()->setIsSuperMode(true);
    }
}