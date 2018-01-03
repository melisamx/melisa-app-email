<?php

namespace App\Email\Http\Requests;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class NotificationRequest extends Generic
{
    
    protected $rules = [
        'address'=>'required|max:95|email',
        'subject'=>'required|max:100',
        'class'=>'required|max:999',
        'cc'=>'sometimes|max:100|email',
        'data'=>'required',
    ];
    
}
