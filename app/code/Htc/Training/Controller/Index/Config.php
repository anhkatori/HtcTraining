<?php

namespace Htc\Training\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Htc\Training\Helper\Data $helperData

	) {
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.

		echo $this->helperData->getGeneralConfig('enable');
		echo $this->helperData->getGeneralConfig('enable_left');
		echo $this->helperData->getGeneralConfig('display_text');
		echo $this->helperData->getGeneralConfig('number');
		exit();

	}
}