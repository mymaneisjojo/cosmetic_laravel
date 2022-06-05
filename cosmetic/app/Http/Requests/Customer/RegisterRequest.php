<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'firtsName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:customer',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ];
    }

   

    public function messages(){
        return [
            'firtsName.required' => 'first name không được để trống',
            'lastName.required' => 'last name không được để trống',
            'email.required' => 'email không được để trống',
            'email.unique' => 'email không được trùng',
            'phone.required' => 'sđt không được để trống',
            'address.required' => 'địa chỉ không được để trống',
            'password.required' => 'password không được để trống',
            'confirm_password.required' => 'confirm_password không được để trống'
        ];
    }
}
