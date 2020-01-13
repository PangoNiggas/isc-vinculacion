<?php

namespace App\Http\Controllers\Empren;

use App\Models\Emprendedor;
use App\Models\Fase;
use App\Models\Avance;
use App\Models\Proyecto;
use App\Models\Revision;
use DB;
use App\User;
use Storage;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstatusController extends Controller
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
        //
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
        $id = Crypt::decrypt($id);
        $proyectos = Proyecto::findOrFail($id);
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');
        $idpro = $proyectos->id;
        $archivos = Avance::where('proyecto_id', $idpro)->get(); 
    
         
        return view ('Emprendedor.ListaEstatus', compact('proyectos', 'empre', 'archivos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        // $archivoss =Avance::findOrFail($id);
        // $file_rute=$archivoss->Comentario;
        // $ruta=public_path('Revisiones')."/".$file_rute; 
        // return response()->download($ruta);
        $archivoss =Avance::findOrFail($id);
        $name=$archivoss->Comentario;
        return Storage::download("files/$name",Str::ascii($name) );
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
