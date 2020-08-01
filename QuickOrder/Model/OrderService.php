<?php

namespace ALevel\QuickOrder\Model;

use ALevel\QuickOrder\Api\Data\OrderInterfaceFactory;

class OrderService
{
    /**
     * @var OrderInterfaceFactory
     */
    private $orderInterfaceFactory;

    /**
     * OrderService constructor.
     * @param OrderInterfaceFactory $orderInterfaceFactory
     */
    public function __construct(
        OrderInterfaceFactory $orderInterfaceFactory
    )
    {
        $this->orderInterfaceFactory = $orderInterfaceFactory;
    }

    public function prepareObjectOrder($request)
    {
        $order = $this->orderInterfaceFactory->create();

        $order->setName($request->getParam('name'));
        $order->setPhone($request->getParam('phone'));
        $order->setEmail($request->getParam('email'));
        $order->setSKU($request->getParam('sku'));
        $order->setStatus('Pending');

        return $order;
    }

}
