<?php
namespace Htc\Bt4\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Htc\Training\Helper\Data $helperData,
        )
	{
		$this->_pageFactory = $pageFactory;
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{
        if ($this->helperData->getGeneralConfig('enable')=="1") {
            return $this->_pageFactory->create();
        } else {
            $this->_redirect('home');
        }
	}
}