<?php

namespace App\Email\Http\Requests;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class SendSimpleRequest extends Generic
{
    
    protected $rules = [
        'address'=>'required|max:95|email',
        'subject'=>'required|max:100',
        'body'=>'required',
        'cc'=>'sometimes|max:100|email',
    ];   
    
}
