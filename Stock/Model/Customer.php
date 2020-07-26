<?php


namespace ALevel\Stock\Model;


use ALevel\Stock\Api\CustomerInterface;
use Magento\Framework\Model\AbstractModel;
use ALevel\Stock\Model\ResourceModel\Customer as ResourceModel;

class Customer extends AbstractModel implements CustomerInterface
{

    public function _construct()
    {
        $this->_init(ResourceModel::class);
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
    public function getEmail()
    {
        return $this->_getData(self::CUSTOMER_EMAIL);
    }

    /**
     * @param $email
     * @return mixed|void
     */
    public function setEmail($email)
    {
        $this->setData(self::CUSTOMER_EMAIL, $email);
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
}
