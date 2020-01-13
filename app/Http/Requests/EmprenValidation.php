<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmprenValidation extends FormRequest
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
            'Nombre' =>    'required',
            'ApellidoP' => 'required',
            'ApellidoM' => 'required',
            'FechaNaci' => 'required',
            'Edad' => 'required|numeric',
            'Sexo' => 'required',
            'EstadoCivil' => 'required',
            'Direccion' => 'required',
            'NumeroExterior' => 'required|numeric',
            'Colonia' => 'required',
            'Ciudad' => 'required',
            'Municipio' => 'required',
            'Correo' => 'required|email|unique:emprendedores,Correo,',
            'CodigoPostal' => 'required|numeric',
            'TelefonoCel' => 'required',  
            'Escolaridad' => 'required',
            'CURP' => 'required|min:18|max:18',
            'INE' => 'required',
            'TipoEmpresa' =>  'required',
            'TipoPersona' =>  'required',
          

        ];
    }
    public function attributes()
    {
        return [
            'Nombre' => 'nombre',
            'ApellidoP' => 'apellido paterno',
            'ApellidoM' => 'apellido materno',
            'FechaNaci' => 'fecha de nacimiento',
            'Edad' => 'edad',
            'Sexo' => 'sexo',
            'EstadoCivil' => 'estado civil',
            'Direccion' => 'direccion',
            'NumeroExterior' => 'numero exterior',
            'Colonia' => 'colonia',
            'Ciudad' => 'ciudad',
            'Municipio' => 'municipio',
            'CodigoPostal' => 'codigo postal',
            'Correo' => 'correo eletronico',
            'Escolaridad' => 'escolaridad',
            'CURP' => 'CURP',
            'INE' => 'INE',
            'TipoEmpresa' => 'tipo de empresa',
            'TipoPersona' => 'tipo de persona',
            'TelefonoCel' => 'telefono celuler',
    ];
}
}
