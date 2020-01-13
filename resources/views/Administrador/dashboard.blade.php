 @extends('administrador')
 
 @section('admin')

	<div class="espacio"></div>
 	<div class="container" id="mifuente">
 		
 		<div class="row">

 			<div class="col-sm-8">

 				<h3>Bienvenido al Panel del Administrador</h3>
 					  
			</div>
				
			<div class="col-sm-2">
				
					<img src="{{ asset('img/logo.jpg') }}" class="rounded" alt="Cinque Terre" width="100" height="100"> 
 			</div>
 			<div class="col-sm-2">

				
					<img src="{{ asset('img/TecNM.png') }}" class="rounded" alt="Cinque Terre" width="150" height="100"> 
 			</div>
 		</div>
	</div>

	<div class="container mt-5">
		
		<div class="row justify-content-around">
 			<div class="col-sm-4 list-group list-group-flush">
 				<ul>
 					<li class="list-group-item list-group-item-primary">Preincubadora para planes de negocio</li>
					<li class="list-group-item list-group-item-danger">Esta plataforma esta en su version Beta</li>
					<li class="list-group-item">Si elimina algun emprendedor, tambien se eliminaran los proyectos que le pertenezcan</li>
					<li class="list-group-item">Si borra algun asesor, los proyectos pueden volver a asignarse a otro asesor aunque el proyecto aparezca con el estado "Cursando"</li> 
					<li class="list-group-item">Si hay algun error favor de reportar con Exdraz_Lpz&#64;outlook.com</li>
 				</ul>
 			</div>
 			<div class="col-sm-4">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="img/admin.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text">"Si tienes suficiente información para hacer un plan de negocio de tu idea es que ya es demasiado tarde"<blockquote class="blockquote text-center"> <cite title="Bill Gates">Bill Gates</cite></p></blockquote>
						</div>
				</div>
			 </div>
			 <div class="col-sm-4">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="img/admin2.jpg" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">"El valor de la innovación no está en evitar que te copien, sino en conseguir que todos te quieran copiar"<blockquote class="blockquote text-center"> <cite title="Bill Gates">Enrique Dans</cite></p></blockquote>
							</div>
					</div>
				 </div>
 		</div>
	</div>
 @endsection
