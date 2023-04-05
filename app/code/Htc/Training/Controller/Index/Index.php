<?php
namespace Htc\Training\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
    protected $moduleManager;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\Module\Manager $moduleManager,
        )
	{
        $this->moduleManager = $moduleManager;
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
        if ($this->moduleManager->isOutputEnabled('Htc_Training')) {
            return $this->_pageFactory->create();
        } else {
            $this->_redirect('home');
        }
	}
}