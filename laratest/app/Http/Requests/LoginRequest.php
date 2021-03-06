<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|max:50',
            'password' => 'required|min:8|max:50|regex:/^[\w-]*$/',
            

            // ^ - start of string
            // [\w-]* - zero or more word chars from the [a-zA-Z0-9_] range or -s
            // $ - end of string.
            // 'password' => 'regex:/^[\w-]*$/'
        ];
    }
    // public function messages(){
    //     return ['email.required'=>'Null....', 'password.required'=>'please at least 8 char....' ];  
    //     }

}
