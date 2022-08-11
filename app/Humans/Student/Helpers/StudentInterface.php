<?php

namespace Humans\Student\Helpers;

interface StudentInterface {
    public function readCourse():void;
    public function attendLectures():int;
    public function hasRegistered():array;
}