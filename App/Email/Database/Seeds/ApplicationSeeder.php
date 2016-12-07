<?php namespace App\Email\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\InstallApplication;

class ApplicationSeeder extends Seeder
{    
    use InstallApplication;
    
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
