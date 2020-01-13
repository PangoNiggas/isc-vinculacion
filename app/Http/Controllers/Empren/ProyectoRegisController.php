<?php

namespace App\Http\Controllers\Empren;
use DB;
use Auth;
use App\User;
use Carbon\Carbon;
use App\Models\Proyecto;
use App\Models\Emprendedor;
use App\Models\Competencia;
use App\Models\Colaborador;
use App\Models\Cpotencial;
use App\Models\Foda;
use App\Models\Ideanegocio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoValidacion;

class ProyectoRegisController extends Controller
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
        $empre = Emprendedor::where('user_id', $id)->value('id');
        return view('Emprendedor.Altaproyecto', compact('empre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	//$proyectos = Proyecto::all();
    	//$emprendedores = Emprendedor::all();
    	//$asesores = Asesor::all();
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');
        return view ('Emprendedor.Altaproyecto', compact('empre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoValidacion $request)
    { 
    
        
        $proyecto = new Proyecto;
        $proyecto->Actividad = $request->input('Actividad');
	$proyecto->Semestre = $request->input('Semestre');
        $proyecto->Razonsocial = $request->input('Razonsocial');
        $proyecto->RFC = $request->input('RFC');
        $proyecto->NombreDirector = $request->input('NombreDirector');
        $proyecto->Telefonoemp = $request->input('Telefonoemp');
        $proyecto->CorreoEmp = $request->input('CorreoEmp');
        $proyecto->Propuesta = $request->input('Propuesta');
        $proyecto->PropuestaOtra = $request->input('PropuestaOtra');
        $proyecto->NombreProd = $request->input('NombreProd');
        $proyecto->Descripcion = $request->input('Descripcion');
        $proyecto->Organizacion = $request->input('Organizacion');
        $proyecto->Cual = $request->input('Cual');
        $proyecto->Estado = 'Iniciado';
        $id = Auth()->user()->id;
        $empreId = Emprendedor::where('user_id', $id)->value('id');
        $proyecto->emprendedor_id = $empreId;
        $proyecto->save();

    
        $foda = new Foda;
        $foda->Fortaleza = $request->input('Fortaleza');
        $foda->Oportunidades = $request->input('Oportunidades');
        $foda->Debilidades = $request->input('Debilidades');
        $foda->Amenazas = $request->input('Amenazas');
        $foda->proyecto_id = $proyecto->id;
        $foda->save();

    	
        if ($request->hasFile('croquis')) {
            // $file = $request->file('croquis');
            // $name = time().$file->getClientOriginalName();
            // $file->move(public_path().'/croquis/', $name);
            $cro = time().request()->croquis->getClientOriginalName();
            $archivoss = request()->croquis->storeAs('croquis',$cro);

            //$cro = time().request()->croquis->getClientOriginalName();
           // $archivoss = request()->croquis->storeAs('croquis',$cro);

        }

        $idea = new Ideanegocio;
        $idea->definicion = $request->input('definicion');
        $idea->croquis = $cro;
        // $idea->croquis = $name;
        $idea->tipodomicilio = $request->input('tipodomicilio');
        $idea->tipoasentamiento = $request->input('tipoasentamiento');
        $idea->tipoasenotro = $request->input('tipoasenotro');
        $idea->nombreasentamiento = $request->input('nombreasentamiento');
        $idea->numerointerior = $request->input('numerointerior');
        $idea->numeroexterior = $request->input('numeroexterior');
        $idea->localidad = $request->input('localidad');
        $idea->municipio = $request->input('municipio');
        $idea->estado = $request->input('estado');
        $idea->codigopostal = $request->input('codigopostal');
        $idea->superficie = $request->input('superficie');
        $idea->refencia = $request->input('refencia');
        $idea->proyecto_id = $proyecto->id;
        $idea->save();

        $competencia = new Competencia;
        $competencia->Nombre = $request->input('nombrecompe');
        $competencia->Giro = $request->input('giro');
        $competencia->Descripcion = $request->input('direccioncompe');
        $competencia->ideanegocio_id = $idea->id;
        $competencia->save();

        $verificar = $request->input('nombrecompe1');
        if(!empty($verificar)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe1');
            $competencia->Giro = $request->input('giro1');
            $competencia->Descripcion = $request->input('direccioncompe1');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }
        $verificar2 = $request->input('nombrecompe2');
        if(!empty($verificar2)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe2');
            $competencia->Giro = $request->input('giro2');
            $competencia->Descripcion  = $request->input('direccioncompe2');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }
        $verificar3 = $request->input('nombrecompe3');
        if(!empty($verificar3)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe3');
            $competencia->Giro = $request->input('giro3');
            $competencia->Descripcion  = $request->input('direccioncompe3');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }

        $verificar4 = $request->input('nombrecompe4');
        if(!empty($verificar4)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe4');
            $competencia->Giro = $request->input('giro4');
            $competencia->Descripcion  = $request->input('direccioncompe4');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }

        $verificar5 = $request->input('nombrecompe5');
        if(!empty($verificar5)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe5');
            $competencia->Giro = $request->input('giro5');
            $competencia->Descripcion  = $request->input('direccioncompe5');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }

         $verificar6 = $request->input('nombrecompe6');
        if(!empty($verificar6)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe6');
            $competencia->Giro = $request->input('giro6');
            $competencia->Descripcion  = $request->input('direccioncompe6');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }

         $verificar7 = $request->input('nombrecompe7');
        if(!empty($verificar7)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe7');
            $competencia->Giro = $request->input('giro7');
            $competencia->Descripcion  = $request->input('direccioncompe7');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }
         $verificar8 = $request->input('nombrecompe8');
        if(!empty($verificar8)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe8');
            $competencia->Giro = $request->input('giro8');
            $competencia->Descripcion  = $request->input('direccioncompe8');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }
         $verificar9 = $request->input('nombrecompe9');
        if(!empty($verificar9)) {
            $competencia = new Competencia;
            $competencia->Nombre = $request->input('nombrecompe9');
            $competencia->Giro = $request->input('giro9');
            $competencia->Descripcion  = $request->input('direccioncompe9');
            $competencia->ideanegocio_id = $idea->id;
            $competencia->save();
        }

        $copotencial = new Cpotencial;
        $copotencial->Nombre = $request->input('nombreclien');
        $copotencial->Giro = $request->input('giroclien');
        $copotencial->Descripcion = $request->input('direccionclien');
        $copotencial->ideanegocio_id = $idea->id;
        $copotencial->save();

        $verificar10 = $request->input('nombreclien1');
        if(!empty($verificar10)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien1');
            $copotencial->Giro = $request->input('giroclien1');
            $copotencial->Descripcion  = $request->input('direccionclien1');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }
        $verificar11 = $request->input('nombreclien2');
        if(!empty($verificar11)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien2');
            $copotencial->Giro = $request->input('giroclien2');
            $copotencial->Descripcion  = $request->input('direccionclien2');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }
        $verificar12 = $request->input('nombreclien3');
        if(!empty($verificar12)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien3');
            $copotencial->Giro = $request->input('giroclien3');
            $copotencial->Descripcion  = $request->input('direccionclien3');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }

        $verificar13 = $request->input('nombreclien4');
        if(!empty($verificar13)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien4');
            $copotencial->Giro = $request->input('giroclien4');
            $copotencial->Descripcion  = $request->input('direccionclien4');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }

        $verificar14 = $request->input('nombreclien5');
        if(!empty($verificar14)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien5');
            $copotencial->Giro = $request->input('giroclien5');
            $copotencial->Descripcion  = $request->input('direccionclien5');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }

         $verificar15 = $request->input('nombreclien6');
        if(!empty($verificar15)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien6');
            $copotencial->Giro = $request->input('giroclien6');
            $copotencial->Descripcion  = $request->input('direccionclien6');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }

         $verificar16 = $request->input('nombreclien7');
        if(!empty($verificar16)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien7');
            $copotencial->Giro = $request->input('giroclien7');
            $copotencial->Descripcion  = $request->input('direccionclien7');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }
         $verificar17 = $request->input('nombreclien8');
        if(!empty($verificar17)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien8');
            $copotencial->Giro = $request->input('giroclien8');
            $copotencial->Descripcion  = $request->input('direccionclien8');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }
         $verificar18 = $request->input('nombreclien9');
        if(!empty($verificar18)) {
            $copotencial = new Cpotencial;
            $copotencial->Nombre = $request->input('nombreclien9');
            $copotencial->Giro = $request->input('giroclien9');
            $copotencial->Descripcion  = $request->input('direccionclien9');
            $copotencial->ideanegocio_id = $idea->id;
            $copotencial->save();
        }
     return back()->with('infor', 'Proyecto Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
