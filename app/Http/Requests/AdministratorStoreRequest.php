<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministratorStoreRequest extends FormRequest
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
            'name' => 'required|min:3|max:191',
            'email' => 'required|email|unique:users,email|max:191',
            'password' => 'min:3|max:191',
            'password_confirmation' => 'required|same:password',
            'position' => 'required',
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
            'name.min' => 'Kolom nama lengkap minimal 3 karakter!',
            'name.max' => 'Kolom nama lengkap maksimal 191 karakter!',

            'email.required' => 'Kolom email wajib diisi!',
            'email.email' => 'Kolom email harus email yang valid!',
            'email.unique' => 'Email tersebut sudah terdaftar!',
            'email.max' => 'Kolom email maksimal 191 karakter!',

            'password.min' => 'Kolom password minimal 3 karakter!',
            'password.max' => 'Kolom password maksimal 191 karakter!',

            'password_confirmation.same' => 'Kolom ulangi password harus sama dengan kolom password!',

            'position.required' => 'Kolom posisi wajib diisi!',
        ];
    }
}
