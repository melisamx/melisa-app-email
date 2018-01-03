<?php

namespace App\Email\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Email\Http\Requests\SendSimpleRequest;
use App\Email\Http\Requests\NotificationRequest;
use App\Email\Logics\Send\SimpleLogic;
use App\Email\Logics\Send\NotificationLogic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SendController extends Controller
{
    
    public function not(SendSimpleRequest $request, SimpleLogic $logic)
    {        
        $output = $logic->init($request->allValid());        
        return response()->create($output);        
    }
    
    public function simple(NotificationRequest $request, NotificationLogic $logic)
    {        
        $output = $logic->init($request->allValid());        
        return response()->create($output);        
    }
    
}
