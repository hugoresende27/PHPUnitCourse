<?php
use PHPUnit\Framework\TestCase;


class ExampleTest extends TestCase
{

    public function testAddingTwoPlusPlusResultIsFour()
    {

        $this->assertEquals(4, 2 + 2, '2 + 2 not  equals 4');
    }

}