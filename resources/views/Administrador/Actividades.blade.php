@extends('administrador')
 
@section('admin')
<div class="container">
  <h2>Panel De Actividades</h2>
  <br>
  
</div>

<div class="card border-secondary">
  <div class="card-header">Agregar Actividades</div>
  <div class="card-body text-secondary">	
   		<div class="container">
   			<form method="POST" action="{{ route('actividades.store') }}">
   			{{ csrf_field() }}
   			<div class="row align-items-center">
   				<div class="col-xs-3">
					<div class="input-group">
						 <select name="fase_id" class="custom-select">
							<option disabled="disabled" selected>Seleccione Fase</option>
							@foreach($fases as $fase)
						   
						   <option value="{{ $fase->id }}">{{ $fase->NombreFase }}</option>

						   @endforeach
						 </select>
						
					</div>
					{!! $errors->first('fase_id', '<span class=errores>:message</span>') !!}
   				</div>
   				
   				<div class="col-xs-4">
   					<div class="input-group input-group">
					    <div class="input-group-prepend">
					       <span class="input-group-text">Actividad</span>
					    </div>
							<input type="text" name="Nombre" class="form-control">
							
					</div>
					{!! $errors->first('Nombre', '<span class=errores>:message</span>') !!}
   				</div>

   				<div class="col-xs-5">
   					
					<div class="input-group">
					  <div class="input-group-prepend">
					    <span class="input-group-text">Descripcion</span>
					  </div>
					  <textarea class="form-control" name="Descripcion" aria-label="With textarea"></textarea>
					</div>

   				</div>
			
   			</div>
   			
   			<div class="row justify-content-center text-center mt-3">
   				<div class="col-xs-4">
   					<button type="submit" class="btn btn-success">Agregar</button>
   				</div>
   			</div>
   		</form>
   		</div>
   
  </div>
</div>


<div class="card bg-light mb-5 mt-5 border-secondary">
  <div class="card-header bg-info">Consultar Actividades</div>
  <div class="card-body">

<div class="container-fluid">
		<div class="table-responsive-md">	
		<table class="table table-hover table-sm">
		  <thead >
		    <tr>
		      <th scope="col">Nombre de Fase</th>
		      <th scope="col">Actividad</th>
		      {{-- <th scope="col">Funciones</th> --}}
		    </tr>
		  </thead>
		  <tbody>
					@forelse ($fases as $fase)

					<tr>
							<td>{{$fase->NombreFase}}</td>

							<td>
								
										@foreach ($fase->actividades as $actividad)
												{{ $actividad->Nombre }}
												<button type="button" class="btn btn-primary " style="float: right;" data-toggle="modal" data-target="#Update{{$actividad->id}}"><i class="fas fa-pen-square"></i></button>
												<button type="button" class="btn btn-danger" style="float: right;" data-toggle="modal" data-target="#Delete{{$actividad->id}}"><i class="fas fa-trash-alt"></i></button>
												<hr>
												@include('Administrador.EditarAct')
												@include('Administrador.EliminarAct')	
												@endforeach
								
							</td>
				</tr>
					@empty
					<td colspan="3" style="text-align: center;"><h4>No Hay Fases Registradas</h4></td>
					@endforelse
		    </tbody>
	   	 </table>
    	</div>
    </div>
  </div>
</div>

@endsection

