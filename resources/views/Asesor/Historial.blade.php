@extends('asesor')
 
@section('contenido')
<div class="espacio1"></div>
<div class="container-fluid rounded" style="background-color: #f8f9f9;">
    
    <div class="container">
      
      <div class="row align-items-center">
        
        <div class="col-4">
          
          

        </div>


      

      </div>
    </div>
  
<div class="container-fluid mt-5">
  <h4>Historial de Proyectos</h4>
  <div class="table-responsive-md"> 
    <table class="table table-hover table-striped">
        <thead class="">
          <tr>
              <th scope="col">Numero</th>
              <th scope="col">Proyecto</th>
              <th scope="col">Actividad</th>
              <th scope="col">Telefono</th>
              <th scope="col">Correo</th>
              <th scope="col">Status</th>
              <th scope="col">Funciones</th>
              
          </tr>
      </thead>
      <tbody>
        @forelse ($asesor->asignaciones as $user)
        <tr>
            <td>{{ $user->proyecto->id}}</td>
            <td>{{ $user->proyecto->NombreProd }}</td>
            <td>{{ $user->proyecto->Actividad }}</td>
            <td>{{ $user->proyecto->Telefonoemp }}</td>
            <td>{{ $user->proyecto->CorreoEmp }}</td>
            <td>
              @if($user->proyecto->Estado=='Aprobado')
              <span class="badge badge-pill badge-success">{{ $user->proyecto->Estado }}</span>
              @elseif($user->proyecto->Estado=='No Aprobado')
              <span class="badge badge-pill badge-danger">{{ $user->proyecto->Estado }}</span>
              @else
              <span class="badge badge-pill badge-info">Cursando</span>
              @endif
            </td>
            


            <td>
               
        
                <a href="{{ route('historialProject', $user->proyecto->id) }}">
                    <i class="fas fa-file-download" style="font-size: 35px;"></i>
                </a>
            </td>
        </tr>
        @empty
        <td colspan="8" style="text-align: center;"><h4>No hay proyectos Registrados</h4></td>
        @endforelse
          
       </tbody>
    </table>
    
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-4 mb-5">
            
            <a href="{{ route('historialProjects',$asesor->id)}}">
                <span class="text-danger h5">Descargar Todos los Proyectos en PDF</span> 
            </a>
            
          </div>
       
       
          
      </div>
    </div>
  </div>
</div>

</div>

@endsection
