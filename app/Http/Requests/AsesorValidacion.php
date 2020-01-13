<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsesorValidacion extends FormRequest
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
        // dd($this->route('asesore'));
        return [
            'Nombre' => 'required',
            'ApellidoP' => 'required',
            'ApellidoM' => 'required',
            'Direccion' => 'required',
            'Ciudad' => 'required',
            'Estado' => 'required',
            'Colonia' => 'required',
            'CP' => 'required|numeric',
            'RFC' => 'required',
            'Escolaridad' => 'required',
            'CURP' => 'required|min:18|max:18',
            'Telefono' => 'required|numeric',
            'FechaNacimiento' => 'required|date',
            'EstadoCivil' => 'required',
            'Sexo' => 'required',
            'Correo' => 'required|email|unique:asesores,Correo,'.$this->route('asesore'),
            'Contraseña' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'Nombre' => 'Nombre',
            'ApellidoP' => 'Apellido Paterno',
            'ApellidoM' => 'Apellido Materno',
            'Direccion' => 'Direccion',
            'Ciudad' => 'Ciudad',
            'Estado' => 'Estado',
            'Colonia' => 'Colonia',
            'CP' => 'Codigo Postal',
            'RFC' => 'RFC',
            'Escolaridad' => 'Escolaridad',
            'CURP' => 'Curp',
            'Telefono' => 'Telefono',
            'FechaNacimiento' => 'Fecha de Nacimiento',
            'EstadoCivil' => 'Estado Civil',
            'Sexo' => 'Sexo',
            'Correo' => 'Correo Electronico',
            'Contraseña' => 'Contraseña',
    ];
}
}
