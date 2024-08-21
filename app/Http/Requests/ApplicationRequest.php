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
            'patient_id' => ['required'],
            'doctor_id' => ['required'],
            'checkuptype_id' => ['required'],
            'purposes' => ['required', 'max:191'],
            'height_body' => ['max:191'],
            'mass_body' => ['max:191'],
            'blod_type' => ['max:191'],
            'blod_pressure' => ['max:191'],
            'colesterol' => ['max:191'],
            'blod_sugar' => ['max:191'],
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
            'patient_id.required' => 'Kolom Nama pasien wajib diisi!',

            'doctor_id.required' => 'Kolom Dokter pemeriksa wajib diisi!',

            'checkuptype_id.required' => 'Kolom jenis pemeriksaan wajib diisi!',

            'purposes.required' => 'Kolom Keperluan pasien wajib diisi!',
            'purposes.max' => 'Kolom keperluan maksimal :max karakter!!',

            'height_body.max' => 'Kolom tinggi badan maksimal :max karakter!!',

            'mass_body.max' => 'Kolom keperluan maksimal :max karakter!!',

            'blod_type.max' => 'Kolom keperluan maksimal :max karakter!!',

            'blod_pressure.max' => 'Kolom keperluan maksimal :max karakter!!',

            'colesterol.max' => 'Kolom keperluan maksimal :max karakter!!',

            'blod_sugar.max' => 'Kolom keperluan maksimal :max karakter!!',
        ];
    }

}
