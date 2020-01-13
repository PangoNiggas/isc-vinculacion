@extends('asesor')

@section('contenido')

<div class="row">
  <div class="col">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="row">
          <div class="col">
             <table class="table table-bordered table-hover table-reponsive mt-5">
         
        <thead class="table-info">
          <th>Nombre del proyecto</th>
        </thead>

        <tbody>
          <td>{{ $proyecto->NombreProd }}</td>
        </tbody>

        </table>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <a class="btn btn-info form-control mb-2" href="{{ route('projectShow', $proyecto->id) }}">Consultar Alta de Proyecto</a>
          </div>
        </div>
       
      </div>

      <div class="col-12 col-md-8">
        <table class="table table-bordered table-hover table-reponsive mt-4">
         <h4>Tabla de Colaboradores</h4>
          <thead class="table-info">
            <th>Nombre Completo</th>
            <th>Curp</th>
          </thead>

        <tbody>

          @forelse($proyecto->emprendedor->colaboradores as $colaborador)
          
            <tr><td>{{$colaborador->NombreC}} {{ $colaborador->ApellidoPC }} {{ $colaborador->ApellidoMC }}</td>
            <td>{{ $colaborador->CURPC }}</td></tr>
           
             @empty
          <td colspan="6" style="text-align: center;"><h4>No Hay Colaboradores Registrados</h4></td>
          @endforelse
               
        </tbody>

       </table>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <ul class="nav nav-tabs mt-5 nav-justified border">
          <li class="nav-item">
            <a href="#tab1" class="nav-link active" data-toggle="tab">Fase-1</a>
          </li>
          <li class="nav-item">
            <a id="ea" href="#tab2" class="nav-link" data-toggle="tab">Fase-2</a>
          </li>
          <li class="nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">Fase-3</a>  
          </li>
          <li class="nav-item">
            <a href="#tab4" class="nav-link" data-toggle="tab">Fase-4</a>
          </li>
          <li class="nav-item">
            <a href="#tab5" class="nav-link" data-toggle="tab">Fase-5</a>
          </li>
       </ul>
      </div>
    </div>

       <div class="tab-content row">
         <div class="tab-pane active col" id="tab1" role="tabpanel">
            <h3 class="mt-3">Fase-1</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-1</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 1)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===1) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" id="{{ $file->id }}" class="fas fa-file-download" style="font-size: 35px;" href="{{ route('projects.edit', $file->id) }}"></a> 
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>

                                  
                                    @if($file->NumeroEntrega == 3)
                                        

                                          @empty($file->Comentario)
                                            <div class="row justify-content-center">
                          
                                            <div class="col text-center">
                                              <a type="button" class="btn btn-success" onclick="validar({{ $file->id }})">
                                                <i class=""> Aprobar Fase</i></a>
                                              <a type="button" class="btn btn-danger" onclick="validar2({{ $file->id }})">
                                                          <i class=""> No aprobar Fase</i></a>   
                                 
                                            </div>
                                            </div>
                                          @endempty

                                           @isset($file->Comentario)
                                            @if($file->Comentario=='Aprobado')
                                            <div class="alert alert-success text-center">
                                             <strong>Exito!</strong> Fase Aprobada.
                                          </div>
                                          @elseif($file->Comentario=='No Aprobado')
                                              <div class="alert alert-danger text-center">
                                             <strong>No Cumplio!</strong> Fase No Aprobada.
                                          </div>
                                          @else 

                                          @endif
                                          @endisset 
                                           
                            
                                    @elseif(empty($file->Comentario))  


                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center" id="{{ $file->id }}">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio"  onchange="validarExt()">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block btn-sm" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                      

                                      @else(!empty($file->Comentario))
                                     
                                      <div class="row justify-content-center">
                                        <div class="col text-center">
                                          <a type="button" class="btn" href="{{ route('downloadFile', $file->id) }}">
                                          <i class="fas fa-file-download" style="font-size: 35px;"></i></a>
                                            <p>Revision enviada para la entrega {{ $file->NumeroEntrega }} de 3</p>
                                                      
                                       </div>
                                      </div>
                                          
                                        @endif
                                    @endif  
                                  </td>
                              </tr>
                                                               
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>

                
                  
                </div>


  
  
            </div>
            
         </div>

        <div class="tab-pane col" id="tab2" role="tabpanel">
            <h3 class="mt-3">Fase-2</h3>
              <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-2</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 2)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===2) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" id="{{ $file->id }}" class="fas fa-file-download" style="font-size: 35px;" href="{{ route('projects.edit', $file->id) }}"></a> 
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>

                                  
                                    @if($file->NumeroEntrega == 3)
                                        

                                          @empty($file->Comentario)
                                            <div class="row justify-content-center">
                          
                                            <div class="col text-center">
                                              <a type="button" class="btn btn-success" onclick="validar({{ $file->id }})">
                                                <i class=""> Aprobar Fase</i></a>
                                              <a type="button" class="btn btn-danger" onclick="validar2({{ $file->id }})">
                                                          <i class=""> No aprobar Fase</i></a>   
                                 
                                            </div>
                                            </div>
                                          @endempty

                                           @isset($file->Comentario)
                                            @if($file->Comentario=='Aprobado')
                                            <div class="alert alert-success text-center">
                                             <strong>Exito!</strong> Fase Aprobada.
                                          </div>
                                          @elseif($file->Comentario=='No Aprobado')
                                              <div class="alert alert-danger text-center">
                                             <strong>No Cumplio!</strong> Fase No Aprobada.
                                          </div>
                                          @else 

                                          @endif
                                          @endisset 
                                           
                            
                                    @elseif(empty($file->Comentario))  


                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center" id="{{ $file->id }}">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio"  onchange="validarExt()">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block btn-sm" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                      

                                      @else(!empty($file->Comentario))
                                     
                                      <div class="row justify-content-center">
                                        <div class="col text-center">
                                          <a type="button" class="btn" href="{{ route('downloadFile', $file->id) }}">
                                          <i class="fas fa-file-download" style="font-size: 35px;"></i></a>
                                            <p>Revision enviada para la entrega {{ $file->NumeroEntrega }} de 3</p>
                                                      
                                       </div>
                                      </div>
                                          
                                        @endif
                                    @endif  
                                  </td>
                              </tr>
                                                               
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>

                
                  
                </div>
            </div>
            
        </div>
         

         <div class="tab-pane col" id="tab3" role="tabpanel">
            <h3 class="mt-3">Fase-3</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-3</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 3)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                 
                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===3) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" id="{{ $file->id }}" class="fas fa-file-download" style="font-size: 35px;" href="{{ route('projects.edit', $file->id) }}"></a> 
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>

                                  
                                    @if($file->NumeroEntrega == 3)
                                        

                                          @empty($file->Comentario)
                                            <div class="row justify-content-center">
                          
                                            <div class="col text-center">
                                              <a type="button" class="btn btn-success" onclick="validar({{ $file->id }})">
                                                <i class=""> Aprobar Fase</i></a>
                                              <a type="button" class="btn btn-danger" onclick="validar2({{ $file->id }})">
                                                          <i class=""> No aprobar Fase</i></a>   
                                 
                                            </div>
                                            </div>
                                          @endempty

                                           @isset($file->Comentario)
                                            @if($file->Comentario=='Aprobado')
                                            <div class="alert alert-success text-center">
                                             <strong>Exito!</strong> Fase Aprobada.
                                          </div>
                                          @elseif($file->Comentario=='No Aprobado')
                                              <div class="alert alert-danger text-center">
                                             <strong>No Cumplio!</strong> Fase No Aprobada.
                                          </div>
                                          @else 

                                          @endif
                                          @endisset 
                                           
                            
                                    @elseif(empty($file->Comentario))  


                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center" id="{{ $file->id }}">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio"  onchange="validarExt()">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block btn-sm" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                      

                                      @else(!empty($file->Comentario))
                                     
                                      <div class="row justify-content-center">
                                        <div class="col text-center">
                                          <a type="button" class="btn" href="{{ route('downloadFile', $file->id) }}">
                                          <i class="fas fa-file-download" style="font-size: 35px;"></i></a>
                                            <p>Revision enviada para la entrega {{ $file->NumeroEntrega }} de 3</p>
                                                      
                                       </div>
                                      </div>
                                          
                                        @endif
                                    @endif  
                                  </td>
                              </tr>
                                                               
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>

                
                  
                </div>
            </div>
            
         </div>

         <div class="tab-pane col" id="tab4" role="tabpanel">
            <h3 class="mt-3">Fase-4</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-4</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 4)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                 
                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===4) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" id="{{ $file->id }}" class="fas fa-file-download" style="font-size: 35px;" href="{{ route('projects.edit', $file->id) }}"></a> 
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>

                                  
                                    @if($file->NumeroEntrega == 3)
                                        

                                          @empty($file->Comentario)
                                            <div class="row justify-content-center">
                          
                                            <div class="col text-center">
                                              <a type="button" class="btn btn-success" onclick="validar({{ $file->id }})">
                                                <i class=""> Aprobar Fase</i></a>
                                              <a type="button" class="btn btn-danger" onclick="validar2({{ $file->id }})">
                                                          <i class=""> No aprobar Fase</i></a>   
                                 
                                            </div>
                                            </div>
                                          @endempty

                                           @isset($file->Comentario)
                                            @if($file->Comentario=='Aprobado')
                                            <div class="alert alert-success text-center">
                                             <strong>Exito!</strong> Fase Aprobada.
                                          </div>
                                          @elseif($file->Comentario=='No Aprobado')
                                              <div class="alert alert-danger text-center">
                                             <strong>No Cumplio!</strong> Fase No Aprobada.
                                          </div>
                                          @else 

                                          @endif
                                          @endisset 
                                           
                            
                                    @elseif(empty($file->Comentario))  


                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center" id="{{ $file->id }}">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio"  onchange="validarExt()">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block btn-sm" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                      

                                      @else(!empty($file->Comentario))
                                     
                                      <div class="row justify-content-center">
                                        <div class="col text-center">
                                          <a type="button" class="btn" href="{{ route('downloadFile', $file->id) }}">
                                          <i class="fas fa-file-download" style="font-size: 35px;"></i></a>
                                            <p>Revision enviada para la entrega {{ $file->NumeroEntrega }} de 3</p>
                                                      
                                       </div>
                                      </div>
                                          
                                        @endif
                                    @endif  
                                  </td>
                              </tr>
                                                               
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>

                
                  
                </div> 
            </div>
            
         </div>

         <div class="tab-pane container col" id="tab5" role="tabpanel">
            <h3 class="mt-3">Fase-5</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                  <table class="table table-bordered table-hover table-reponsive">        
                     <thead class="table-info">
                       <th>Listado de Actividades de la Fase-5</th>
                     </thead>
                          
                     <tbody>
                        @forelse($actividades as $actividad)
                           @if($actividad->fase_id === 5)
                              <tr><td>{{$actividad->Nombre}}</td>
                            @endif                             
                         @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay Actividades Registrados</h4></td>
                         @endforelse                                  
                      </tbody>

                  </table>

                </div>

                 
                <div class="col-12 col-md-8">
                   <table class="table table-bordered table-hover table-reponsive">
                      <thead class="table-info">
                         <th>Entregas</th>
                         <th>Retroalimentar</th>
                      </thead>
      
                      <tbody>
                         @forelse($files as $file)
                            @if($file->fase_id===5) 
                              <tr>
                                  <td>
                                    <div class="row justify-content-center">
                                      <div class="col text-center">
                                          <a type="button" id="{{ $file->id }}" class="fas fa-file-download" style="font-size: 35px;" href="{{ route('projects.edit', $file->id) }}"></a> 
                                            <p>Entrega Numero {{ $file->NumeroEntrega }} de 3</p>
                                  </td>                      
                                      </div>
                                    </div>
                                  
                                      
                                  <td>

                                  
                                    @if($file->NumeroEntrega == 3)
                                        

                                          @empty($file->Comentario)
                                            <div class="row justify-content-center">
                          
                                            <div class="col text-center">
                                              <a type="button" class="btn btn-success" onclick="validarFinal({{ $file->id }})">
                                                <i class=""> Aprobar Fase</i></a>
                                              <a type="button" class="btn btn-danger" onclick="validar2({{ $file->id }})">
                                                          <i class=""> No aprobar Fase</i></a>   
                                 
                                            </div>
                                            </div>
                                          @endempty

                                           @isset($file->Comentario)
                                            @if($file->Comentario=='Aprobado')
                                            <div class="alert alert-success text-center">
                                             <strong>Exito!</strong> Fase Aprobada.
                                          </div>
                                          @elseif($file->Comentario=='No Aprobado')
                                              <div class="alert alert-danger text-center">
                                             <strong>No Cumplio!</strong> Fase No Aprobada.
                                          </div>
                                          @else 

                                          @endif
                                          @endisset 
                                           
                            
                                    @elseif(empty($file->Comentario))  


                                      <form method="POST" action="{{ route('projects.update', $file->id) }}" enctype="multipart/form-data"> @csrf {!! method_field('PUT') !!} 

                                        <div class="form-group row">
                                           <div class="col-12 text-center">
                                          <div class="row justify-content-center" id="{{ $file->id }}">
                                             <div class="col-12 text-center">
                                              <label for="fileEnvio">Elije un archivo word para enviar</label>
                                              <input type="file" name="file" class="form-control-file" id="fileEnvio"  onchange="validarExt()">
                                            </div> 
                                          </div>
                                            
                                          <div class="row justify-content-center">
                                            <div class="col-12 col-sm-7 col-md-5 mt-3">
                                              <button type="submit" class="btn btn-primary btn-block btn-sm" type="submit">Enviar</button>
                                            </div>
                                          </div>
                                         </div>

                                                                        
                                        </div>

                                      </form>
                                      

                                      @else(!empty($file->Comentario))
                                     
                                      <div class="row justify-content-center">
                                        <div class="col text-center">
                                          <a type="button" class="btn" href="{{ route('downloadFile', $file->id) }}">
                                          <i class="fas fa-file-download" style="font-size: 35px;"></i></a>
                                            <p>Revision enviada para la entrega {{ $file->NumeroEntrega }} de 3</p>
                                                      
                                       </div>
                                      </div>
                                          
                                        @endif
                                    @endif  
                                  </td>
                              </tr>
                                                               
                         @empty
                           <td style="text-align: center;"><h4>No Hay Archivos</h4></td>
                        @endforelse
                            
                      </tbody>
                    </table>

                
                  
                </div>
            </div>
            
         </div>

       </div>
       
     
  </div>
