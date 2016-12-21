<?php namespace App\Email\Mail;

use Illuminate\Mail\Mailable;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Simple extends Mailable
{
    
    protected $mail;
    
    public function __construct(array $mail)
    {
        
        $this->mail = $mail;
        
    }
    
    public function build()
    {
        
        return $this->view('emails.simple', $this->mail);
        
    }
    
}
