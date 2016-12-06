<?php namespace App\Email\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Email\Http\Requests\BinnacleProcessRequest;
use App\Email\Logics\Binnacle\ProcessLogic;

class SendController extends Controller
{
    
    public function process(BinnacleProcessRequest $request, ProcessLogic $logic)
    {
        
        $output = $logic->init($request->allValid());
        
        return response()->create($output);
        
    }
    
}
