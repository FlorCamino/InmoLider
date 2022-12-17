<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
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
            'nombre' => ['required'],
            'apellido' => ['required'],
            'dni' => ['required'],
            'fechaNacimiento' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'telefono' => ['required'],
            'direccion' => ['required'],
            'idCiudad' => ['required'],
            'CP' => ['required'],
            'password' => ['required', Password::min(8)],
            'confirmar-contraseña' => ['required', 'same:password']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El email es obligatorio',
            'password.required' => 'La contraseña es obligatoria',
            'password-confirm.required' => 'La contraseña es obligatoria',
            'nombre.required' => 'El nombre es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
            'dni.required' => 'El DNI es obligatorio.',
            'fechaNacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'direccion.required' => 'El domicilio es obligatorio.',
            'CP.required' => 'El Código postal es obligatorio.',
            'idCiudad.required' => 'La ciudad es obligatoria.',
        ];
    }
}
