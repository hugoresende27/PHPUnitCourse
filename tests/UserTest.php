<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        // require 'User.php';
        
        $user = new User;                

        $user->first_name = "Teresa";
        $user->surname = "Green";
        
        $this->assertEquals('Teresa Green', $user->getFullName());        
    }
        
    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;
        
        $this->assertEquals('', $user->getFullName());                    
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $mockMailer = $this->createMock(Mailer::class); //mocks are known as stubs

        $mockMailer->expects($this->once()) //->never() it will fail
                    ->method('sendMessage')
                    ->with($this->equalTo('bajuras@aaa.com'), $this->equalTo('Hello'))
                    ->willReturn(true);

        $user->setMailer($mockMailer);

        $user->email = "bajuras@aaa.com";

        $this->assertTrue($user->notify("Hello"));
    }

    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User;

        $mockMailer = $this->getMockBuilder(Mailer::class)
                            // ->setMethods(['sendMessage']) //methods to be stub
                            ->setMethods(null)
                            ->getMock(); 


        $user->setMailer($mockMailer);

        $this->expectException(Exception::class);

        $user->notify('Hello');
    }
}