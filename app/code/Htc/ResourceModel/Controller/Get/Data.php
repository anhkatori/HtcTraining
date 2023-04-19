<?php
namespace Htc\ResourceModel\Controller\Get;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Htc\ResourceModel\Model\ResourceModel\Posts\CollectionFactory;

class Data extends Action
{
    protected $PageFactory;
    protected $PostsFactory;

    public function __construct(Context $context, PageFactory $pageFactory, CollectionFactory $postsFactory)
    {
        parent::__construct($context);
        $this->PageFactory = $pageFactory;
        $this->PostsFactory = $postsFactory;
    }

    public function execute()
    {
        echo "Lấy dữ liệu từ bảng post";
        $this->PostsFactory->create();
        $collection = $this->PostsFactory->create()
            ->addFieldToSelect(array('post_id', 'name', 'content', 'created_at'));
        echo '<pre>';
        print_r($collection->getData());
        echo '<pre>';
    }
}