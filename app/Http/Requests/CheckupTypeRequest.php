<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckupTypeRequest extends FormRequest
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
            'name'=> 'required|min:5|max:191',
            'abbreviated_word' => 'required|min:3|max:191',
            'description' => 'required|min:5|max:255',
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
            'name.required' => 'Kolom nama lengkap wajib diisi!',
            'name.min' => 'Kolom nama lengkap minimal :min karakter!',
            'name.max' => 'Kolom nama lengkap maksimal :max karakter!!',

            'abbreviated_word.required' => 'Kolom SIP wajib diisi!',
            'abbreviated_word.min' => 'Kolom singkatan minimal :min karakter!',
            'abbreviated_word.max' => 'Kolom singkatan maksimal :max karakter!!',

            'description.required' => 'Kolom NIP wajib diisi!',
            'description.min' => 'Kolom deskripsi minimal :min karakter!',
            'description.max' => 'Kolom deskripsi maksimal :max karakter!!',
        ];
    }
}