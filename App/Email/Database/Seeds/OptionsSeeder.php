<?php namespace App\Email\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\InstallOption;

class OptionsSeeder extends Seeder
{
    use InstallOption;
    
    public function run()
    {
        
        $this->installOption('option.email.access', [
            'name'=>'Option main de aplicación emails',
            'text'=>'Email',
            'isSubMenu'=>true
        ]);
        
    }
    
}
