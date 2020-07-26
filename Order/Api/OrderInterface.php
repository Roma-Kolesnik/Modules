<?php

namespace ALevel\Order\Api;

interface OrderInterface
{

    const CUSTOMER_ID = 'customer_id';

    const CUSTOMER_NAME = 'customer_name';

    const CUSTOMER_EMAIL = 'customer_email';

    const SKU = 'sku';

    const QTY = 'qty';

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getCustomerId();

    /**
     * @param $customerId
     * @return mixed
     */
    public function setCustomerId($customerId);

    /**
     * @return mixed
     */
    public function getCustomerName();

    /**
     * @param $name
     * @return mixed
     */
    public function setCustomerName($name);

    /**
     * @return mixed
     */
    public function getCustomerEmail();

    /**
     * @param $email
     * @return mixed
     */
    public function setCustomerEmail($email);

    /**
     * @return mixed
     */
    public function getSku();

    /**
     * @param $sku
     * @return mixed
     */
    public function setSku($sku);

    /**
     * @return mixed
     */
    public function getQty();

    /**
     * @param $quantity
     * @return mixed
     */
    public function setQty($quantity);
}
