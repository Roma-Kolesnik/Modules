<?php

namespace ALevel\Order\Api;

interface OrderRepositoryInterface
{
    /**
     * @param \ALevel\Event\Api\OrderInterface $order
     * @return \ALevel\Event\Api\OrderInterface
     */
    public function save(\ALevel\Order\Api\OrderInterface $order);
}
