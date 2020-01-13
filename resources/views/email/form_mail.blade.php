@extends('administrador')
 
@section('admin')
<div class="container mt-2" >
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        @if (session()->has('aceptar'))
        <div class="alert alert-success ">{{ session('aceptar')}}</div>
        @endif
        <div class="card">
            <div class="card-header">Redactar Nuevo Correo</div> 
               <div class="card-body">
                  <form method="POST" action="{{ route('emails.store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label>Elegir Destinatario </label>
                        <select  class='form-control' name="tipocorreo">
                          <option value=1>Emprendedores</option>
                          <option value=2>Asesores</option>
                        </select>
                    </div>  

                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Asunto" name="title" id="title">
                    </div>

                    <div class="form-group">
                      <textarea placeholder="Redacta el mensaje" name="body" id="mensaje" class="form-control" rows="7"></textarea>
                    </div>

                    <div class="form-group">
                       <div class="btn btn-default btn-file">
                          <input type="file" name="file" class="form-control-file border">
                      </div>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>  
                    </form>        
                  </div>
                </div>        
              </div>
            </div>
          </div>  
        </div>  
      </div>
 @endsection                               
        