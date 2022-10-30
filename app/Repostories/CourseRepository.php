<?php
namespace App\Repostories;

use App\Models\Course;

class CourseRepository
{
  protected $entity;

  public function __construct(Course $course)
  {
    $this->entity = $course;
  }

  public function getAllCourses()
  {
    return $this->entity->get();
  }
}