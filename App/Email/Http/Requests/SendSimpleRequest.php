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
        'address'=>'required|max:50',
        'subject'=>'required|max:100',
        'body'=>'required|max:100',
    ];
    
    public function rules()
    {
        
        return $this->rules;
        
    }
    
}
