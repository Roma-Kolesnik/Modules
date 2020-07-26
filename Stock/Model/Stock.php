<?php


namespace ALevel\Stock\Model;


use Magento\Framework\Model\AbstractModel;

use ALevel\Stock\Api\StockInterface;
use ALevel\Stock\Model\ResourceModel\Customer as ResourceModelStock;

/**
 * Class Stock
 * @package ALevel\Stock\Model
 */
class Stock extends AbstractModel implements StockInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModelStock::class);
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    public function setIsEnabled(bool $flag): StockInterface
    {
        $this->setData(self::IS_ENABLED, $flag);

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->_getData(self::IS_ENABLED);
    }

    /**
     * @param array $ids
     * @return StockInterface
     */
    public function setProductsIds(array $ids): StockInterface
    {
        $this->setData(self::ITEMS, $ids);

        return $this;
    }

    /**
     * @return array|null
     */
    public function getProductsIds(): ?array
    {
        return $this->getData(self::NAME); // TODO JSON ?
    }

}
