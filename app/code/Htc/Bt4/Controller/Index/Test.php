<?php

namespace Htc\Bt4\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'HTC Soft'));
		$this->_eventManager->dispatch('htc_bt4_display_text', ['htc_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}

