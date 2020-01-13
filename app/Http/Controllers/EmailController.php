<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use Storage;
use App\Models\Role;
use App\User; 
use Mail;
use DB;
use Auth;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('email/form_mail');
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
    
        $input = $request->all();
        $file =$request->file('file');
        $archivo='';
        $asunto=$request->title;
        $mensaje=$request->body;
        $tipoCorreo=$request->tipocorreo;
      
        $users=DB::table('emprendedores')
        ->join('users','emprendedores.user_id','=','users.id')
        ->select('emprendedores.Nombre','emprendedores.ApellidoP','users.email')->get();

        $asesors=DB::table('asesores')
        ->join('users','asesores.user_id','=','users.id')
        ->select('asesores.Nombre','asesores.ApellidoP','users.email')->get();

        if (!empty($file)) {

            $file_rute =$file->getClientOriginalName();
             $ruta=Storage::disk('correo')->put($file_rute, file_get_contents($file->getRealPath() ) );
             $input['file'] = $file_rute;
              Email::create($input);
              $arfile=public_path('correo')."/".$file_rute; 

              if($tipoCorreo=='1'){
                $this->enviar_correo($users,$mensaje,$asunto,$arfile);
             }

             elseif ($tipoCorreo=='2') {
                $this->enviar_correo($asesors,$mensaje,$asunto,$arfile);
              } 

        }else{
           $email =Email::create($input);

             if($tipoCorreo=='1'){
                $this->enviar_correo($users,$mensaje,$asunto,$archivo);
             }

             elseif ($tipoCorreo=='2') {
                $this->enviar_correo($asesors,$mensaje,$asunto,$archivo);
              } 
        }
             
         return back()->with('aceptar', 'Correo Enviado');  
         
        // return redirect()->route('emails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }


    protected function enviar_correo($users,$mensaje,$asunto,$archivo){
         
         foreach ($users as $user) {
            
            $data= array('mensaje'=>$mensaje,'email'=>$user->email,'name'=>$user->Nombre,'asunto'=>$asunto,'file'=>$archivo);

            Mail::send('emails', ['data'=>$data], function($mail) use($data,$archivo){
                $mail->to($data['email']);
                $mail->subject($data['asunto']);
                if (!empty($archivo)) {
                    $mail->attach($archivo);  
                 }
                    
                                
            });
        }
    }
}


        