<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CiudadRequest extends FormRequest
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
        ];
    }

    public function messages()
    {
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.alpha' => 'El nombre debe contener letras.'
    }
}