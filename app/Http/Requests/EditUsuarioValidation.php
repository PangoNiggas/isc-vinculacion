<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUsuarioValidation extends FormRequest
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
            'Contraseña' => 'required|string|min:6',
            'Contraseña1' => 'required|string|min:6',
        ];
    }
     public function attributes()
    {
        return [
            'Contraseña1' => 'Contraseña',
          
    ];
}
}
