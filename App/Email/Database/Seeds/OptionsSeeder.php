<?php namespace App\Email\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
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
