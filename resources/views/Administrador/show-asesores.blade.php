@extends('administrador')
 
@section('admin')

	<div class="container">
		<form class="form-inline mb-4 pt-4">
				{{ csrf_field() }}
					<input name="Nombre" class="form-control mr-sm-2" type="search" placeholder="Buscar asesor" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			 </form>
	</div>

  <div class="card bg-light text-dark">
    <div class="card-body">
		<div class="container-fluid">
			<div class="table-responsive-md">	
			<table class="table table-hover table-bordered">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Nombre de Asesor</th>
			      <th scope="col">Apellidos</th>
			      <th scope="col">Direccion</th>
			      <th scope="col">Proyectos</th>
			      <th scope="col">Funciones</th>
			    </tr>
			  </thead>
			  <tbody>

			  	@forelse($asesores as $asesor)

			  		<tr>
			  			<td>{{ $asesor->Nombre }}</td>
			  			<td>{{ $asesor->ApellidoP }} {{ $asesor->ApellidoM }}</td>
			  			<td>{{ $asesor->Direccion }}</td>
			  			<td>
									<select name="" class="custom-select">
										<option disabled="disabled" selected>Proyectos</option>
											@foreach ($asesor->asignaciones as $asignacion)
												<option value="">{{ $asignacion->proyecto->NombreProd }}</option>
											@endforeach
									</select>
							</td>
			  			<td><a href="{{route('asesores.edit',$asesor->id)}}"> <i class="fas fa-pen-square" style="font-size: 35px;"></i></a>
							{{-- <button type="button" class="btn btn-danger mb-2" data-toggle="modal" data-target="#myModal{{$asesor->id}}"><i class="fas fa-trash-alt"></i></button>
							 --}}
							 <form style="display: inline;" method="POST" action="{{ route('asesores.destroy', $asesor->id) }}">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<a href=# class="btn-delete"><i class="fas fa-trash-alt" style="font-size: 35px; color: red;"></i></a>
							
							</form>
							
			  			</td>
			  		</tr>
					{{-- @include('Administrador.eliminar') --}}
					{{-- @include('Administrador.Editar') --}}
			  	@empty
					<td colspan="6" style="text-align: center;"><h4>No Hay Asesores Registrados</h4></td>
					@endforelse
					
			  </tbody>
			</table>
		</div>
	</div>
   </div>

   <div class="card-footer text-muted">
	    <div class="container">
			    	<div class="row justify-content-center">
							{!! $asesores->links("pagination::bootstrap-4") !!}
						</div>
		</div>

		<div class="container">
      <div class="row justify-content-md-center">
        <div class="col-4 mb-5">
            
            <a href="{{ route('downloadasesor')}}">
                <span class="text-primary h5">Descargar Todos Los Asesores</span> 
            </a>
            
          </div>
       
      </div>
    </div>
   </div>
</div>


@endsection


