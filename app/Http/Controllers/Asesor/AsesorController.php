<?php

namespace App\Http\Controllers\Asesor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Models\Role;
use App\Models\Asesor;
use App\Models\Emprendedor;
use App\Models\Proyecto;
use App\Models\Colaborador;
use App\Http\Requests\AsesorValidacion;
use Barryvdh\DomPDF\Facade as PDF;
class AsesorController extends Controller
{

    function __construct() {
        $this->middleware('auth');
        $this->middleware('roles:asesor');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //muestra los datos del asesor
    {

        $id = auth()->user()->id;
        $asesor = Asesor::where('user_id', $id)->first();

       return view('Asesor.show-asesor', compact('asesor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //redirecciona para ser editado
    {

        $id = auth()->user()->id;
        $asesor = Asesor::where('user_id', $id)->first();

       return view('Asesor.edit-asesor', compact('asesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //ver alta de emprendedor
    {
        $emprendedor = Emprendedor::findOrFail($id);

        //$ids = $emprendedor->id;
          $proyecto = Proyecto::findOrFail($id);    

        $colaborador =Colaborador::where('emprendedor_id', $emprendedor->id)->get();

        return view('Asesor.show-AltaEmpre', compact('proyecto','emprendedor','colaborador'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //descargar los datos de alta emprendedor
    {
        $emprendedor = Emprendedor::findOrFail($id);

        //$ids = $emprendedor->id;    

        $colaborador =Colaborador::where('emprendedor_id', $emprendedor->id)->get();
       
        $pdf = PDF::loadview('Asesor.pdf.infoAltaEmpre', compact('emprendedor','colaborador'));

        return $pdf->download();


      }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsesorValidacion $request, $id)
    {

      $asesor = Asesor::findOrFail($id); 
      $user = User::where('id', $asesor->user_id)->first();
      
      $user->name =$request->Nombre; 
      $user->email = $request->Correo;
      $user->password=bcrypt($request->Contraseña);

      $user->update();
      $asesor->update($request->all());

      return redirect()->route('asesor.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
