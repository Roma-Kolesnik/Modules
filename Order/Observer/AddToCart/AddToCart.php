<?php


namespace ALevel\Order\Observer\AddToCart;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class AddToCart implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $event = $observer->getEvent();
    }
}
