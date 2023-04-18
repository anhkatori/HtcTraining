<?php

namespace Htc\Event\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

	const XML_PATH_EVENT = 'event/';

	public function getConfig($config_path)
	{
		return $this->scopeConfig->getValue(
			$config_path,
				\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	public function getGeneralConfig($code, $storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_EVENT . 'general/' . $code, $storeId);
	}

}