<?php


namespace ALevel\QuickOrder\Controller\Adminhtml\Status;

use ALevel\QuickOrder\Api\Repository\StatusRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

class Delete extends Action
{
    /** @var StatusRepositoryInterface */
    private $repository;

    /** @var LoggerInterface */
    private $logger;

    /**
     * Delete constructor.
     *
     * @param Context                   $context
     * @param StatusRepositoryInterface   $repository
     * @param LoggerInterface           $logger
     */
    public function __construct(
        Context $context,
        StatusRepositoryInterface $repository,
        LoggerInterface $logger
    ) {
        parent::__construct($context);
        $this->repository   = $repository;
        $this->logger       = $logger;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->_redirect('*/*/listing');
        }

        $id = $this->getRequest()->getParam('status_id');

        if (empty($id)) {
            $this->messageManager->addWarningMessage(__("Please select status id"));
            return $this->_redirect('*/*/listing');
        }

        try {
            $this->repository->deleteById($id);
        } catch (NoSuchEntityException|CouldNotDeleteException $e) {
            $this->logger->info(sprintf("item %d already delete", $id));
        }

        $this->messageManager->addSuccessMessage(sprintf("item %d was deleted", $id));
        $this->_redirect('*/*/listing');
    }
}
