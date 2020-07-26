<?php


namespace ALevel\Order\Model;

use ALevel\Order\Api\OrderInterface;
use ALevel\Order\Api\OrderRepositoryInterface;

/**
 * Class OrderRepository
 * @package ALevel\Index\Model
 */
class OrderRepository implements OrderRepositoryInterface
{
    /**
     * @param \ALevel\Order\Api\OrderInterface $order
     * @return \ALevel\Order\Api\OrderInterface
     */
    public function save(\ALevel\Order\Api\OrderInterface $order)
    {
        $order->getResource()->save($order);

        return $order;
    }
}
