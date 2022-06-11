<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' =>  'required|min:5|max:50',
            'email' =>  'required|regex:/[0-9a-z]+@[a-z]/',
            'social-network'=> 'required|min:5|max:50',
            'commentInput'=> 'required|min:1|max:500',
        ];
    }
}
