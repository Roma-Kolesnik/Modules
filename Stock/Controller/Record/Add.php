<?php

namespace ALevel\Stock\Controller\Record;

use ALevel\Stock\Model\CustomerRepository;
use ALevel\Stock\Model\CustomerService;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Add extends Action
{
    /**
     * @var CustomerRepository
     */
    private $customerRepository;
    /**
     * @var CustomerService
     */
    private $customerService;
    /**
     * @var Context
     */
    private $context;

    /**
     * Add constructor.
     * @param Context $context
     * @param CustomerRepository $customerRepository
     * @param CustomerService $customerService
     */
    public function __construct(
        Context $context,
        CustomerRepository $customerRepository,
        CustomerService $customerService
    ){
        parent::__construct($context);
        $this->customerRepository = $customerRepository;
        $this->customerService = $customerService;
        $this->context = $context;
    }

    public function execute()
    {
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        if($this->getRequest()->isAjax()) {
            $newObject = $this->customerService->prepareObjectCustomer();
            $this->customerRepository->save($newObject);
        }

        return $resultJson->setData(
            [
                'errors' => false,
                'message' => __('You took part in the action!')
            ]
        );
    }
}
