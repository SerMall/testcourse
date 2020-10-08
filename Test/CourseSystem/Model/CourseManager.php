<?php

namespace Test\CourseSystem\Model;

class CourseManager implements Test\CourseSystem\Model\CourseManagerInterface

{
    protected function _construct()
    {
        $this->_init(\Test\CourseSystem\Model\ResourceModel\CourseManager::class);
    }

    /**
     * Get All Customers who bought course with id = $idCourse
     *
     * @param $idCourse
     */
    public function getAllCustomersForCourse($idCourse)
    {

    }

    /**
     * Get all customers who has paymaant deadline today
     */
    public function getCustomersDeadlineNow()
    {

    }

    /**
     * Get all courses it ended yesterday
     */
    public function getEndCource()
    {

    }

}
