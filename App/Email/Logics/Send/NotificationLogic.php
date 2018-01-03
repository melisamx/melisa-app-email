<?php 

namespace App\Email\Logics\Send;

use Illuminate\Notifications\Notifiable;
use Melisa\core\LogicBusiness;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class NotificationLogic
{
    use LogicBusiness, Notifiable;
    
    public $notifiable;

    public function init(array $input)
    {        
        $this->debug('Init logic process send notification email to {b}', [
            'b'=>$input['address']
        ]);
        
        $notification = $this->getNotification($input);        
        $notifiable = $this->getNotifiable($input);        
        $this->send($notifiable, $notification);
        return true;        
    }
    
    public function getNotification($input)
    {
        return app()->makeWith($input['class'], [
            'data'=>json_decode($input['data'])
        ]);
    }
    
    public function getNotifiable(&$input)
    {
        $this->notifiable = $input;
        
        if( isset($input['notifiable'])) {
            return json_decode($input['notifiable']);
        }
        
        return $this;
    }
    
    public function routeNotificationFor($route)
    {
        if( $route === 'mail') {
            return $this->notifiable['address'];
        }
        
        return app(\Illuminate\Notifications\DatabaseNotification::class);
    }
    
    public function send(&$notifiable, &$notification)       
    {
        return \Notification::send($notifiable, $notification);
    }
    
}
