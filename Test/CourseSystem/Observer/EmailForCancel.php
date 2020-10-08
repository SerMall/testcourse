<?php

namespace Test\CourseSystem\Observer;

use Magento\Framework\Event\ObserverInterface;

class EmailForCancel implements ObserverInterface
{
    public function __construct()
    {
        // Observer initialization code...
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        // check what value for cancel_class: if cancel_class == 1
        // send email about canceled course
    }
}
