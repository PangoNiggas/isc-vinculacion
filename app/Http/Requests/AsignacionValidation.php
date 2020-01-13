<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignacionValidation extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [

            'asesor_id' => 'required',
            'proyecto_id' => 'required|unique:asignaciones'
        ];
    }

    public function attributes()
    {
        return [
            'asesor_id' => 'El Asesor',
            'proyecto_id' => 'Este Proyecto',
    ];
}
}
