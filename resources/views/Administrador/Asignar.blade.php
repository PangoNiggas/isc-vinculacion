@extends('administrador')
 
@section('admin')
	<h3 class="text-center">Asignar asesores</h3>
<div class="container-fluid">
   <form action="{{ route('asignaciones.store') }}" method="post">
		{{ csrf_field() }}
	<div class="table-responsive-md">	
		
		<table class="table table-hover table-bordered text-center">
    		<thead class="thead-light">
			    <tr>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Proyectos</th>
				      <th scope="col">Asesores</th>
				      <th scope="col">Confirmación</th>
			    </tr>
		  </thead>
		  <tbody>
				@forelse ($emprendedores as $emprendedor)
			    <tr>
					
					
						<td>{{ $emprendedor->Nombre }}</td>
						<td>{{ $emprendedor->ApellidoP }} {{ $emprendedor->ApellidoM }}</td>
						<td>
							<select name="proyecto_id" class="custom-select">
								<option disabled="disabled" selected>Proyectos</option>
									@foreach ($emprendedor->proyectos as $proyecto)
										@empty($proyecto->asignacion)
											<option value="{{$proyecto->id}}">{{ $proyecto->NombreProd }}</option>
										@endempty
									@endforeach
							</select>
							{!! $errors->first('proyecto_id', '<span class=errores>:message</span>') !!}
						</td>
						<td>
								<select name="asesor_id" class="custom-select">
									<option disabled="disabled" selected>Asesores</option>
										@foreach ($asesores as $asesor)
											<option value="{{$asesor->id}}">{{ $asesor->Nombre }} {{$asesor->ApellidoP}} {{$asesor->ApellidoM}}</option>
										@endforeach
								</select> 
							</td>
					  <td>
						<a href=# class="btn-asignar"><i class="fas fa-check-circle" style="font-size: 35px; color: green;"></i></a>
						
					 </td>
				</tr>
				@empty
					<td colspan="6" style="text-align: center;"><h4>No Hay Emprendedores Registrados</h4></td>
				@endforelse
		   </tbody>
		</table>
		{!! $emprendedores->links("pagination::bootstrap-4") !!}
	  </div>
	</form>
</div>

@endsection