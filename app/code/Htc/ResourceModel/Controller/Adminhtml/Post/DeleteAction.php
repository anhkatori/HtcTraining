<?php
namespace Htc\ResourceModel\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class Delete extends Action
{
    public $postFactory;

    public function __construct(
        Context $context,
        \Htc\ResourceModel\Model\PostsFactory $postFactory
    ) {
        $this->postFactory = $postFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // $resultRedirect = $this->resultRedirectFactory->create();
        // $id = $this->getRequest()->getParam('post_id');
        // try {
        //     $postModel = $this->postFactory->create();
        //     $postModel->load($id);
        //     $postModel->delete();
        //     $this->messageManager->addSuccessMessage(__('You deleted the post.'));
        // } catch (\Exception $e) {
        //     $this->messageManager->addErrorMessage($e->getMessage());
        // }
        // return $resultRedirect->setPath('*/*/');
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Htc_ResourceModel::delete');
    }
}