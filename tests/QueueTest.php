<?php
use PHPUnit\Framework\TestCase;


class QueueTest extends TestCase
{

    /**
     * [Description for testnewQueueIsEmpty]
     * producer test
     * @return Queue
     */
    public function testnewQueueIsEmpty(): Queue
    {

        $queue = new Queue;
        $this->assertEquals(0, $queue->getCount());
        return $queue;
    }


    
    /**
     * [Description for testAnItemIsAddedToTheQueue]
     * @depends testnewQueueIsEmpty
     * consumer test
     * @return [type]
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {
        $queue->push('red');
        var_dump($queue);
        $this->assertEquals(1, $queue->getCount());
        return $queue;
    }

    /**
     * [Description for testAnItemIsRemovedFromTheQueue]
     * @depends testAnItemIsAddedToTheQueue
     * consumer test
     * @param Queue $queue
     * @return [type]
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue)
    {
        $item = $queue->pop();
        $this->assertEquals(0, $queue->getCount());
        $this->assertEquals('red',$item);
    }

}