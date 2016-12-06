<?php namespace App\Email\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Email\Http\Requests\SendSimpleRequest;
use App\Email\Logics\Send\SimpleLogic;

class SendController extends Controller
{
    
    public function simple(SendSimpleRequest $request, SimpleLogic $logic)
    {
        
        $output = $logic->init($request->allValid());
        
        return response()->create($output);
        
    }
    
}
