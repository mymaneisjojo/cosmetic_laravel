<?php

namespace App\Http\Requests\Blog;

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
            'name' =>'required|unique:blog'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Name blog cannot be blank',
            'name.unique' => 'The name of the blog cannot be the samev'
        ];

        dd($request->all());
    }
}
