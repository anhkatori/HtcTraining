<?php

namespace Htc\Bt4\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $displayText = $observer->getData('htc_text');
        echo $displayText->getText() . " - Event </br>";
        $displayText->setText('Execute event successfully.');
        return $this;
    }
}