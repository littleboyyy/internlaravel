<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            
            'name' => [
                'required',
                'min:2',
                'regex:/^[^0-9][a-zA-Z0-9_]/',
                'not_regex:/^[@#$%&*]/',
            ],
            
            'email' => [
                'required',
                'email',
                'not_regex:/^[root]/',
            ],
            
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[@$!%*#?&]/',
                'regex:/[0-9]/',
                'required_with:password_confirm',
                'same:password_confirm',
            ],
            
            'password_confirm' => 'required',
            
            'address' => 'required',
            
            //'facebook' => 'url',
            //'youtube' => 'url',
            
        ];
        
    }
    
    public function messages()
    {
        return[
            'name.required' => 'Buộc phải nhập'
        ];
    }
    
    public function attributes()
    {
        return[
            'name' => 'Tên người dùng'
        ];
    }

}
