<?php

namespace App\Http\Requests\About;

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
            'name' => 'required|unique:about',
            
            // 'caregory_id' => 'required'
           
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name about cannot be blank',
            'name.unique' => 'The name of the about cannot be the same',
        ];
    }
}
