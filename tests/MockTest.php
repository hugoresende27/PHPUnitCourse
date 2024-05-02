<?php
use PHPUnit\Framework\TestCase;


class MockTest extends TestCase
{

    public function testMock()
    {
        // $mailer = new Mailer;
        $mock = $this->createMock(Mailer::class); //mocks are known as stubs

        $mock->method('sendMessage')
            ->willReturn(true);

        $result = $mock->sendMessage('aaa@asdad.xom', 'Hallo');

        $this->assertTrue($result);
    }

}

