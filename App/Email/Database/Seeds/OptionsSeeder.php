<?php namespace App\Email\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class OptionsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installOption('option.email.access', [
            'name'=>'Option main de aplicación emails',
            'text'=>'Email',
            'isSubMenu'=>true
        ]);
        
    }
    
}
