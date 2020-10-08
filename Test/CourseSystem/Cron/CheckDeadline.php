<?php

namespace Test\CourseSystem\Cron;

use Test\CourseSystem\Model\CourseManagerFactory;

class CheckDeadline
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
     * Check who has deadline today and send email
     *
     */
    public function execute() {

    }
}
