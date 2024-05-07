<?php
use App\AbstractPerson;
use App\Doctor;
use PHPUnit\Framework\TestCase;



class AbstractPersonTest extends TestCase
{

    /**
     * [testNameAndTitleIsReturned]
     * used extended class Doctor
     * @return [type]
     * 
     */
    public function testNameAndTitleIsReturned()
    {
        $doctor = new Doctor('Resende');
        $this->assertEquals('Dr. Resende', $doctor->getNameAndTitle());

    }


    
    public function testNameAndTitleIncludesValueFromTitle()
    {
        $mock = $this->getMockBuilder(AbstractPerson::class)
                     ->setConstructorArgs(['Resende'])
                     ->getMockForAbstractClass();

        $mock->method('getTitle')->willReturn('Dr.');

        $this->assertEquals('Dr. Resende', $mock->getNameAndTitle());

    }

}