<?php namespace App\Email\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installApplication('email', [
            'name'=>'Email',
            'description'=>'Application Email',
            'nameSpace'=>'Melisa.email',
            'typeSecurity'=>'art'
        ]);
        
    }
    
}
