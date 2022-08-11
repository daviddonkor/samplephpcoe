<?php

namespace Humans\Staff\Admin;

use Humans\Helper\EmployeeInterface as EmployeeInterface;
use Humans\Helper\GoodHumanBehaviour as GoodHumanBehaviour;

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

    }

    public function administrates():String
    {
        return $this->value;
    }
}