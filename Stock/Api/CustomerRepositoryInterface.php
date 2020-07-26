<?php


namespace ALevel\Stock\Api;


interface CustomerRepositoryInterface
{
    /**
     * @param \ALevel\Stock\Api\CustomerInterface $customer
     * @return \ALevel\Stock\Api\CustomerInterface
     */
    public function save(\ALevel\Stock\Api\CustomerInterface $customer);

}
