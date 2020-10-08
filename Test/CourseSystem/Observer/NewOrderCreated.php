<?php

namespace Test\CourseSystem\Observer;

use Magento\Framework\Event\ObserverInterface;

class NewOrderCreated implements ObserverInterface
{
    public function __construct()
    {
        // Observer initialization code...
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();

        // Add data to DB
        // Check status for course
    }
}