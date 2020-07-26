<?php


namespace ALevel\Stock\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Stock extends AbstractDb
{
    public function _construct()
    {
        $this->_init("alevel_stock_products", "id");
    }

}
