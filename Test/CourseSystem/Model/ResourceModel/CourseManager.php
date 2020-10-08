<?php

namespace Test\CourseSystem\Model\ResourceModel;

class CourseManager extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('test_course', 'id');
    }
}
