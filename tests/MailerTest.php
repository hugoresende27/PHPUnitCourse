<?php
use App\Mailer;
use PHPUnit\Framework\TestCase;



class MailerTest extends TestCase
{

    public function testSendMessageReturnTrue()
    {
        $this->assertTrue(Mailer::send('hugo@example.com', 'Alo !'));
    }
    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
        
        Mailer::send('','');
    }


}