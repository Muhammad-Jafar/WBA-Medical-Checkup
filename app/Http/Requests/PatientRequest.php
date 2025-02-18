<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PatientRequest extends FormRequest
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
            'nik' => ['required', 'unique:patients,nik','min:16', 'max:16'],
            'name' => ['required', 'min:3', 'max:191'],
            'gender' => ['required'],
            'born_place' => ['required', 'min:3', 'max:191'],
            'born_date' => ['required', 'date'],
            'address' => ['required'],
            'occupation' => ['required'],
            'phone' => ['required'],
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
            'nik.required' => 'Kolom NIK wajib diisi!',
            'nik.min' => 'Kolom NIK harus :min karakter!',
            'nik.max' => 'Kolom NIK harus :max karakter!',
            'nik.unique' => 'NIK tersebut sudah terdaftar!',

            'name.required' => 'Kolom nama lengkap wajib diisi!',
            'name.min' => 'Kolom nama lengkap minimal :min karakter!',
            'name.max' => 'Kolom nama lengkap maksimal :max karakter!!',

            'gender.required' => 'Kolom jenis kelamin wajib diisi!',

            'born_place.required' => 'Kolom tempat lahir wajib diisi!',

            'born_date.required' => 'Kolom tanggal lahir wajib diisi!',
            'born_date.date' => 'Kolom tanggal lahir harus tanggal yang benar!',

            'address.required' => 'Kolom alamat wajib diisi!',

            'occupation.required' => 'Kolom pekerjaan wajib diisi!',

            'phone.required' => 'Kolom nomor telepon wajib diisi!',
        ];
    }

}
