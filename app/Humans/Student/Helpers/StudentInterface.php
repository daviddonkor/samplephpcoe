<?php

namespace Humans\Student\Helpers;

interface StudentInterface {
    public function readCourse():void;
    public function attendLectures(): array;
    public function hasRegistered(): bool;
}