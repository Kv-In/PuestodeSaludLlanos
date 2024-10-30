<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TablaPacienteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			
			'nombre' => 'required|string',
			'edad' => 'required',
			'sexo' => 'required',
			'estado_civil' => 'string',
			'etnia' => 'string',
			'puesto_servicio' => 'string',
			'region_presupuestario' => 'string',
			'unidad_administrativa' => 'string',
			'dpi_cui' => 'required',
            'telefono' => 'required',
            
			'emergencia_nombre' => 'string',
            'emergencia_telefono' => 'required',
            
        ];
    }
}
