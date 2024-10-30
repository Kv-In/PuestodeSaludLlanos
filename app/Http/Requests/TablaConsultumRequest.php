<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TablaConsultumRequest extends FormRequest
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
			'id_paciente' => 'required',
			'fecha' => 'required',
			'motivo_consulta' => 'string',
			'presion_arterial' => 'string',
            'peso' => 'string',
            
			'diagnostico' => 'string',
			'tratamiento' => 'string',
			'firma_medica' => 'string',
        ];
    }
}
