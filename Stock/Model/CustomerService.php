<?php

namespace ALevel\Stock\Model;

use ALevel\Stock\Api\CustomerInterfaceFactory;
use Magento\Customer\Model\Session;

class CustomerService
{
    /**
     * @var CustomerInterfaceFactory
     */
    private $customerInterfaceFactory;
    /**
     * @var Session
     */
    private $session;

    /**
     * CustomerSerive constructor.
     * @param CustomerInterfaceFactory $customerInterfaceFactory
     * @param Session $session
     */
    public function __construct(
       CustomerInterfaceFactory $customerInterfaceFactory,
       Session $session
    ) {
        $this->customerInterfaceFactory = $customerInterfaceFactory;
        $this->session = $session;
    }

    public function prepareObjectCustomer()
    {
        $customer = $this->customerInterfaceFactory->create();

        $customerData = $this->session->getCustomerData();

        $customer->setCustomerName($customerData->getFirstname());
        $customer->setEmail($customerData->getEmail());

        return $customer;
    }
}