</div>

<script type="text/javascript">

    function validarFinal(id){
    var valor = id;

      Swal.fire({
        title: 'Esta Seguro?',
        text: "Al Aprobar Esta Fase, El proyecto Habrá Concluido con Exito!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Aprobarlo!'
      }).then((result) => {
        if (result.value) {

          var url = '{{ route('projectFaseFinal', ":id")  }}';
           url = url.replace(':id',valor);
          window.location.href= url ;
          Swal.fire(
            'Aprobado!',
            'La fase y el proyecto han sido Aprobados',
            'success'
          )
        }
      })
}

  function validar(id){
    var valor = id;

      Swal.fire({
        title: 'Esta Seguro?',
        text: "No podra revertir esta accion!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Aprobarlo!'
      }).then((result) => {
        if (result.value) {

          var url = '{{ route('projectFase', ":id")  }}';
           url = url.replace(':id',valor);
          window.location.href= url ;
          Swal.fire(
            'Aprobado!',
            'La Fase a sido Aprobado',
            'success'
          )
        }
      })
}


function validar2(id){

   var valor = id;

      Swal.fire({
        title: 'Esta seguro?',
        text: "No podra revertir esta accion",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, No Aprobar!'
      }).then((result) => {
        if (result.value) {

          var url = '{{ route('projectFases', ":id")  }} ';
           url = url.replace(':id',valor);
          window.location.href= url ;
          Swal.fire(
            'No Aprobado!',
            'Esta face no a sido Aprobada.',
            'success'
          )
        }
      })
}
        






  function validarExt() {
    var archivoInput = document.getElementById('fileEnvio');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.docx|.DOCX|.doc|.DOC|.Docx)$/i;

      if (!extPermitidas.exec(archivoRuta))
      {

        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text:'Elije una extencion de Word (.Docx)',

          })

       // alert('Elije una extencion de Word (.Docx)')
        archivoInput.value='';
        return false;
      }
  }

</script>

@endsection



 