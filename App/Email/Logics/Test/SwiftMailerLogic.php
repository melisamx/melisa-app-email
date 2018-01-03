<?php

namespace App\Mail\Logics\Test;

use Mail;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SwiftMailerLogic
{
    
    public function init()
    {
        $template_path = 'emails.test';
        $data = json_decode(json_encode([
            'urlSite'=>'test',
            'data'=>[
                'type'=>[
                    'name'=>'test'
                ],
                'customer'=>[
                    'contributor'=>[
                        'name'=>'name test'
                    ]
                ]
            ]
        ]), true);

        Mail::send([
            'text'=>$template_path
        ], $data, function($message) {
            // Set the receiver and subject of the mail.
            $message->to(env('MAIL_TEST_ADDRESS'), 'Receiver Name')
                ->subject('Laravel First Mail');
            // Set the sender
            $message->from(env('MAIL_USERNAME'), 'Our Code World');
        });
    }
    
}
