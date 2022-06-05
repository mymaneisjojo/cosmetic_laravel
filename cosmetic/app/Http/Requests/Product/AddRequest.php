<?php

namespace App\Http\Requests\Product;

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
            'name' => 'required|unique:product',
            'price' => 'required|numeric|min:0|not_in:0',
            'sale_price' => 'numeric|min:0|lt:price',
           
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name product cannot be blank',
            'name.unique' => 'The name of the product cannot be the same',

            'price.required' => 'Price cannot be blank',
            'price.numeric' => 'Price must be 1 number',
            'price.min' => 'Price cannot be negative',
            'price.not_in' => 'Price must be greater than 0',
            
            'sale_price.numeric' => 'Sale price must be 1 number',
            'sale_price.min' => 'Sale price cannot be negative',
            'sale_price.lt' => 'Sale price must be less than price',

        ];
    }
}
