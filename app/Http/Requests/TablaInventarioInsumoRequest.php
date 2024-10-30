<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TablaInventarioInsumoRequest extends FormRequest
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
			'id_insumo' => 'required',
            'nombre' => 'required|string',
            'cantidad_existente' => 'required',
            'cantidad_entregada' => 'required',
            'saldo' => 'required',
            'fecha_vencimiento' => 'date',
            'fecha_recepcion' => 'date',

        ];
    }
}
