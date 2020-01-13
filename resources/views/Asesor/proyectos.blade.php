@extends('asesor')

@section('contenido')
	<div class="row">

	<main class="main col mt-4">
			<div class="row d-flex justify-content-center">
				<div class="col-12 table-responsive-md">	
				  <h4>Lista de Proyectos</h4>
				  <p>Listado de proyectos que esta asesorando</p>				
				 <table class="table table-hover table-striped">
			  		<thead>
			     		<tr>
			      			<th scope="col">Nombre de Emprendedor</th>
			      			<th scope="col">Apellidos</th>
			      			<th colspan="2" scope="col">Proyecto</th>
			      			<th> Status</th>
			      			<th scope="col">Informacion</th>
			    		</tr>
			  		</thead>
			  					
			  		<tbody>
							
					@if(!empty($asesor->asignaciones))		

			  			@forelse($asesor->asignaciones as $user)
			  				<tr>
			  					<td>{{ $user->proyecto->emprendedor->Nombre }}</td>
					  			<td>{{ $user->proyecto->emprendedor->ApellidoP }} {{ $user->proyecto->emprendedor->ApellidoM }}</td>
					  			<td>{{ $user->proyecto->NombreProd }}</td>	
		
			  			<td>
			  				<a type="button" class="btn btn-info" href="{{ route('projects.show', encrypt($user->proyecto->id)) }}"><i class="fas fa-eye"> Consultar Avances</i></a>							
			  			</td>

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
			  				<a type="button" class="btn btn-info" href="{{ route('asesor.show', $user->proyecto->emprendedor->id) }}"><i class="fas fa-eye"> Alta de Emprendedor</i></a>							
			  			</td>
			  		</tr>

			  	@empty
					<td colspan="6" style="text-align: center;"><h4>No Hay Proyectos Registrados</h4></td>
					@endforelse
				@else
					<td colspan="6" style="text-align: center;"><h4>No Hay Proyectos Registrados</h4></td>
				
				@endif
					
			  </tbody>
			</table>
	  								
	  								<nav class="d-flex justify-content-center">
										<ul class="pagination pagination-sm">
											<li class="page-item disabled">
												<span class="page-link" aria-hidden="true">&laquo; Anterior</span>
											</li>
											<li class="page-item active"><a href="#" class="page-link">1</a></li>
											<li class="page-item"><a href="#" class="page-link">2</a></li>
											<li class="page-item"><a href="#" class="page-link">3</a></li>
											<li class="page-item"><a href="#" class="page-link">4</a></li>
											<li class="page-item">
												<a href="#" class="page-link">
													<span aria-hidden="true">Siguiente &raquo; </span>
												</a>
											</li>
										</ul>
									</nav>	
	  															
										</div>

										
							</div>
						</div>

				
				</div>
			</main>

		</div>
			
@stop