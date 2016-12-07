<?php namespace App\Email\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class ModulesApiSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Api\SendSimpleSeeder::class);
        
    }
    
}
