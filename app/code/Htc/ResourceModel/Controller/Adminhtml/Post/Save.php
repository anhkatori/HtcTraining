<?php
namespace Htc\ResourceModel\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\Model\Session;
use Htc\ResourceModel\Model\Posts;

class Save extends \Magento\Backend\App\Action
{
    /*
     * @var Posts
     */
    protected $model;
    /**
     * @var Session
     */
    protected $adminsession;
    /**
     * @param Action\Context $context
     * @param Posts           $model
     * @param Session        $adminsession
     */
    public function __construct(
        Action\Context $context,
        Posts $model,
        Session $adminsession
    ) {
        parent::__construct($context);
        $this->model = $model;
        $this->adminsession = $adminsession;
    }
    /**
     * Save Posts record action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            $post_id = $this->getRequest()->getParam('post_id');
            if ($post_id) {
                $this->model->load($post_id);
            }
            $this->model->setData($data);
            try {
                $this->model->save();
                $this->messageManager->addSuccess(__('The data has been saved.'));
                $this->adminsession->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    if ($this->getRequest()->getParam('back') == 'add') {
                        return $resultRedirect->setPath('*/*/add');
                    } else {
                        return $resultRedirect->setPath('*/*/edit', ['post_id' => $this->model->getPostsId(), '_current' => true]);
                    }
                }
                return $resultRedirect->setPath('*/*/');
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
            }
            $this->_getSession()->setFormData($data);
            return $resultRedirect->setPath('*/*/edit', ['post_id' => $this->getRequest()->getParam('post_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}