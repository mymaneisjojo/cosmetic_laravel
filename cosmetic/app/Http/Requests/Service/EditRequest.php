<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'summary' => 'required:services',
            'content' => 'required:services',
            
            // 'caregory_id' => 'required'
           
        ];
    }

    public function messages()
    {
        return [
            'summary.required' => 'Name summary cannot be blank',
            'content.required' => 'Name content cannot be blank',
        ];
    }
}
