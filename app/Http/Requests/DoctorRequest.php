<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:191'],
            'sip' => ['required'],
            'nip' => ['required'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Kolom nama lengkap wajib diisi!',
            'name.min' => 'Kolom nama lengkap minimal :min karakter!',
            'name.max' => 'Kolom nama lengkap maksimal :max karakter!!',

            'sip.required' => 'Kolom SIP wajib diisi!',

            'nip.required' => 'Kolom NIP wajib diisi!',
        ];
    }

}
