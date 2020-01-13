<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asesor;
use Barryvdh\DomPDF\Facade as PDF;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:administrador');
    }
	public function Admin(){

   		 return view('Administrador/dashboard');
    }
    

    public function downloadAsesor(){

        
        $asesores = Asesor::all();

        $pdf = PDF::loadView('pdf.asesores', compact('asesores'));

        return $pdf->download('asesores.pdf');

    }

}
