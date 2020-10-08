<?php

namespace Test\CourseSystem\Model\ResourceModel\CourseManager;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Test\CourseSystem\Model\CourseManager::class,
            \Test\CourseSystem\Model\ResourceModel\CourseManager::class
        );
    }
}
