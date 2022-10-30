<?php
namespace App\Services;

use App\Repostories\CourseRepository;

class CourseService
{
  protected $repository;

  public function __construct(CourseRepository $couseRepository)
  {
    $this->repository = $couseRepository;
  }

  public function getCourses()
  {
    return $this->repository->getAllCourses();
  }
}