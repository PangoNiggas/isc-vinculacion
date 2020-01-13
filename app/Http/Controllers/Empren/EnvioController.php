<?php

namespace App\Http\Controllers\Empren;
use DB;
use Carbon\Carbon;
use App\Models\Emprendedor;
use App\User;
use Auth;
use Storage;
use App\Models\Proyecto;
use App\Models\Asignacion;
use App\Models\Asesor;
use App\Models\Fase;
use App\Models\Avance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnviarDocValidation;
use App\Http\Requests\EnviarDoc2Validation;
use App\Http\Requests\EnviarDoc3Validation;
use App\Http\Requests\EditUsuarioValidation;
use Illuminate\Support\Facades\Crypt;

class EnvioController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:emprendedor');
    }

    public function index()
    {
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->first();
        return view ('Emprendedor/dashboard', compact('empre'));
    }

     public function store(Request $request)
    {
        if ($request->hasFile('documento1')) {
        $file = time().request()->documento1->getClientOriginalName();
        $archivo = request()->documento1->storeAs('files',$file);
        $avance = new Avance;
        $avance->NumeroEntrega = $request->input('numeroentrega');
        $avance->Documento = $file;
        $avance->proyecto_id = $request->input('proyecto');
        $avance->fase_id = $request->input('fase');
        $avance->save();
        return back()->with('infor1', 'Entrega Uno Realizada'); 
        }
        else{
        return back()->with('error', 'error al tratar de subir el archivo  en entrega uno'); 
        }

         
            
    }

    public function entregados(Request $request)
    {
    	if ($request->hasFile('documento2')) {
            $files = time().request()->documento2->getClientOriginalName();
            $archivo = request()->documento2->storeAs('files',$files);
             $avance = new Avance;
        $avance->NumeroEntrega = $request->input('numeroentrega2');
        $avance->Documento = $files;
        $avance->proyecto_id = $request->input('proyecto2');
        $avance->fase_id = $request->input('fase2');
        $avance->save();
        return back()->with('infor2', 'Entrega Dos Realizada');
        }
        else {
            return back()->with('error1', 'error al tratar de subir el archivo en entrega dos');
        }
       
           
           
    }

    public function entregatres(Request $request)
    {
    	if ($request->hasFile('documento3')) {
        $filess = time().request()->documento3->getClientOriginalName();
        $archivo = request()->documento3->storeAs('files',$filess);
        $avance = new Avance;
        $avance->NumeroEntrega = $request->input('numeroentrega3');
        $avance->Documento = $filess;
        $avance->proyecto_id = $request->input('proyecto3');
        $avance->fase_id = $request->input('fase3');
        $avance->save();    
        return back()->with('infor3', 'Entrega tres Realizada');  
        }
         else {
            return back()->with('error2', 'error al tratar de subir el archivo en entrega tres');
        }
         
           

           
    }


    public function show($pro, $fase)
	{
		$id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');
        $proy =  Crypt::decrypt($pro);
		$proyectos = Proyecto::findOrFail($proy);
        $fass =  Crypt::decrypt($fase);
		$fase = Fase::findOrFail($fass);
        $idpro = $proyectos->id;
        $idfase = $fase->id;
        $avance = Avance::where('NumeroEntrega', '=', 1)->where('proyecto_id', $idpro)->where('fase_id', $idfase)->value('id');
        $avancedos = Avance::where('NumeroEntrega', '=', 2)->where('proyecto_id', $idpro)->where('fase_id', $idfase)->value('id');
         $avancetres = Avance::where('NumeroEntrega', '=', 3)->where('proyecto_id', $idpro)->where('fase_id', $idfase)->value('id');

    
        return view ('Emprendedor.Entregadoc', compact('proyectos', 'fase', 'empre', 'avance', 'avancedos', 'avancetres'));
	}


	public function edit($id)
    {
        $avance = Avance::findOrFail($id);
        // $name=$avance->Comentario;
        // $doc=public_path('Revisiones')."/".$name; 

        // return response()->download($doc); 

        $avance = Avance::findOrFail($id);
        $names=$avance->Comentario;
        return Storage::download("files/$names");
    }

}
