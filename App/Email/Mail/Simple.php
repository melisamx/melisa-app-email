<?php namespace App\Email\Mail;

use Illuminate\Mail\Mailable;

class Simple extends Mailable
{
    
    protected $mail;
    
    public function __construct(array $mail)
    {
        
        $this->mail = $mail;
        
    }
    
    public function build()
    {
        
        return $this->view('mails.simple', $this->mail);
        
    }
    
}