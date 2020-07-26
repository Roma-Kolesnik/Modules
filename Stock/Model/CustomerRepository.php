<?php


namespace ALevel\Stock\Model;

use ALevel\Stock\Api\CustomerInterface;
use ALevel\Stock\Api\CustomerRepositoryInterface;


/**
 * Class CustomerRepository
 * @package ALevel\Stock\Model
 */
class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @param \ALevel\Stock\Api\CustomerInterface $customer
     * @return \ALevel\Stock\Api\CustomerInterface
     */
    public function save(\ALevel\Stock\Api\CustomerInterface $customer)
    {
        $customer->getResource()->save($customer);

        return $customer;
    }
}
