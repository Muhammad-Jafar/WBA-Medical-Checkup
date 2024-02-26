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
            'name'=> ['required', 'min:3', 'max:191'],
            'gender' => ['required'],
            'born_place' => ['required', 'min:3', 'max:191'],
            'born_date' => ['required'],
            'address' => ['required'],
            'occupation' => ['required'],
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

            'gender.required' => 'Kolom jenis kelamin wajib diisi!',

            'born_place.required' => 'Kolom tempat lahir wajib diisi!',

            'born_date.required' => 'Kolom tanggal lahir wajib diisi!',

            'address.required' => 'Kolom alamat wajib diisi!',

            'occupation.required' => 'Kolom pekerjaan wajib diisi!',
        ];
    }

}
