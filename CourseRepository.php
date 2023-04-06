<?php
include_once 'autoload.php';
class CourseRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('course');
    }

}