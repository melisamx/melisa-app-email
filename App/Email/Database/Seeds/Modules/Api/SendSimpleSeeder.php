<?php namespace App\Email\Database\Seeds\Modules\Api;

use Melisa\Laravel\Database\InstallSeeder;

class SendSimpleSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Mandar correo electronico simple',
                'url'=>'/email.php/api/v1/send/simple/',
                'description'=>'Módulo para mandar correo electronico simple',
                'nameSpace'=>null,
                'task'=>[
                    'key'=>'task.email.simple.send',
                    'name'=>'Mandar correo electronico simple',
                    'description'=>'Permitir mandar correo electronico simple',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.email.send.simple',
                    'description'=>'Mandar correo electronico simple'
                ],
                'listener'=>'event.email.send.simple'
            ],
        ]);
        
    }
    
}
