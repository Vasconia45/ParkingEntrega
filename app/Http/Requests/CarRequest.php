<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required|min:3|max:15',
            'model' => 'required|min:1|max:15',
            'plate' => 'required|regex:/(\\d{4})([A-Z]{3})/'
        ];
    }

    public function messages(){
        return [
            'brand' => 'The brand has to have a minimum length of 3 letters and a maximum length of 15.',
            'model' => 'The model has to have a minimum length of 1 letter and a maximum length of 15.',
            'plate' => 'The plate needs to have 4 digits and 3 capital letters.'
        ];
    }
}
