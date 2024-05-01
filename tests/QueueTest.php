<?php
use PHPUnit\Framework\TestCase;


class QueueTest extends TestCase
{


    protected static $queue;
    
    protected function setUp(): void
    {
        static::$queue->clear();
    }


    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue;
    }
    public static function tearDownAfterClass(): void
    {
        static::$queue = null;
    }



    public function testnewQueueIsEmpty()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }




    public function testAnItemIsAddedToTheQueue()
    {
        static::$queue->push('red');
        $this->assertEquals(1, static::$queue->getCount());
    }



    public function testAnItemIsRemovedFromTheQueue()
    {
        static::$queue->push('red');
        $item = static::$queue->pop();
        $this->assertEquals(0, static::$queue->getCount());
        $this->assertEquals('red',$item);
    }


    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        static::$queue->push('red');
        static::$queue->push('green');
        var_dump(static::$queue);
        $firstItem = static::$queue->pop();
        $secondItem = static::$queue->pop();
        $this->assertEquals('green',$firstItem);
        $this->assertEquals('red',$secondItem);
    }

}