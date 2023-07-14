<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Fecha'=>'required',
            'Hora'=>'required',
            'name'=>'required'
        ];
    }

    public function messages(){
        return[
            'Fecha.required' =>'Se necesita insertar una fecha para la reserva',
            'Hora.required'=>'Ingresa la hora, es necesario',
            'name.required' =>'Indica los nombres, es necesario'
        ];
    }
}
