<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Models\Role;
use App\Models\Asesor;
use App\Models\Asignacion;
use App\Models\Proyecto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AsesorValidacion;
use Illuminate\Support\Facades\Mail;
class AsesorController extends Controller
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
        $asesores = Asesor::Nombre($request->Nombre)->orderBy('id','DESC')->paginate(5);
        return view('Administrador.show-asesores', compact('asesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.Reg-Asesor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsesorValidacion $request)
    {
        if($request->Contraseña === $request->Contraseña1){
        $asesor = $request->all();
        $role = Role::where('name','asesor')->first();
        
        $contraseña = $request->input('Contraseña');
        
        $users = User::create([
            'name'=>$request->input('Nombre'),
            'email'=>$request->input('Correo'),
            'password'=>bcrypt($request->input('Contraseña')),
         ]);

        $user = array('password' =>$contraseña,'email'=>$users->email,'name'=>$users->name); 

        Mail::send('email.plantillasesor',['msg'=>$user], function($u) use($user){
            $u->to($user['email'], $user['name'])->subject('Tu registro fue completado');
        });

         $users->roles()->attach($role); 
        
         $id = $users->id;
         $pw = $users->password;
         $asesor['user_id'] = $id;
         $asesor['Contraseña'] = $pw;
         Asesor::create($asesor);

         return redirect()->route('asesores.index');
        }else{

            return back()->with('no','contraseñas no coinciden');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Asesor::findOrFail($id)->delete();

        return redirect()->route('asesores.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesor = Asesor::findOrFail($id);

        return view('Administrador.editasesor', compact('asesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsesorValidacion $request, $id)
    {   
        if($request->Contraseña === $request->Contraseña1){
        $asesor = Asesor::findOrFail($id);
        $user = User::where('id', $asesor->user_id)->first();
      
        $user->name =$request->Nombre; 
        $user->email = $request->Correo;
        $user->password=$request->Contraseña;
            
        $usuario = array('email'=>$user->email,'password'=>$user->password,'name'=>$user->name); 

        Mail::send('email.plantillasesor',['msg'=>$usuario], function($u) use($usuario){
            $u->to($usuario['email'], $usuario['name'])->subject('Tu Actualización fue completada');
        });

        $user->password=bcrypt($request->Contraseña);

        $user->update();

        $data = $request->all();
        $data['Contraseña'] = bcrypt($request->input['Contraseña']);
        $asesor->update($data);

        return redirect()->route('asesores.index');

        }else{

            return back()->with('incorrect','contraseñas no coinciden');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        if($request->ajax()){

            $asesor = Asesor::findOrFail($id);
            $user = User::where('id', $asesor->user_id)->first();
            $user->delete();// si borro al padre muere el hijo(asesor)
          
            return response()->json([

                'message' => $asesor->Nombre . ' fue eliminado'

            ]);
        }
    }
}
