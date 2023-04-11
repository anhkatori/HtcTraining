<?php
namespace Htc\Training\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Htc\Training\Helper\Data $helperData,
		\Magento\Framework\Registry $_coreRegistry
        )
	{
		$this->_pageFactory = $pageFactory;
		$this->helperData = $helperData;
		$this->_coreRegistry = $_coreRegistry;
		return parent::__construct($context);
	}

	public function execute()
	{
        if ($this->helperData->getGeneralConfig('enable')=="1") {
			$enable_left=$this->helperData->getGeneralConfig('enable_left');
			$number=$this->helperData->getGeneralConfig('number');
			$text=$this->helperData->getGeneralConfig('display_text');

			$this->_coreRegistry->register('enable_left', $enable_left);
			$this->_coreRegistry->register('number', $number);
			$this->_coreRegistry->register('text', $text);

            return $this->_pageFactory->create();
        } else {
            $this->_redirect('home');
        }
	}
}