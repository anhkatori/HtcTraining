<?php
namespace Htc\ResourceModel\Controller\Adminhtml\Post;
use Magento\Framework\Controller\ResultFactory;
class Edit extends \Magento\Backend\App\Action {
    
    protected $resultPageFactory = false;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    
    public function execute() {
       $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
       $resultPage->getConfig()->getTitle()->prepend(__('Edit Post'));
       return $resultPage;
    }
}