<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropiedadRequest extends FormRequest
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
            'descripcion' => ['required'],
            'direccion' => ['required'],
            'barrio' => ['required'],
            'CP' => ['required'],
            'cantHab' => ['required', 'numeric'],
            'cantBanios' => ['required', 'numeric'],
            'costo' => ['required', 'numeric'],
            'titulo' => ['required'],
            'idPropietario' => ['required'],
            'idCiudad' => ['required'],
            'idTipoTransaccion' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'descripcion.required' => 'La descripción es obligatoria.',
            'direccion.required' => 'La dirección es obligatoria.',
            'barrio.required' => 'Barrio es un campo obligatorio.',
            'CP.required' => 'El Código postal es obligatorio.',
            'cantHab.required' => 'El campo es obligatorio.',
            'cantHab.numeric' => 'El campo debe contener caracteres numéricos.',
            'cantBanios.required' => 'El campo es obligatorio.',
            'cantBanios.numeric' => 'El campo debe contener caracteres numéricos.',
            'costo.required' => 'El campo es obligatorio.',
            'costo.numeric' => 'El campo debe contener caracteres numéricos.',
            'titulo.required' => 'El título es obligatorio.',
            'idPropietario.required' => 'El campo es obligatorio.',
            'idCiudad.required' => 'El campo es obligatorio.',
            'idTipoTransaccion.required' => 'El campo es obligatorio.',
        ];
    }
}
