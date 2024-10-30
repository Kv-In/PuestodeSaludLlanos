<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TablaAntecedenteRequest extends FormRequest
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
			'id_antecedente' => 'required',
			'id_paciente' => 'required',
			'medicos' => 'string',
			'quirurgicos' => 'string',
			'traumaticos' => 'string',
			'alergicos' => 'string',
			'familiares' => 'string',
        ];
    }
}
