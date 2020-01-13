@extends('emprendedor')

@section('empren')
<br>
        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>Fases del Proyecto</h2> <br>
                <form>
                    @csrf
                    <p>Las fases se deben subir para que el asesor pueda asignar una calificación</p>

                     <div id="accordion">
                        <div class="card">
                           @forelse ($fases as $fase )
                            @if($fase->id === 1)
                        <div class="card-header" class="card-link" data-toggle="collapse" href="#Fase1">
                             
                            <a >
                            {{$fase->NombreFase}}
                            </a>
                                                        
                              
                            </div>
                        <div id="Fase1" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento Word </h5>
                                    </div>
                            <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      
                                        <tr>
                                            <td> 
                                                <ol>
                                                     @foreach ($fase->actividades as $actividad)
                                                      @if($actividad->fase_id === 1)
                                                    <li>
                                                      {{ $actividad->Nombre }}
                                                    </li>

                                                   <i>
                                                     {{ $actividad->Descripcion}}</i>
                                                    @endif
                                                     @endforeach
                                                </ol>
                                               
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td><a href="{{ route('Enviar.show',['pro' => Crypt::encrypt($proyectos->id), 'fase' =>  Crypt::encrypt($fase->id)]) }}" class="btn btn-primary">Enviar</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div>
                        </div>
                        @endif   
                          @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay fases Registrados</h4></td>
                         @endforelse    
                      </div>

                      <div class="card">
                        @forelse ($fases as $fase )
                            @if($fase->id === 2)
                        <div class="card-header" class="collapsed card-link" data-toggle="collapse" href="#fase2">
                            
                          <a >
                            {{ $fase->NombreFase}}
                          </a>
                          
                        </div>
                        <div id="fase2" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento Word </h5>
                                    </div>
                            <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      
                                        <tr>
                                            <td> 
                                                <ol>
                                                     @foreach ($fase->actividades as $actividad)
                                                      @if($actividad->fase_id === 2)
                                                    <li>{{ $actividad->Nombre }}</li>
                                                    <i>
                                                     {{ $actividad->Descripcion}}</i>
                                                    @endif
                                                     @endforeach
                                                </ol>
                                               
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                @forelse($avances as $avance)
                                              @if($avance->Comentario === 'Aprobado')
                                                <a href="{{ route('Enviar.show',['pro' => Crypt::encrypt($proyectos->id), 'fase' =>  Crypt::encrypt($fase->id)]) }}" class="btn btn-primary">Enviar</a>
                                                @endif                             
                                                @empty
                                                  <div class="alert alert-success"><p>Debes aprobar la primera fase</p></div>
                                                @endforelse  

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div>
                        </div>
                            @endif                             
                            @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay fases Registrados</h4></td>
                        @endforelse  
                      </div>

                      <div class="card">
                         @forelse ($fases as $fase )
                            @if($fase->id === 3)
                        <div class="card-header" class="collapsed card-link" data-toggle="collapse" href="#fase3">
                          <a>
                            {{ $fase->NombreFase}}
                          </a>
                        </div>
                        <div id="fase3" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento Word </h5>
                                    </div>
                            <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      
                                        <tr>
                                            <td> 
                                                <ol>
                                                     @foreach ($fase->actividades as $actividad)
                                                      @if($actividad->fase_id === 3)
                                                    <li>{{ $actividad->Nombre }}</li>
                                                     <i>
                                                     {{ $actividad->Descripcion}}</i>
                                                    @endif
                                                     @endforeach
                                                </ol>
                                               
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td>
                                                 @forelse($avancess as $avance)
                                              @if($avance->Comentario === 'Aprobado')
                                                <a href="{{ route('Enviar.show',['pro' => Crypt::encrypt($proyectos->id), 'fase' =>  Crypt::encrypt($fase->id)]) }}" class="btn btn-primary">Enviar</a>
                                                 @endif                             
                                                @empty
                                                <div class="alert alert-success"><p>Debes aprobar la segunda fase</p>
                                                </div>
                                                @endforelse  

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div>
                        </div>
                         @endif                             
                            @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay fases Registrados</h4></td>
                        @endforelse  
                      </div>

                      <div class="card">
                        @forelse ($fases as $fase )
                            @if($fase->id === 4)
                        <div class="card-header" class="card-link" data-toggle="collapse" href="#fase4">
                          <a >
                             {{ $fase->NombreFase}}
                          </a>
                        </div>
                        <div id="fase4" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                           <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento Word </h5>
                                    </div>
                            <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      
                                        <tr>
                                            <td> 
                                                <ol>
                                                     @foreach ($fase->actividades as $actividad)
                                                      @if($actividad->fase_id === 4)
                                                    <li>{{ $actividad->Nombre }}</li>
                                                    <i>
                                                     {{ $actividad->Descripcion}}</i>
                                                    @endif
                                                     @endforeach
                                                </ol>
                                               
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                @forelse($avancesss as $avancess)
                                              @if($avancess->Comentario === 'Aprobado')
                                                <a href="{{ route('Enviar.show',['pro' => Crypt::encrypt($proyectos->id), 'fase' =>  Crypt::encrypt($fase->id)]) }}" class="btn btn-primary">Enviar</a>
                                                @endif                             
                                                @empty
                                                 <div class="alert alert-success"> 
                                                  <p>Debes aprobar la tercera fase.</p>
                                                </div>
                                                
                                                @endforelse  

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div>
                        </div>
                         @endif                             
                            @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay fases Registrados</h4></td>
                        @endforelse  
                      </div>

                      <div class="card">
                         @forelse ($fases as $fase )
                            @if($fase->id === 5)
                        <div class="card-header"  class="card-link" data-toggle="collapse" href="#fase5">
                          <a>
                             {{ $fase->NombreFase}}
                          </a>
                        </div>
                        <div id="fase5" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <div class="alert alert-warning">
                                    <h5>En un documento colocar todas las actividades que se solicitan y enviarlo en un documento Word </h5>
                                    </div>
                            <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Actividades</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      
                                        <tr>
                                            <td> 
                                                <ol>
                                                     @foreach ($fase->actividades as $actividad)
                                                      @if($actividad->fase_id === 5)
                                                    <li>{{ $actividad->Nombre }}</li>
                                                     <i>
                                                     {{ $actividad->Descripcion}}</i>
                                                    @endif
                                                     @endforeach
                                                </ol>
                                               
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                @forelse($avancessss as $avancesss)
                                              @if($avancesss->Comentario === 'Aprobado')
                                                <a href="{{ route('Enviar.show',['pro' => Crypt::encrypt($proyectos->id), 'fase' =>  Crypt::encrypt($fase->id)]) }}" class="btn btn-primary">Enviar</a>
                                                 @endif                             
                                                @empty
                                                <div class="alert alert-success"> 
                                                  <p>Debes aprobar la cuarta fase</p>
                                                </div>
                                                @endforelse 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div>
                        </div>
                        @endif                             
                            @empty
                           <td colspan="6" style="text-align: center;"><h4>No Hay fases Registrados</h4></td>
                        @endforelse 
                      </div>
                    </div> 
            </form>
        </div>
    </div>
    


@endsection