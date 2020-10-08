<?php

namespace Test\CourseSystem\Cron;

use Test\CourseSystem\Model\CourseManagerFactory;

class CancelCourse
{
    /**
     * @var CourseManagerFactory
     */
    protected $courseManagerFactory;

    /**
     * CancelCourse constructor.
     *
     * @param CourseManagerFactory $courseManagerFactory
     */
    public function __construct(
        CourseManagerFactory $courseManagerFactory
    ) {
        $this->courseManagerFactory = $courseManagerFactory;
    }

    /**
     * Disable courses with ended time
     *
     */
    public function execute() {

    }
}
