<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required',
            'postcode' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
    }
    public function prepareForValidation()
    {
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'as')]);
    }
}
