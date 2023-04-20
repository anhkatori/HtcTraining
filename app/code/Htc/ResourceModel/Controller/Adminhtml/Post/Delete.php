<?php
namespace Htc\ResourceModel\Controller\Adminhtml\Index;
use Magento\Backend\App\Action;
class Delete extends Action
{
    /**
     * @var \Htc\ResourceModel\Model\Posts
     */
    protected $modelPost;
    /**
     * @param Context                  $context
     * @param \Htc\ResourceModel\Model\Posts $postFactory
     */
    public function __construct(
        Context $context,
        \Htc\ResourceModel\Model\Posts $postFactory
    ) {
        parent::__construct($context);
        $this->modelPost = $postFactory;
    }
    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Htc_ResourceModel::index_delete');
    }
    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('post_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->modelBlog;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Record deleted successfully.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Record does not exist.'));
        return $resultRedirect->setPath('*/*/');
    }
}