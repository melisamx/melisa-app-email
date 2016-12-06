<?php namespace App\Email\Logics\Binnacle;

use Melisa\core\LogicBusiness;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ProcessLogic
{
    use LogicBusiness;
    
    protected $binnacle;
    protected $listeners;
    
    public function __construct(
        BinnacleRepository $binnacle,
        ListenersRepository $listeners
    ) {
        
        $this->binnacle = $binnacle;
        $this->listeners = $listeners;
        
    }
    
    public function init(array $input) {
        
        $this->debug('Init logic process binnacle {b}', [
            'b'=>$input['idBinnacle']
        ]);
        
        
        
    }
    
}
