<?php namespace App\Email\Http\Requests;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SendSimpleRequest extends Generic
{
    protected $rules = [
        'data'=>'required|max:36',
    ];
    
    public function rules()
    {
        
        return $this->rules;
        
    }
    
}
