<?php


namespace ALevel\QuickOrder\Model;

use ALevel\QuickOrder\Api\Data\StatusInterface;
use Magento\Framework\Model\AbstractModel;
use ALevel\QuickOrder\Model\ResourceModel\Status as ResourceModel;

class Status extends AbstractModel implements StatusInterface
{
    public function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    public function getStatusId()
    {
        return $this->_getData(self::STATUS_ID);
    }

    public function setStatusId($status_id)
    {
        $this->setData(self::STATUS_ID, $status_id);
    }

    public function getLabel()
    {
        return $this->_getData(self::LABEL);
    }

    public function setLabel($label)
    {
        $this->setData(self::LABEL, $label);
    }
}
