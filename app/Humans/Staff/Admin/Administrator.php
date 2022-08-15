<?php

namespace Humans\Staff\Admin;

use Humans\Helpers\EmployeeInterface as EmployeeInterface;
use Humans\Helpers\GoodHumanBehaviour as GoodHumanBehaviour;

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