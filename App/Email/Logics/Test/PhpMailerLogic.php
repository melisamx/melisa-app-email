<?php

namespace App\Mail\Logics\Test;

use PHPMailer\PHPMailer\PHPMailer;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PhpMailerLogic
{
    
    public function init()
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->Port       = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth   = true;
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->setFrom(env('MAIL_USERNAME'), 'FromEmail');
        $mail->addAddress(env('MAIL_TEST_ADDRESS'), 'ToEmail');
        $mail->SMTPDebug  = 2;
        $mail->isHTML(true);

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Email could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Email has been sent.';
        }        
    }
    
}
