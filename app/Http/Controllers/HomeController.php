<?php

namespace App\Http\Controllers;

use Auth;
use App\Role;
use App\User;
use App\Models\Emprendedor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth()->user()->id;
        $empre = Emprendedor::where('user_id', $id)->value('id');
       return view('home', compact('empre'));
    }
}
