<?php

namespace Humans\Staff\Faculty;

use Humans\Helpers\EmployeeInterface;
use Humans\Helpers\GoodHumanBehaviour;

class Faculty implements EmployeeInterface{

    use GoodHumanBehaviour;
    public function reportToWork(): void
    {
        
    }

    public function work(): void
    {

    }

    public function lectures(): string
    {
        return "Can Lecture";
    }
}