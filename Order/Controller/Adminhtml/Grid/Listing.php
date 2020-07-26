<?php

namespace ALevel\Order\Controller\Adminhtml\Grid;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action;

class Listing extends Action
{
    /** {@inheritDoc} */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

    public function _isAllowed()
    {
        return parent::_isAllowed();
    }

}
