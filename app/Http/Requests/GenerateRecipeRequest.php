<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerateRecipeRequest extends FormRequest
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
            'dinners' => 'required|numeric|min:1|max:7'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'dinners.required' => 'Please enter a number between 1 and 7',
            'dinners.numeric' => 'Please enter a number between 1 and 7',
            'dinners.min' => 'Please enter a number between 1 and 7',
            'dinners.max' => 'Please enter a number between 1 and 7',
        ];
    }
}
