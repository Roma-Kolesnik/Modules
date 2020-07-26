<?php


namespace ALevel\Stock\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ALevel\Stock\Model\Customer as Model;
use ALevel\Stock\Model\ResourceModel\Customer as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }

}
