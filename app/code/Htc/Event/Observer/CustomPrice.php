<?php

namespace Htc\Event\Observer;

use Magento\Framework\Event\ObserverInterface;

class CustomPrice implements ObserverInterface
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
        $products = $observer->getCollection();
        $helper = $this->dataHelper;
        $price = $helper->getConfig('event/general_event/price');
        foreach ($products as $product) {
            $product->setPrice($price);
        }
    }
}