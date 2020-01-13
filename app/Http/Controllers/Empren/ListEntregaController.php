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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;

class ListEntregaController extends Controller
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
        $empreId = Emprendedor::where('user_id', $id)->value('id');
        $proyectos = Proyecto::where('emprendedor_id', $empreId)->paginate(5);    
        
        $empre = Emprendedor::where('user_id', $id)->value('id');
        return view ('Emprendedor.ListaEntregas', compact('proyectos' ,'empre'));
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
        $proyecto = Proyecto::findOrFail($id);
        $view = view('pdf.proyecto', compact('proyecto'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('proyecto.pdf');
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
