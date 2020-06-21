<?php
namespace Learning\Crud\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello Words from Admin!');
        return $result;
    }
}
