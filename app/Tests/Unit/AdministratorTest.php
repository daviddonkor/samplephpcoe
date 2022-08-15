<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase as TestCase;
use App\Humans\Staff\Admin\Administrator as Administrator;


class AdministratorTest extends TestCase
{

    protected $admin;

    public function setUp(): void
    {
        $this->admin = new Administrator();
    }
    public function test_administrator_administer_function()
    {


        $name = [];

        $this->assertSame('david', $this->admin->administrates());
        $this->assertIsString($this->admin->administrates());
        $this->assertStringStartsWith('d', $this->admin->administrates());
    }
}
