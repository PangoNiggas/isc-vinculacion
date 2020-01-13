@extends('emprendedor')

@section('empren')
<br>
<br>
<br>
<div class="card">
  <div class="card-header"><h5>Estado del Proyecto</h5></div>
  <div class="card-body">
    <div class="table-responsive-md">  
      {!! csrf_field() !!} 
      <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#fase1">Resumen Ejecutivo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#fase2">Mercado </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#fase3">Tecnico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#fase4">Diseño Organizacinal, Marco Legal y Fiscal  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#fase5">Estudio Financiero</a>
          </li>
        </ul>

       

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="fase1" class="container tab-pane active"><br>
            
            <div class="col-12 col-md-12">
              <table class="table table-bordered table-reponsive mt-5">
                <thead class="thead-light">
                  <th>Nombre del proyecto</th>
                  <th>Nombre de la fase</th>
                </thead>

                <tbody>
                  <tr>
                   
                  <td>{{ $proyectos->NombreProd }}</td>
                  <td>
                    Resumen Ejecutivo
                  </td>
                  
                  </tr>
                                 
                  
                </tbody>
              </table>
            </div>
            <div class="col-12 col-md-12">
            <table class="table table-hover table-bordered">
            
            <thead class="thead-light">
                <tr>
                    <th scope="col">Primera Retroalimentación</th>
                    <th scope="col">Segunda Retroalimentación</th>
                    <th scope="col">Estado</th>

                </tr>
            </thead>


            <tbody>
             
              <tr>
                
                <td>
                  @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 1)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===1)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit',  Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                  @endif 
                  @endif 
                  @empty

                  @endforelse    
                </td>

                <td>
                   @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 1)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===2)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                    @endif 
                     @endif 
                     @empty
                  <p>No tienes ninguna archivo por el momento</p>
                  @endforelse    
                </td>

                <td>
                    @forelse($archivos as $archivo)
                      @if ($archivo->fase_id === 1)
                        @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          @if($archivo->Comentario ==='Aprobado')
                           <span class="badge badge-pill badge-success">{{$archivo->Comentario}} </span>
                           @else
                           <h5><span class="badge badge-danger">{{$archivo->Comentario}} </span></h5>
                          @endif
                        @endif
                        
                        @endif
                    @empty
                     
                    @endforelse    
                </td>
                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
          
          <div id="fase2" class="container tab-pane fade"><br>
            <div class="col-12 col-md-12">
              <table class="table table-bordered table-reponsive mt-5">
                <thead class="thead-light">
                  <th>Nombre del proyecto</th>
                  <th>Nombre de la fase</th>
                </thead>

                <tbody>
                  <tr>
                   
                  <td>{{ $proyectos->NombreProd }}</td>

                
                   
                  <td>
                    Mercado 
                  </td>
              
                   

                 
                  
                  </tr>
                                 
                  
                </tbody>
              </table>
            </div>
            <div class="col-12 col-md-12">
            <table class="table table-hover table-bordered">
            
            <thead class="thead-light">
                <tr>
                    <th scope="col">Primera Retroalimentación</th>
                    <th scope="col">Segunda Retroalimentación</th>
                    <th scope="col">Estado</th>

                </tr>
            </thead>


            <tbody>
             
              <tr>
                
                <td>
                  @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 2)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===1)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                  @endif 
                  @endif 
                  @empty
                  @endforelse    
                </td>

                <td>
                   @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 2)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===2)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                    @endif 
                     @endif 
                     @empty
                  @endforelse    
                </td>

                <td>
                    @forelse($archivos as $archivo)
                      @if ($archivo->fase_id === 2)
                        @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                        @if($archivo->Comentario ==='Aprobado')
                           <span class="badge badge-pill badge-success">{{$archivo->Comentario}} </span>
                           @else
                           <h5><span class="badge badge-danger">{{$archivo->Comentario}} </span></h5>
                          @endif
                        @endif
                        @if( (empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          <p> En espera </p>
                         
                        @endif
                      @endif
                    @empty
                    @endforelse    
                </td>
                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
          
  
          <div id="fase3" class="container tab-pane fade"><br>
            <div class="col-12 col-md-12">
              <table class="table table-bordered table-reponsive mt-5">
                <thead class="thead-light">
                  <th>Nombre del proyecto</th>
                  <th>Nombre de la fase</th>
                </thead>

                <tbody>
                  <tr>
                   
                  <td>{{ $proyectos->NombreProd }}</td>

                
                   
                  <td>
                   Tecnico
                  </td>
              
                   

                 
                  
                  </tr>
                                 
                  
                </tbody>
              </table>
            </div>
            <div class="col-12 col-md-12">
            <table class="table table-hover table-bordered">
            
            <thead class="thead-light">
                <tr>
                  <th scope="col">Primera Retroalimentación</th>
                  <th scope="col">Segunda Retroalimentación</th>
                  <th scope="col">Estado</th>

                </tr>
            </thead>


            <tbody>
             
              <tr>
                
                <td>
                  @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 3)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===1)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit',Crypt::encrypt( $archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                  @endif 
                  @endif 
                  @empty
                   
                  @endforelse    
                </td>

                <td>
                   @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 3)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===2)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                    @endif 
                     @endif 
                     @empty
                
                  @endforelse    
                </td>

                <td>
                    @forelse($archivos as $archivo)
                      @if ($archivo->fase_id === 3)
                        @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          @if($archivo->Comentario ==='Aprobado')
                           <span class="badge badge-pill badge-success">{{$archivo->Comentario}} </span>
                           @else
                           <h5><span class="badge badge-danger">{{$archivo->Comentario}} </span></h5>
                          @endif
                        @endif
                        @if( (empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          <p> En espera </p>
                         
                        @endif
                      @endif
                    @empty
                    
                    @endforelse    
                </td>
                
              </tr>
            </tbody>
          </table>
        </div>
          </div>
          
          <div id="fase4" class="container tab-pane fade"><br>
            <div class="col-12 col-md-12">
              <table class="table table-bordered table-reponsive mt-5">
                <thead class="thead-light">
                  <th>Nombre del proyecto</th>
                  <th>Nombre de la fase</th>
                </thead>

                <tbody>
                  <tr>
                   
                  <td>{{ $proyectos->NombreProd }}</td>

                
                   
                  <td>
                    Diseño Organizacinal, Marco Legal y Fiscal
                  </td>
              
                   

                 
                  
                  </tr>
                                 
                  
                </tbody>
              </table>
            </div>
            <div class="col-12 col-md-12">
            <table class="table table-hover table-bordered">
            
            <thead class="thead-light">
                <tr>
                  <th scope="col">Primera Retroalimentación</th>
                  <th scope="col">Segunda Retroalimentación</th>
                  <th scope="col">Estado</th>

                </tr>
            </thead>


            <tbody>
             
              <tr>
                
                <td>
                  @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 4)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===1)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                  @endif 
                  @endif 
                  @empty
                 
                  @endforelse    
                </td>

                <td>
                   @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 4)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===2)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                    @endif 
                     @endif 
                     @empty
                 
                  @endforelse    
                </td>

                <td>
                    @forelse($archivos as $archivo)
                      @if ($archivo->fase_id === 4)
                        @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          @if($archivo->Comentario ==='Aprobado')
                           <span class="badge badge-pill badge-success">{{$archivo->Comentario}} </span>
                           @else
                           <h5><span class="badge badge-danger">{{$archivo->Comentario}} </span></h5>
                          @endif
                        @endif
                        @if( (empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          <p> En espera </p>
                         
                        @endif
                      @endif
                    @empty
                     
                    @endforelse    
                </td>
                
              </tr>
            </tbody>
          </table>
        </div>
     
          </div>
          
          <div id="fase5" class="container tab-pane fade"><br>
            <div class="col-12 col-md-12">
              <table class="table table-bordered table-reponsive mt-5">
                <thead class="thead-light">
                  <th>Nombre del proyecto</th>
                  <th>Nombre de la fase</th>
                </thead>

                <tbody>
                  <tr>
                   
                  <td>{{ $proyectos->NombreProd }}</td>

                
                   
                  <td>
                    Estudio Financiero 
                  </td>
              
                   

                 
                  
                  </tr>
                                 
                  
                </tbody>
              </table>
            </div>
            <div class="col-12 col-md-12">
            <table class="table table-hover table-bordered">
            
            <thead class="thead-light">
                <tr>
                  <th scope="col">Primera Retroalimentación</th>
                  <th scope="col">Segunda Retroalimentación</th>
                  <th scope="col">Estado</th>

                </tr>
            </thead>


            <tbody>
             
              <tr>
                
                <td>
                  @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 5)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===1)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                  @endif 
                  @endif 
                  @empty
                  
                  @endforelse    
                </td>

                <td>
                   @forelse($archivos as $archivo)
                  @if ($archivo->fase_id === 5)
                  @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===2)))
                        <a type="button" class="btn btn-primary" href="{{ route('Estado.edit', Crypt::encrypt($archivo->id )) }}">
                        <i class="fas fa-file-download"> Descargar Archivo</i></a>
                    @endif 
                     @endif 
                     @empty
                    
                  @endforelse    
                </td>

                <td>
                    @forelse($archivos as $archivo)
                      @if ($archivo->fase_id === 5)
                        @if( (!empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          @if($archivo->Comentario ==='Aprobado')
                           <span class="badge badge-pill badge-success">{{$archivo->Comentario}} </span>
                           @else
                           <h5><span class="badge badge-danger">{{$archivo->Comentario}} </span></h5>
                          @endif
                        @endif
                        @if( (empty($archivo->Comentario) && ($archivo->NumeroEntrega===3)))
                          <p> En espera </p>
                         
                        @endif
                      @endif
                    @empty
                     
                    @endforelse    
                </td>
                
              </tr>
            </tbody>
          </table>
        </div>
     
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection