<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class FormDataRequest extends FormRequest
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
            'nombre' => ['required', 'alpha'],
            'email' => ['required', 'email'],
            'apellido' => ['required', 'alpha'],
            'telefono' => ['required', 'numeric'],
            'dni' => ['required', 'numeric'],
            'fechaNacimiento' => ['required', 'date'],
            'direccion' => ['required'],
            'CP' => ['required'],
            'idRol' => ['required'],
            'password' => ['required', Password::min(8)],
            'confirmar-contraseña' => ['required', 'same:password']
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.alpha' => 'El nombre debe contener letras.',
            'apellido.required' => 'El apellido es obligatorio.',
            'apellido.alpha' => 'El apellido  debe contener letras.',
            'dni.required' => 'El DNI es obligatorio.',
            'dni.numeric' => 'El DNI debe contener números.',
            'fechaNacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fechaNacimiento.date' => 'La fecha de nacimiento es obligatoria.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe contener un formato válido.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.numeric' => 'El teléfono  debe contener valores numéricos.',
            'direccion.required' => 'El domicilio es obligatorio.',
            'CP.required' => 'El Código postal es obligatorio.',
            'idRol.required' => 'El rol es obligatorio',
            'password.required' => 'La contraseña es obligatoria',
            'password.Pasword::min(8)' => 'La contraseña debe contener 8 o más caracteres',
            'confirmar-contraseña.required' => 'La contraseña es obligatoria',
            'confirmar-contraseña.same:password' => 'La contraseña no coincide'
        ];
    }
}
