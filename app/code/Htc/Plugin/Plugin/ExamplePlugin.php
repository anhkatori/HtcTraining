<?php

namespace Htc\Plugin\Plugin;

class ExamplePlugin
{
    protected $dataHelper;
    public function __construct(\Htc\Event\Helper\Data $dataHelper)
    {
        $this->dataHelper = $dataHelper;
        $this->text = $this->dataHelper->getConfig('plugin/general_plugin/text');
    }
	public function aroundAddSuccessMessage($subject, callable $proceed, $message, $group = null)
	{
		$newMess =  $this->text.'  '. $message;
		return $proceed($newMess, $group);
	}

    public function aroundAddNoticeMessage($subject, callable $proceed, $message, $group = null)
	{
		$newMess =  $this->text.'  '. $message;
		return $proceed($newMess, $group);
	}

    public function aroundAddWarningMessage($subject, callable $proceed, $message, $group = null)
	{
		$newMess =  $this->text.'  '. $message;
		return $proceed($newMess, $group);
	}

    public function aroundAddErrorMessage($subject, callable $proceed, $message, $group = null)
	{
		$newMess =  $this->text.'  '. $message;
		return $proceed($newMess, $group);
	}
    public function aroundAddMessage($subject, callable $proceed, $message , $group = null)
	{
        $message->setText('ddd');
		return $proceed($message, $group);
	}
}