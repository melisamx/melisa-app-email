<?php namespace App\Email\Providers;

use Melisa\Laravel\Providers\RouteServiceProvider as RouteService;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class RouteServiceProvider extends RouteService
{
    
    public $namespace = 'App\Email\Http\Controllers';
    
        
}
