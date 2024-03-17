<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'patient_id'=> ['required'],
            'purposes' => ['required','max:191'],
            'doctor_id' => ['required'],
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
            'patient_id.required' => 'Kolom Nama pasien wajib diisi!',

            'purposes.required' => 'Kolom Keperluan pasien wajib diisi!',
            'purposes.max' => 'Kolom keperluan maksimal :max karakter!!',

            'doctor_id.required' => 'Kolom Dokter pemeriksa wajib diisi!',
            
        ];
    }

}