<?php namespace App\Email\Database\Seeds\Modules\Api;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\InstallModule;

class SendSimpleSeeder extends Seeder
{
    use InstallModule;
    
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
