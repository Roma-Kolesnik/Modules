<?php


namespace ALevel\Stock\Api;

/**
 * Interface StockInterface
 * @package ALevel\Stock\Api
 */
interface StockInterface
{
    const NAME = 'name';

    const IS_ENABLED = 'is_enabled';

    const ITEMS = 'items';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param $id
     * @return int
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * Is enabled flag setter.
     *
     * @param bool $flag
     *
     * @return self
     */
    public function setIsEnabled(bool $flag): self;

    /**
     * Is enabled flag getter.
     *
     * @return bool|null
     */
    public function isEnabled(): bool;

    /**
     * Set items setter.
     *
     * @param array $ids
     *
     * @return self
     */
    public function setProductsIds(array $ids): self;

    /**
     * Get items getter.
     *
     * @return array|null
     */
    public function getProductsIds(): ?array;
}
