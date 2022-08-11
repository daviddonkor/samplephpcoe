<?php

namespace Humans\Student\PartTime;
use Humans\Student\Helpers\StudentInterface;
use Human\Helper\GoodHumanBehaviour as HelperGoodHumanBehaviour;

class Student extends StudentInterface{

    use HelperGoodHumanBehaviour;
    
    public function readCourse ():void {

    }

    public function hasRegistered ():Int 
    {

        return 2;
    }

    public function  attendLectures ():array
    {
        return [];
    }
}