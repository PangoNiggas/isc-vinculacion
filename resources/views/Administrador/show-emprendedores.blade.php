@extends('administrador')
 
@section('admin')
<div class="container">
	<form class="form-inline mb-4 pt-4" method="GET" action="{{route('emprendedores.index')}}">
			{!! csrf_field() !!}
	      <input name="Nombre" class="form-control mr-sm-2" type="search" placeholder="Buscar emprendedor" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
   	</form>
</div>
	


<div class="card">
  <div class="card-header bg-secondary text-white"><h5>Consultar Emprendedor</h5></div>
  <div class="card-body">
  	
<div class="table-responsive-md">	
		<table class="table table-hover table-bordered">
    		<thead class="thead-light">
			    <tr>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Proyectos</th>
				      <th scope="col">Telefono</th>
				      <th scope="col">RFC</th>
				      <th scope="col">CURP</th>
				      <th scope="col">Funciones</th>
			    </tr>
		  </thead>
		  <tbody>
					@forelse ($emprendedores as $emprendedor)

					<tr>
				      <td>{{ $emprendedor->Nombre}}</td>
				      <td>{{ $emprendedor->ApellidoP}} {{ $emprendedor->ApellidoM}}</td>
				      <td>
									<select name="" class="custom-select">
											<option disabled="disabled" selected>Proyectos</option>
												@foreach ($emprendedor->proyectos as $proyecto)
													<option value="">{{ $proyecto->NombreProd }}</option>
												@endforeach
									</select>
							</td>
				      <td>{{ $emprendedor->TelefonoCel}}</td>
				      <td>{{ $emprendedor->RFC}} {{ $emprendedor->RFCM}}</td>
				      <td>{{ $emprendedor->CURP }}</td>
			      	<td>
						<form style="display: inline;" method="POST" action="{{ route('emprendedores.destroy', $emprendedor->id) }}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<a href=# class="btn-delet"><i class="fas fa-trash-alt" style="font-size: 35px; color: red;"></i></a>
						
						</form>
						<a href="{{ route('emprendedores.show', $emprendedor->id) }}">
								<i class="fas fa-file-download" style="font-size: 35px;"></i>
							</a>
					  </td>
			    </tr>
	
					@empty
					<td colspan="8" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
					@endforelse
			    
		    </tbody>
			</table>
			{!! $emprendedores->links("pagination::bootstrap-4") !!}
		</div>

	</div>
	
	<div class="container">
		<div class="row justify-content-md-center">
		  <div class="col-4 mb-5">
			  
			<a href="{{ route('emprendedores.create')}}">
				<span class="text-primary h5">Descargar Todos Los Emprendedores</span> 
			</a>
			  
			</div>
		 
		</div>
	  </div>
	

</div>
@endsection