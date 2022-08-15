<?php

namespace Humans\Student\PartTime;

use Humans\Helpers\GoodHumanBehaviour as HelperGoodHumanBehaviour;
use Humans\Student\Helpers\StudentInterface;


class Student implements StudentInterface
{

    use HelperGoodHumanBehaviour;
    protected $indexnumber;
    protected $name;
    protected $registeredcourses = [];

    public function __construct($indexnumber, $name)
    {
        $this->indexnumber =  $indexnumber;
        $this->name = $name;
    }
    public function readCourse ():void {

    }

    public function hasRegistered(): bool 
    {
        return count($this->registeredcourses) > 0;
    }

    public function  attendLectures ():array
    {
        return [];
    }

    public function registerCourse(String $code, String $coursetitle): void
    {
        $this->registeredcourses[$code] = $coursetitle;
    }

    public function getRegisteredcourses()
    {
        return $this->registeredcourses;
    }
    
}