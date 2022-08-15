<?php

namespace App\Humans\Staff\Admin;

use App\Humans\Helpers\EmployeeInterface as EmployeeInterface;
use App\Humans\Helpers\GoodHumanBehaviour as GoodHumanBehaviour;

class Administrator implements EmployeeInterface{

    use GoodHumanBehaviour;
    protected $value;

    public function __construct()
    {
        $this->value="david";
    }
    public function reportToWork(): void
    {
        
    }

    public function work(): void{
        echo "Reporting time is good";
    }

    public function administrates():String
    {
        return $this->value;
    }
}