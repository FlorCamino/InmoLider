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
            'descripcion' => ['nullable'],
            'direccion' => ['required'],
            'barrio' => ['alpha', 'required'],
            'CP' => ['required', 'alpha_dash'],
            'cantHab;' => ['required', 'numeric'],
            'cantBanios' => ['required', 'numeric'],
            'estacionamiento' => ['required'],
            'aceptaMascotas' => ['required'],
            'amoblado' => ['required'],
            'costo' => ['required', 'numeric'],
            'titulo' => ['required', 'alpha_dash'],
            'idPropietario' => ['required'],
            'idPeriodo' => [''],
            'idCiudad' => ['required'],
            'idTipoTransaccion' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'direccion.required' => 'La dirección es obligatoria.',
            'barrio.required' => 'Barrio es un campo obligatorio.',
            'barrio.alpha_dash' => 'El barrio puede contener letras o números.',
            'CP.required' => 'El Código postal es obligatorio.',
            'CP.alpha_dash' => 'El Código postal puede contener letras o números.',
            'cantHab.required' => 'El campo es obligatorio.',
            'cantHab.numeric' => 'El campo debe contener caracteres numéricos.',
            'cantBanios.required' => 'El campo es obligatorio.',
            'cantBanios.numeric' => 'El campo debe contener caracteres numéricos.',
            'estacionamiento.required' => 'El campo es obligatorio.',
            'aceptaMascotas.required' =>  'El campo es obligatorio.',
            'amoblado.required' =>  'El campo es obligatorio.',
            'costo.required' => 'El campo es obligatorio.',
            'costo.numeric' => 'El campo debe contener caracteres numéricos.',
            'titulo.required' => 'El título es obligatorio.',
            'titulo.alpha_dash' =>  'El titulo puede contener caracteres numéricos y alfabéticos.',
            'idPropietario.required' => 'El campo es obligatorio.',
            'idCiudad.required' => 'El campo es obligatorio.',
            'idTipoTransaccion.required' => 'El campo es obligatorio.',
        ];
    }
}
