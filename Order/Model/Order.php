<?php

namespace ALevel\Order\Model;

use ALevel\Order\Api\OrderInterface;
use ALevel\Order\Model\ResourceModel\Order as ResourceModel;
use Magento\Framework\Model\AbstractModel;

class Order extends AbstractModel implements OrderInterface
{

    public function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return mixed|null
     */
    public function getCustomerId()
    {
        return $this->_getData(self::CUSTOMER_ID);
    }

    /**
     * @param $customerId
     * @return mixed|void
     */
    public function setCustomerId($customerId)
    {
        $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * @return mixed|null
     */
    public function getCustomerName()
    {
        return $this->_getData(self::CUSTOMER_NAME);
    }

    /**
     * @param $name
     * @return mixed|void
     */
    public function setCustomerName($name)
    {
        $this->setData(self::CUSTOMER_NAME, $name);
    }

    /**
     * @return mixed|null
     */
    public function getCustomerEmail()
    {
        return $this->_getData(self::CUSTOMER_EMAIL);
    }

    /**
     * @param $email
     * @return mixed|void
     */
    public function setCustomerEmail($email)
    {
        $this->setData(self::CUSTOMER_EMAIL, $email);
    }

    /**
     * @return mixed|null
     */
    public function getSku()
    {
        return $this->_getData(self::SKU);
    }

    /**
     * @param $sku
     * @return mixed|void
     */
    public function setSku($sku)
    {
        $this->setData(self::SKU, $sku);
    }

    /**
     * @return mixed|null
     */
    public function getQty()
    {
        return $this->_getData(self::QTY);
    }

    /**
     * @param $quantity
     * @return mixed|void
     */
    public function setQty($quantity)
    {
        $this->setData(self::QTY, $quantity);
    }
}
