<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaccionRequest extends FormRequest
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
            'idPropiedad' => ['required'],
            'idUsuario' => ['required'],
            'idTipoTransaccion' => ['required'],
            'valor' => ['required', 'numeric'],
            'descripcion' => ['nullable']
        ];
    }
    public function messages()
    {
        return [
            'idPropiedad.required' => 'El campo es obligatorio.',
            'idUsuario.required' => 'El campo es obligatorio.',
            'idTipoTransaccion.required' => 'El campo es obligatorio.',
            'valor.required' => 'El campo es obligatorio.',
            'valor.numeric' => 'El campo debe contener caracteres numéricos.'
        ];
    }
}
