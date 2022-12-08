<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'CP' => ['required', 'alpha_dash'],
            'idCiudad' => ['required', 'numeric'],
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'email.required' => 'El email es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'dni.required' => 'El DNI es obligatorio.',
            'fechaNacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'direccion.required' => 'La dirección es obligatoria.',
            'CP.required' => 'El Código postal es obligatorio.',
            'nombre.alpha' => 'El nombre debe contener letras.',
            'email.email' => 'El email debe ser formato válido.',
            'apellido.alpha' => 'El apellido  debe contener letras.',
            'telefono.numeric' => 'El teléfono  debe contener valores numéricos.',
            'dni.numeric' => 'El DNI debe contener números.',
            'fechaNacimiento.date' => 'La fecha de nacimiento es obligatoria.',
            'CP.alpha_dash' => 'El Código postal puede contener letras o números.'
        ];
    }
}
