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
use Illuminate\Http\Request;
use App\Http\Requests\EditUsuarioValidation;
use App\Http\Controllers\Controller;


class ArchivosController extends Controller
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
        return view ('Emprendedor.Altaemprendedor', compact('empre'));
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
          if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/Revisiones/', $name);
        }
            $avance = new Avance;
            $avance->NumeroEntrega = $request->input('numeroentrega');
            $avance->Documento = $name;
            $avance->proyecto_id = $request->input('proyecto');
            $avance->fase_id = $request->input('fase');
            $avance->save();
            return redirect()->route('Archivo.index'); 
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $fase = Fase::findOrFail($id);
        $id = Auth()->user()->id;
        $empreId = Emprendedor::where('user_id', $id)->value('id');
        $proyectos = Proyecto::where('emprendedor_id', $empreId)->get();

        $empre = Emprendedor::where('user_id', $id)->value('id');
        return view ('Emprendedor.Entregadoc', compact('proyectos', 'fase', 'empre'));
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
       /* $avance = Avance::findOrFail($id);
        $name=$avance->Comentario;
        $doc=public_path('Revisiones')."/".$name; 

        return response()->download($doc); */
        $archi =Avance::findOrFail($id);
        $name=$archi->Comentario;
        return Storage::download("files/$name");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUsuarioValidation $request, $id)
    {
        $emprendedores = Emprendedor::findOrFail($id);
        $user = User::where('id', $emprendedores->user_id)->first();
    if ($request->Contraseña === $request->Contraseña1)
    {
        $user->password=bcrypt($request->Contraseña);
        $user->update();       
    } else {
        return back()->with('no', 'Contraseñas No Coinciden');
    }
        return back()->with('agregar', 'Contraseña Actualizada'); 
        
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
