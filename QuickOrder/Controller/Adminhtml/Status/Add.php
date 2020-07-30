<?php

namespace ALevel\QuickOrder\Controller\Adminhtml\Status;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Add extends Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Layout
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}
