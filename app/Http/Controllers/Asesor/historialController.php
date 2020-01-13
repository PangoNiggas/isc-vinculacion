<?php

namespace App\Http\Controllers\Asesor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Proyecto;
use App\Models\Ideanegocio;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Asesor;

class historialController extends Controller
{
     function __construct() {
        $this->middleware('auth');
        $this->middleware('roles:asesor');

    }


    public function project($id){

   		$proyecto = Proyecto::findOrFail($id);

        $view = view('pdf.proyecto', compact('proyecto'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('proyecto.pdf');
	}


	public function projects($id){

   		//$ideas = Ideanegocio::all(); //ideas es el id del emprendedor solo que uso ese nombre para reutilizar la vista pdf.proyectos
   		$asesor = Asesor::findOrFail($id);

         $pdf = PDF::loadView('pdf.proyectoss', compact('asesor'));

         return $pdf->download('proyectos.pdf');
	}
}
