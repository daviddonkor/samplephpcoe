<?php

declare(strict_types=1);

namespace Tests\Unit;
use PHPUnit\Framework\TestCase as TestCase;
use Humans\Staff\Admin\Administrator as Administrator;

$admin = new Administrator();
class AdministratorTest extends TestCase{

 
    public function setUp():void {
       
    }
    public function test_administrator_administer_function()
    {

       
        $name= [];
       
        $this->assertSame('david',$this->admin->administrates());
    }
}