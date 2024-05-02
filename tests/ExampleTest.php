<?php
use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryTestCase;


class ExampleTest extends MockeryTestCase
{

    public function testAddingTwoPlusPlusResultIsFour()
    {

        $this->assertEquals(4, 2 + 2, '2 + 2 not  equals 4');
    }

    public function tearDown(): void
    {
        // Mockery::close();
    }

}