<?php

namespace App\Humans\Staff\Faculty;

use App\Humans\Helpers\EmployeeInterface;
use App\Humans\Helpers\GoodHumanBehaviour;

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