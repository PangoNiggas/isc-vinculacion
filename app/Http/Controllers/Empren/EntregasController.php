<?php

namespace App\Http\Controllers\Empren;

use Illuminate\Http\Request;
use App\Models\Fase;
use App\Models\Avance;
use App\Models\Proyecto;
use App\Models\Emprendedor;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;

class EntregasController extends Controller
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id =  Crypt::decrypt($id);
        $proyectos = Proyecto::findOrFail($id);
        $fases = Fase::all();
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');
        $avances = Avance::where('NumeroEntrega', '=', 3)->where('fase_id', '=', 1)->where('proyecto_id', $proyectos->id)->get();
        $avancess = Avance::where('NumeroEntrega', '=', 3)->where('fase_id', '=', 2)->where('proyecto_id', $proyectos->id)->get();
        $avancesss = Avance::where('NumeroEntrega', '=', 3)->where('fase_id', '=', 3)->where('proyecto_id', $proyectos->id)->get();
        $avancessss = Avance::where('NumeroEntrega', '=', 3)->where('fase_id', '=', 4)->where('proyecto_id', $proyectos->id)->get();
        return view ('Emprendedor.Entregas', compact('fases', 'empre', 'proyectos', 'avances', 'avancess', 'avancesss', 'avancessss'));
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
