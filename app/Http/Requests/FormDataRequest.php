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
            'domicilio' => ['required'],
            'CP' => ['required', 'alpha_dash'],
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
            'direccion.alpha_dash' => 'El domicilio puede contener letras o números.',
            'CP.required' => 'El Código postal es obligatorio.',
            'CP.alpha_dash' => 'El Código postal puede contener letras o números.'
        ];
    }
}
