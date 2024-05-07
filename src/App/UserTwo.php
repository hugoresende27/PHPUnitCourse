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
    public function notify(string $message)
    {

        // $mailer = new Mailer;
        return $this->mailer->send($this->email, $message);

    }
}
