<?php

namespace App\Http\Controllers\Empren;
use DB;
use Carbon\Carbon;
use App\Models\Emprendedor;
use App\Models\Colaborador;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Requests\EmprenValidation;

class EmprendedorRegisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:emprendedor');
    }
     
    public function index()
    {
        $id = Auth()->user()->id;
        $empreId = Emprendedor::where('user_id', $id)->get();
        //$proyectos = Proyecto::where('emprendedor_id', $empreId)->get();
        $pdf = PDF::loadView('pdf.Emprendedor', compact('empreId'));
         return $pdf->stream('emprendedor.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth()->user()->id;
        $emprendedores = Emprendedor::where('user_id', $id)->get();
        $empre = Emprendedor::where('user_id', $id)->value('id');
        
       
        return view ('Emprendedor.Altaemprendedor', compact('empre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmprenValidation $request)
    {
        $Emprendedor = new Emprendedor;
        $Emprendedor->Nombre = $request->input('Nombre');
        $Emprendedor->ApellidoP = $request->input('ApellidoP');
        $Emprendedor->ApellidoM = $request->input('ApellidoM');
        $Emprendedor->FechaNaci = $request->input('FechaNaci');
        $Emprendedor->Edad = $request->input('Edad');
        $Emprendedor->Sexo = $request->input('Sexo');
        $Emprendedor->EstadoCivil = $request->input('EstadoCivil');
        $Emprendedor->Direccion = $request->input('Direccion');
        $Emprendedor->NumeroExterior = $request->input('NumeroExterior');
        $Emprendedor->NumeroInterior = $request->input('NumeroInterior');
        $Emprendedor->Colonia= $request->input('Colonia');
        $Emprendedor->Ciudad= $request->input('Ciudad');
        $Emprendedor->Municipio= $request->input('Municipio');
        $Emprendedor->CodigoPostal= $request->input('CodigoPostal');
        $Emprendedor->TelefonoCel= $request->input('TelefonoCel');
        $Emprendedor->TelefonoOfi= $request->input('TelefonoOfi');
        $Emprendedor->TelefonoCasa= $request->input('TelefonoCasa');
        $Emprendedor->Correo= $request->input('Correo');
        $Emprendedor->Escolaridad= $request->input('Escolaridad');
        $Emprendedor->TipoPersona= $request->input('TipoPersona');
        $Emprendedor->CURP = $request->input('CURP');
        $Emprendedor->INE = $request->input('INE');
        $Emprendedor->RFC = $request->input('RFC');
        $Emprendedor->RFCM = $request->input('RFCM');
        $Emprendedor->RazonSocial = $request->input('RazonSocial');
        $Emprendedor->ObjetivoSocial = $request->input('ObjetivoSocial');
        $Emprendedor->TipoEmpresa = $request->input('TipoEmpresa');
        $Emprendedor->TipoOtra = $request->input('TipoOtra');
        $Emprendedor->user_id = Auth::User()->id;
        $Emprendedor->save();


        $verificar1 = $request->input('NombreC1');
        if(!empty($verificar1)) {
            $colaborador = new Colaborador;
            $colaborador->NombreC = $request->input('NombreC1');
            $colaborador->ApellidoPC = $request->input('ApellidoPC1');
            $colaborador->ApellidoMC = $request->input('ApellidoMC1');
            $colaborador->CURPC = $request->input('CURPC1');
            $colaborador->emprendedor_id = $Emprendedor->id;
            $colaborador->save();
        }

        $verificar2 = $request->input('NombreC2');
        if(!empty($verificar2)) {
            $colaborador = new Colaborador;
            $colaborador->NombreC = $request->input('NombreC2');
            $colaborador->ApellidoPC = $request->input('ApellidoPC2');
            $colaborador->ApellidoMC = $request->input('ApellidoMC2');
            $colaborador->CURPC = $request->input('CURPC2');
            $colaborador->emprendedor_id = $Emprendedor->id;
            $colaborador->save();
        }

        $verificar = $request->input('NombreC3');
        if(!empty($verificar)) {
            $colaborador = new Colaborador;
            $colaborador->NombreC = $request->input('NombreC3');
            $colaborador->ApellidoPC = $request->input('ApellidoPC3');
            $colaborador->ApellidoMC = $request->input('ApellidoMC3');
            $colaborador->CURPC = $request->input('CURPC3');
            $colaborador->emprendedor_id = $Emprendedor->id;
            $colaborador->save();
        }

        $verificar4 = $request->input('NombreC4');
        if(!empty($verificar4)) {
            $colaborador = new Colaborador;
            $colaborador->NombreC = $request->input('NombreC4');
            $colaborador->ApellidoPC = $request->input('ApellidoPC4');
            $colaborador->ApellidoMC = $request->input('ApellidoMC4');
            $colaborador->CURPC = $request->input('CURPC4');
            $colaborador->emprendedor_id = $Emprendedor->id;
            $colaborador->save();
         }

         $verificar5 = $request->input('NombreC5');
        if(!empty($verificar5)) {
            $colaborador = new Colaborador;
            $colaborador->NombreC = $request->input('NombreC5');
            $colaborador->ApellidoPC = $request->input('ApellidoPC5');
            $colaborador->ApellidoMC = $request->input('ApellidoMC5');
            $colaborador->CURPC = $request->input('CURPC5');
            $colaborador->emprendedor_id = $Emprendedor->id;
            $colaborador->save();
         }

        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->first();
        $empres = Emprendedor::where('user_id', $id)->value('id');
        $colaboradores = Colaborador::where('emprendedor_id', $empres)->get();
    
        return view ('Emprendedor.Editarempren', compact('empre', 'colaboradores'));
        //return back()->with('registroempre', 'Registro del Emprendedor Exitoso');     
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empre = Emprendedor::findOrFail($id);
        return view('Registro.show', compact('empre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $empre = Emprendedor::findOrFail($id);
        return view('Registro.edit', compact('empre')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   
}
