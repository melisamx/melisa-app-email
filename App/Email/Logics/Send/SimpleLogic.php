<?php namespace App\Email\Logics\Send;

use Melisa\core\LogicBusiness;
use Illuminate\Support\Facades\Mail;
use App\Email\Mail\Simple;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SimpleLogic
{
    use LogicBusiness;
    
    public function init(array $input) {
        
        $this->debug('Init logic process send simple email to {b}', [
            'b'=>$input['address']
        ]);
        
        Mail::to($input['address'])->sendNow(new Simple($input));
        
        return $this->processErrors();
        
    }
    
    public function processErrors() {
        
        $failures = Mail::failures();
        
        if( count($failures) === 0 ) {
            
            return true;
            
        }
        
        return $this->error('failures emails: ', implode(',', $failures));
        
    }
    
}
