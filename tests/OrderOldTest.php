<?php
use PHPUnit\Framework\TestCase;


class OrderOldTest extends TestCase
{

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

}

