<?php
namespace App;
/**
 * UserTwo
 *
 * An example UserTwo class
 */
class UserTwo
{

    /**
     * Email address
     * @var string
     */
    public $email;

    protected  $mailer_callable;

    /**
     * Mailer object
     * @var Mailer
     */
    protected $mailer;

    /**
     * Constructor
     *
     * @param string $email The UserTwo's email
     *
     * @return void
     */
    public function __construct(string $email)
    {
        $this->email = $email;
        $this->email = $email;
    }

    /**
     * Mailer setter
     *
     * @param Mailer $mailer A Mailer object
     *
     * @return void
     */
    public function setMailer(Mailer $mailer) {
        $this->mailer = $mailer;        
    }
    
    /**
     * Send the UserTwo a message
     *
     * @param string $message The message
     *
     * @return boolean
     */
    public function notifyOld(string $message)
    {

        // $mailer = new Mailer;
        return $this->mailer->send($this->email, $message);

    }

    
    public function notify(string $message)
    {

        return call_user_func([Mailer::class, 'send'], $this->email, $message);

    }


    public function setMailerCallable(callable $mailer_callable)
    {
        $this->mailer_callable = $mailer_callable;
    }
}
