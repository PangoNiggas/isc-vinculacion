<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Emprendedor;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;

class EmpreController extends Controller
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
        
        $emprendedores = Emprendedor::Nombre($request->Nombre)->orderBy('id','DESC')->paginate(5);

        return view('Administrador.show-emprendedores',compact('emprendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emprendedores = Emprendedor::all();

        $pdf = PDF::loadView('pdf.emprendedores', compact('emprendedores'));

        return $pdf->download('emprendedores.pdf');

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
        $emprendedor = Emprendedor::findOrFail($id);

        $view = view('pdf.onlyemprendedor', compact('emprendedor'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('emprendedor.pdf');
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
    public function destroy(Request $request, $id)
    {
        if($request->ajax()){

            $emprendedor = Emprendedor::findOrFail($id);
            $user = User::where('id', $emprendedor->user_id)->first();
            $user->delete();
            $emprendedor_total = Emprendedor::all()->count();
            
            return response()->json([

                'message' => $emprendedor->Nombre . ' fue eliminado'

            ]);
        }
    }
}
