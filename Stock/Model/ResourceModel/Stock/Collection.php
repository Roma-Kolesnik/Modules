<?php


namespace ALevel\Stock\Model\ResourceModel\Stock;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use ALevel\Stock\Model\Stock as Model;
use ALevel\Stock\Model\ResourceModel\Stock as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }

}
