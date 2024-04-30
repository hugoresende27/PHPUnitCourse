<?php
use PHPUnit\Framework\TestCase;


class FunctionTest extends TestCase
{


    public function testAddingReturnsCorrectSum()
    {
        require 'functions.php';
        $this->assertEquals(4, add(2,2));
        $this->assertEquals(10, add(4,6));
    }



    public function testAddDoesNotReturnIncorrectSum()
    {
        $this->assertNotEquals(5, add(2,2));
        $this->assertNotEquals(11, add(4,6));
    }


}