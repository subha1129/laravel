<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class CreateMailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
 
    protected $rules = array [
        'username' => 'required|min:5',
        'lastname' => 'required|min:5',
        'email' => 'required|email|unique:crs_admin_user,email'
        ];
    
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     
     */
    public function messages(){
        
        return [
          'username.required' => 'Username is required',
          'lastname.required' => 'lastname is required',
          'email.required' => 'email required',
          'email.email' => 'valid email required',
          'email.unique:crs_admin_user,email' => 'This email already taken',
        ];
    }
    
    public function rules()
    {
      return $this->rules;
    }
}
