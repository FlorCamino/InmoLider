<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Iluminate\Validation\Rules\Password;

class UsersRequest extends FormRequest
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
            // 'nombre' => ['required', 'alpha'],
            // 'email' => ['required|email:rfc,dns|unique:users,email'],
            // 'password' => [
            //     'required',
            //     RulesPassword::min(8)
            //         ->letters()
            //         ->mixedCase()
            //         ->numbers()
            //         ->symbols()
            // ],
            // 'password-confirm' => ['required|same:password'],
            // 'apellido' => ['required', 'alpha'],
            // 'telefono' => ['required', 'numeric'],
            // 'dni' => ['required', 'numeric'],
            // 'fechaNacimiento' => ['required', 'date'],
            // 'direccion' => ['required'],
            // 'CP' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El formato es incorrecto',
            'email.unique' => 'El email no se encuentra disponible',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La longitud debe superar 6 caracteres',
            'password.letters' => 'La contraseña debe contener letras',
            'password.mixedCase' => 'El email no se encuentra disponible',
            'password.numbers' => 'La contraseña debe contener números',
            'password.symbols' => 'La contraseña debe contener caracteres especiales',
            'password-confirm.required' => 'La contraseña es obligatoria',
            'password-confirm.same' => 'Las contraseñas no coinciden',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.alpha' => 'El nombre debe contener letras.',
            'apellido.required' => 'El apellido es obligatorio.',
            'apellido.alpha' => 'El apellido  debe contener letras.',
            'dni.required' => 'El DNI es obligatorio.',
            'dni.numeric' => 'El DNI debe contener números.',
            'fechaNacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fechaNacimiento.date' => 'La fecha de nacimiento es obligatoria.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.numeric' => 'El teléfono  debe contener valores numéricos.',
            'direccion.required' => 'El domicilio es obligatorio.',
            'CP.required' => 'El Código postal es obligatorio.',
        ];
    }
}
