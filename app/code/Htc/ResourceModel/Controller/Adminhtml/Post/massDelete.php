<?php
namespace Htc\ResourceModel\Controller\Adminhtml\Post;

class MassDelete extends \Magento\Backend\App\Action
{

    protected $_filter;

    protected $_collectionFactory;

    protected $postFactory;

    public function __construct(
        \Magento\Ui\Component\MassAction\Filter $filter,
        \Htc\ResourceModel\Model\ResourceModel\Posts\CollectionFactory $collectionFactory,
        \Htc\ResourceModel\Model\PostsFactory $postFactory,
        \Magento\Backend\App\Action\Context $context
    ) {
        $this->_filter = $filter;
        $this->_collectionFactory = $collectionFactory;
        $this->postFactory = $postFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $logCollection = $this->_filter->getCollection($this->_collectionFactory->create());
            foreach ($logCollection as $item) {
                $post_items = $this->postFactory->create();
                $post_items->load($item->getId());
                $post_items->delete();
            }
            $this->messageManager->addSuccess(__('Deleted ' . count($logCollection) . ' item(s) successfully.'));
        } catch (Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }
}