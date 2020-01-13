<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\Ideanegocio;
use Barryvdh\DomPDF\Facade as PDF;

class HistoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:administrador');
    }
    
    public function index(Request $request)
    {
        //$proyectos = Proyecto::paginate(5);
        $proyectos = Proyecto::Nombre($request->Nombre)->orderBy('id','DESC')->paginate(5);

        return view('Administrador.Historial', compact('proyectos'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ideas = Ideanegocio::all();

         $pdf = PDF::loadView('pdf.proyectos', compact('ideas'));

         return $pdf->download('proyectos.pdf');

        
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
        Proyecto::findOrFail($id)->delete();
        return redirect()->route('historial.index');
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
    public function destroy(Request $request, $id)
    {
        if($request->ajax()){

            $historial = Proyecto::findOrFail($id);
            $historial->delete();
            $historial_total = Proyecto::all()->count();
            
            return response()->json([

             

            ]);
        }
    }
}
