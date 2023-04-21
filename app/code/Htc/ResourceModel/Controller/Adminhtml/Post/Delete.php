<?php
namespace Htc\ResourceModel\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;

class Delete extends Action
{
    /**
     * @var \Htc\ResourceModel\Model\Posts
     */
    protected $modelPost;
    /**
     * @param \Htc\ResourceModel\Model\Posts $postFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Htc\ResourceModel\Model\Posts $postFactory
    ) {
        parent::__construct($context);
        $this->modelPost = $postFactory;
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Htc_ResourceModel::post_delete');
    }
    public function execute()
    {
        $id = $this->getRequest()->getParam('post_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->modelPost;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Record deleted successfully.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->messageManager->addError(__('Record does not exist.'));
        return $resultRedirect->setPath('*/*/');
    }
}