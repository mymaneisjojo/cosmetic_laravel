<?php

namespace App\Http\Requests\Brand;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'name' =>'required|unique:brand'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Name brand cannot be blank',
            'name.unique' => 'The name of the brand cannot be the same'
        ];
    
    }
}
