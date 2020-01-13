<?php

namespace App\Http\Controllers\Empren;

use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Models\Emprendedor;
use App\Models\Proyecto;
use App\Models\Fase;
use App\User;
use Auth;

use Illuminate\Http\Request;

use App\Http\Requests\CreateEmprenValidation;

class EmprendedorController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:emprendedor');
    }
    
	public function Home()
	{
		$id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->first();
		return view('Emprendedor/dashboard', compact('empre'));
	}

	public function Validar(CreateEmprenValidation $request) 
	{
		$data = $request->all();

		return back();
	}


    
}
