<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Humans\Student\PartTime\Student;

/**
 * This is a test for the Student Class.
 * It tests the various functions in the student class
 * 
 * A sample student with name David Siaw and 90909949 is used to instantiate the student
 * 
 */
final class StudentTest extends TestCase
{
    protected $student;

    /**
     * This is the setup function which instantiates and initializes the student class.
     * 
     * @return void 
     */
    public function setUp(): void
    {
        $this->student = new Student("90909949", "David Siaw");
        $this->student->registerCourse("BIT 216", "Principles of System Architectural Design");
    }

    /**
     * This tests the hasRegistered function in the student class.
     * The true case is asserted after the registerCourse has been called in the setup function.
     * 
     * @return void
     */
    public function test_hasRegistered()
    {
        $this->assertSame(true, $this->student->hasRegistered());
    }

    /**
     * This is a test of the hasRegisteredCourses function.
     * The course passed to the registerCourse function is tested here to see if it was 
     * saved successfully
     * 
     * @return void
     */
    public function test_hasRegisteredcourses()
    {
        $this->assertArrayHasKey("BIT 216", $this->student->getRegisteredcourses());
        $this->assertContains("Principles of System Architectural Design", $this->student->getRegisteredcourses());
    }

    /**
     * Test of the beCurteous trait used by the student class
     * 
     * @return void
     */
    public function test_beCurteous()
    {
        $this->assertSame("Excuse me, may I have that?", $this->student->beCurteous());
    }
}
