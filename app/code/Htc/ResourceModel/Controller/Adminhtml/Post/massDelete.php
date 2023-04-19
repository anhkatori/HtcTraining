<?php

namespace Htc\ResourceModel\Controller\Adminhtml\Post;

use Exception;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Htc\ResourceModel\Model\ResourceModel\Posts\Collection as Posts;

/**
 * Class MassDelete
 *
 * @package Htc\ResourceModel\Controller\Adminhtml\Post
 */
class MassDelete extends Action
{

    /**
     * @var Posts
     */
    protected $post;


    /**
     * @param Context $context
     * @param Posts $post
     */
    public function __construct(Context $context, Posts $post)
    {
        parent::__construct($context);
        $this->post = $post;
    }

    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $selectedIds = $this->getRequest()->getParams()['selected'];
        if (!is_array($selectedIds)) {
            $this->messageManager->addErrorMessage(__('Please select one or more post.'));
        } else {
            try {
                $collectionSize = count($selectedIds);
                foreach ($selectedIds as $_id) {
                    $post = $this->post->getItems()[$_id];
                    $post->delete();
                }
                $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been deleted.', $collectionSize));
            } catch (Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}