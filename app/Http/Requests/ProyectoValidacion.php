<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoValidacion extends FormRequest
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
            'Actividad' => 'required',
            'Razonsocial' => 'required',
            'RFC' => 'required',
            'NombreDirector'=> 'required',
            'Telefonoemp'=> 'required|numeric|min:7',
            'CorreoEmp'=> 'required|email',
            'NombreProd'=> 'required',
            'Propuesta' => 'required',
            'Descripcion'=> 'required',
            'Organizacion'=> 'required',
            'Fortaleza'=> 'required',
            'Oportunidades'=> 'required',
            'Debilidades'=> 'required',
            'Amenazas'=> 'required',
            'definicion'=> 'required',
            'tipodomicilio'=> 'required',
            'nombreasentamiento'=> 'required',
            'numeroexterior'=> 'required|numeric',
            'localidad'=> 'required',
            'municipio'=> 'required',
            'estado'=> 'required',
            'codigopostal'=> 'required|numeric',
            'superficie'=> 'required',
            'refencia'=> 'required',
            'tipoasentamiento' => 'required',
            'croquis'=> 'required|mimes:pdf',
        ];
    }

    public function attributes()
    {
        return [

            'Actividad' => 'Sector de actividad en la que se desarrolla',
            'Razonsocial' => 'apellido Razon Social',
            'RFC' => 'RFC',
            'tipoasentamiento' => 'Tipo de asentamiento',
            'Propuesta' => 'Propuesta de negocio', 
            'NombreDirector' => 'Nombre del Director',
            'Telefonoemp' => 'Telefono de la Empresa',
            'CorreoEmp' => 'Correo Eletronico de la Empresa',
            'NombreProd' => 'Nombre del Producto ó Servicio',
            'Descripcion' => 'Describe en que consiste su propuesta',
            'Organizacion' => 'Pertenece alguna organizacion',
            'Fortaleza' => 'Fortaleza',
            'Oportunidades' => 'Oportunidades',
            'Debilidades' => 'Debilidades',
            'Amenazas' => 'Amenazas',
            'definicion' => 'Definicion',
            'tipodomicilio' => 'Tipo de domicilio',
            'nombreasentamiento' => 'Nombre del asentamiento',
            'numeroexterior' => 'Numero Exterior',
            'localidad' => 'Localidad',
            'municipio' => 'Municipio',
            'estado' => 'Estado',
            'codigopostal' => 'Codigo Postal',
            'superficie' => 'Superficie',
            'refencia' => 'Referencia',
            'croquis' => 'Croquis es necesario',
    ];
}
}
