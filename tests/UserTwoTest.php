<?php
use App\Mailer;
use App\UserTwo;
use PHPUnit\Framework\TestCase;



class UserTwoTest extends TestCase
{

    public function testNotifyReturnsTrue()
    {

        $user = new UserTwo('Hugo');

        $mailer = new Mailer;
        $user->setMailer($mailer);
               
        // $mailer = $this->createMock(Mailer::class);
        // $mailer->method('send')
        //         ->willReturn(true);
        
        // $user->setMailer($mailer);
        
        $this->assertTrue($user->notify('Hello!'));

    }



}