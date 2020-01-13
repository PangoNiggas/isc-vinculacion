<?php

namespace App\Http\Controllers\Empren;

use DB;
use Carbon\Carbon;
use App\Models\Emprendedor;
use App\User;
use Auth;
use App\Models\Proyecto;
use App\Models\Asignacion;
use App\Models\Asesor;
use App\Models\Fase;
use App\Models\Avance;
use App\Models\Colaborador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmprenValidation;
use Illuminate\Support\Facades\Hash;


class EmpreController extends Controller
{

    function __construct() {
        $this->middleware('auth');
        $this->middleware('roles:emprendedor');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->first();
        $empres = Emprendedor::where('user_id', $id)->value('id');
        $colaboradores = Colaborador::where('emprendedor_id', $empres)->get();
        
        return view ('Emprendedor.Editarempren', compact('empre', 'colaboradores'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmprenValidation $request, $id)
    {
        $emprendedores = Emprendedor::findOrFail($id);
        $emprendedores->update($request->all()); 
        return back()->with('aceptar', 'Emprendedor Actualizado'); 
        
          
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
