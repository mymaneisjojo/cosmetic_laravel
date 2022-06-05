<?php

namespace App\Http\Requests\Service;

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
            'summary' => 'required|unique:services',
            'content' => 'required|unique:services',
            
            // 'caregory_id' => 'required'
           
        ];
    }

    public function messages()
    {
        return [
            'summary.required' => 'Name summary cannot be blank',
            'summary.unique' => 'The name of the summary cannot be the same',
            'content.required' => 'Name content cannot be blank',
            'content.unique' =>  'The name of the content cannot be the same',

        ];
    }
}
