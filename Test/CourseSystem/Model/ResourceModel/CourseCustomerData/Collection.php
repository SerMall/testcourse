<?php

namespace Test\CourseSystem\Model\ResourceModel\CourseCustomerData;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Test\CourseSystem\Model\CourseCustomerData::class,
            \Test\CourseSystem\Model\ResourceModel\CourseCustomerData::class
        );
    }
}
