<?php

namespace Humans\Student\PartTime;

use Human\Helper\GoodHumanBehaviour as HelperGoodHumanBehaviour;
use Humans\Student\Helpers\StudentInterface;


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