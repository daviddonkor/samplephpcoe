<?php

namespace App\Humans\Student\PartTime;

use App\Humans\Student\Helpers\StudentInterface;
use App\Humans\Helpers\GoodHumanBehaviour as HelperGoodHumanBehaviour;

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