<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreferenceRequest extends FormRequest
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
            'inputan' => 'required||max:2',
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
            'inputan.required' => 'Kolom input wajib diisi!',
            // 'inputan.min' => 'permintaan per hari minimal 10 orang!',
            'inputan.max' => 'permintaan per hari maksimal 99 orang!',
        ];
    }
}