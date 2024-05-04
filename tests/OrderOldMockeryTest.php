<?php
use PHPUnit\Framework\TestCase;


class OrderOldMockeryTest extends TestCase
{

    public function tearDown(): void
    {
        Mockery::close();
    }


    public function testOrderOldIsProcessed()
    {
        $gateway = $this->getMockBuilder('PaymentGateway')
                        ->setMethods(['charge'])
                        ->getMock();

        $gateway->expects($this->once())
                ->method('charge')
                ->with($this->equalTo(200))
                ->willReturn(true);

        $orderOld = new OrderOld($gateway);

        $orderOld->amount = 200;

        $this->assertTrue($orderOld->process());
    }

    public function testOrderOldIsProcessedUsingMockery()
    {

        $gateway = Mockery::mock('PaymentGateway');

        $gateway->shouldReceive('charge')
                ->once()
                ->with(200)
                ->andReturn(true);

        $orderOld = new OrderOld($gateway);

        $orderOld->amount = 200;

        $this->assertTrue($orderOld->process());
    }

}

