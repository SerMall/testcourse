<?php

// Model for get, set attribute value


namespace Test\CourseSystem\Model;

use Magento\Catalog\Api\ProductRepositoryInterface;

class CourseCustomerData implements Test\CourseSystem\Model\CourseCustomerDataInterface
{

    protected $productRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository
    ) {
        $this->productRepository = $productRepository;
    }


    public function getCourseAttribute($id_course, $attrCode)
    {
        $course = $this->productRepository->getById($id_course);

       return $course->getCustomAttribute($attrCode);
    }

    public function setCourseAttribute($id_course, $attrCode, $value)
    {
        $course = $this->productRepository->getById($id_course);
        $course->setCustomAttribute($attrCode, $value);
    }
}