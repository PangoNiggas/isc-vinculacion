@extends('administrador')
 
@section('admin')

<div class="container-fluid borde mt-3">
	 <form class="needs-validation" method="POST" action="{{ route('asesores.store') }}" novalidate>
		{{ csrf_field() }}
		<div class="row justify-content-center">
				<div class="col borde1 p-3"><h3 id="h3">Registro de Asesor</h3></div>
			</div>
			@if (session()->has('no'))
			<div class="alert alert-danger text-center mt-2">{{ session('no')}}</div>
			@endif
			<div class="form-row justify-content-center">
			    <div class="form-group col-10">
				      <label for="inputName1">Nombre Completo</label>
					  <input type="text" name="Nombre" class="form-control" id="inputName1" value="{{ old('Nombre') }}">
					  {!! $errors->first('Nombre', '<span class=errores>:message</span>') !!}
			    </div>
			</div>

			<div class="form-row justify-content-md-center">
			    <div class="form-group col-md-5">
				      <label for="inputName1">Apellido Paterno</label>
					  <input type="text" name="ApellidoP" class="form-control" id="inputName1" value="{{ old('ApellidoP') }}">
					  {!! $errors->first('ApellidoP', '<span class=errores>:message</span>') !!}
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputApellido">Apellido Materno</label>
					  <input type="text" name="ApellidoM" class="form-control" id="inputApellido" value="{{ old('ApellidoM') }}">
					  {!! $errors->first('ApellidoM', '<span class=errores>:message</span>') !!}
			    </div>
			</div>

			<div class="form-row justify-content-md-center">
			    <div class="form-group col-md-5">
				      <label for="inputDireccion">Dirección</label>
					  <input type="text" name="Direccion" class="form-control" id="inputDireccion" value="{{ old('Direccion') }}">
					  {!! $errors->first('Direccion', '<span class=errores>:message</span>') !!}
			    </div>
				<div class="form-group col-md-5">
					<label for="inputColonia">Colonia</label>
					<input type="text" name="Colonia" class="form-control" id="inputColonia" value="{{ old('Colonia') }}">
					{!! $errors->first('Colonia', '<span class=errores>:message</span>') !!}
			  </div>
			</div>

		    <div class="form-row justify-content-md-center">
				<div class="form-group col-md-5">
					<label for="inputCiudad">Ciudad</label>
					<input type="text" name="Ciudad" class="form-control" id="inputCiudad" value="{{ old('Ciudad') }}">
					{!! $errors->first('Ciudad', '<span class=errores>:message</span>') !!}
				</div>

			    <div class="form-group col-md-5">
			      <label for="inputEstado">Entidad Federativa</label>
			      <select id="inputEstado" name="Estado" class="form-control">
					<option selected>Seleccione...</option>
					<option value="Aguascalientes" {{old('Estado') == 'Aguascalientes' ? 'selected' : ''}}>Aguascalientes</option>
					 <option value="Baja California" {{old('Estado') == 'Baja California' ? 'selected' : ''}}>Baja California</option>
					 <option value="Baja California Sur" {{old('Estado') == 'Baja California Sur' ? 'selected' : ''}}>Baja California Sur</option>
					 <option value="Campeche" {{old('Estado') == 'Campeche' ? 'selected' : ''}}>Campeche</option>
					 <option value="Coahuila" {{old('Estado') == 'Coahuila' ? 'selected' : ''}}>Coahuila</option>
					 <option value="Colima" {{old('Estado') == 'Colima' ? 'selected' : ''}}>Colima</option>
					 <option value="Chiapas" {{old('Estado') == 'Chiapas' ? 'selected' : ''}}>Chiapas</option>
					 <option value="Chihuahua" {{old('Estado') == 'Chihuahua' ? 'selected' : ''}}>Chihuahua</option>
					 <option value="Durango" {{old('Estado') == 'Durango' ? 'selected' : ''}}>Durango</option>
					 <option value="Guanajuato" {{old('Estado') == 'Guanajuato' ? 'selected' : ''}}>Guanajuato</option>
					 <option value="Guerrero" {{old('Estado') == 'Guerrero' ? 'selected' : ''}}>Guerrero</option>
					 <option value="Hidalgo" {{old('Estado') == 'Hidalgo' ? 'selected' : ''}}>Hidalgo</option>
					 <option value="Jalisco" {{old('Estado') == 'Jalisco' ? 'selected' : ''}}>Jalisco</option>
					 <option value="Mexico" {{old('Estado') == 'Mexico' ? 'selected' : ''}}>Mexico</option>
					 <option value="Michoacan" {{old('Estado') == 'Michoacan' ? 'selected' : ''}}>Michoacan</option>
					 <option value="Morelos" {{old('Estado') == 'Morelos' ? 'selected' : ''}}>Morelos</option>
					 <option value="Nayarit" {{old('Estado') == 'Nayarit' ? 'selected' : ''}}>Nayarit</option>
					 <option value="Nuevo Leon" {{old('Estado') == 'Nuevo Leon' ? 'selected' : ''}}>Nuevo Leon</option>
					 <option value="Oaxaca" {{old('Estado') == 'Oaxaca' ? 'selected' : ''}}>Oaxaca</option>
					 <option value="Puebla" {{old('Estado') == 'Puebla' ? 'selected' : ''}}>Puebla</option>
					 <option value="Queretaro" {{old('Estado') == 'Queretaro' ? 'selected' : ''}}>Queretaro</option>
					 <option value="Quintanaro" {{old('Estado') == 'Quintanaro' ? 'selected' : ''}}>Quintanaro</option>
					 <option value="San Luis Potosi" {{old('Estado') == 'San Luis Potosi' ? 'selected' : ''}}>San Luis Potosi</option>
					 <option value="Sinaloa" {{old('Estado') == 'Sinaloa' ? 'selected' : ''}}>Sinaloa</option>
					 <option value="Sonora" {{old('Estado') == 'Sonora' ? 'selected' : ''}}>Sonora</option>
					 <option value="Tabasco" {{old('Estado') == 'Tabasco' ? 'selected' : ''}}>Tabasco</option>
					 <option value="Tamaulipas" {{old('Estado') == 'Tamaulipas' ? 'selected' : ''}}>Tamaulipas</option>
					 <option value="Tlaxcala" {{old('Estado') == 'Tlaxcala' ? 'selected' : ''}}>Tlaxcala</option>
					 <option value="Veracruz" {{old('Estado') == 'Veracruz' ? 'selected' : ''}}>Veracruz</option>
					 <option value="Yucatan" {{old('Estado') == 'Yucatan' ? 'selected' : ''}}>Yucatan</option>
					 <option value="Zacatecas" {{old('Estado') == 'Zacatecas' ? 'selected' : ''}}>Zacatecas</option>
				  </select>
				  {!! $errors->first('Estado', '<span class=errores>:message</span>') !!}
			    </div>
			   
		  </div>

		  <div class="form-row justify-content-md-center">
		    <div class="form-group col-md-5">
			      <label for="inputCP">Codigo Postal</label>
				  <input type="text" name="CP" class="form-control" id="inputCP" value="{{ old('CP') }}">
				  {!! $errors->first('CP', '<span class=errores>:message</span>') !!}
		    </div>
		    <div class="form-group col-md-5">
			      <label for="inputRFC">RFC</label>
				  <input type="text" name="RFC" class="form-control" id="inputRFC" value="{{ old('RFC') }}">
				  {!! $errors->first('RFC', '<span class=errores>:message</span>') !!}
		    </div>
		  </div>

		  <div class="form-row justify-content-md-center">
			     <div class="form-group col-md-5">
			      	<label for="inputEscola">Escolaridad</label>
				      <select id="inputEscola" name="Escolaridad" class="form-control">
						<option selected>Seleccione...</option>
						<option value="Primaria" {{old('Escolaridad') == 'Primaria' ? 'selected' : ''}}>Primaria</option>
						<option value="Secundaria" {{old('Escolaridad') == 'Secundaria' ? 'selected' : ''}}>Secundaria</option>
						<option value="Preparatoria/Bachillerato" {{old('Escolaridad') == 'Preparatoria/Bachillerato' ? 'selected' : ''}}>Preparatoria/Bachillerato</option>
						<option value="Carrera Tecnica" {{old('Escolaridad') == 'Carrera Tecnica' ? 'selected' : ''}}>Carrera Tecnica</option>
						<option value="Licenciatura" {{old('Escolaridad') == 'Licenciatura' ? 'selected' : ''}}>Licenciatura</option>
						<option value="Maestria" {{old('Escolaridad') == 'Maestria' ? 'selected' : ''}}>Maestria</option>
						<option value="Doctorado" {{old('Escolaridad') == 'Doctorado' ? 'selected' : ''}}>Doctorado</option>
				  </select>
					  {!! $errors->first('Escolaridad', '<span class=errores>:message</span>') !!}
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputCURP">CURP</label>
					  <input type="text" name="CURP" class="form-control" id="inputCURP" value="{{ old('CURP') }}">
					  {!! $errors->first('CURP', '<span class=errores>:message</span>') !!}
			    </div>
		  </div>

		  <div class="form-row justify-content-md-center">
			    <div class="form-group col-md-5">
				      <label for="inputTel">Telefono</label>
					  <input type="text" name="Telefono" class="form-control" id="inputTel" value="{{ old('Telefono') }}" placeholder="Minimo 10 Caracteres">
					  {!! $errors->first('Telefono', '<span class=errores>:message</span>') !!}
			    </div>
			    <div class="form-group col-md-5">
				      <label for="inputFecha">Fecha De Nacimiento</label>
					  <input type="date" name="FechaNacimiento" class="form-control" id="inputFecha" value="{{ old('FechaNacimiento') }}">
					  {!! $errors->first('FechaNacimiento', '<span class=errores>:message</span>') !!}
			    </div>
		  </div>

		  <div class="form-row justify-content-md-center">
			  	<div class="form-group col-md-5">
								<label for="inputCivil">Estado civil</label>
								<select id="inputCivil" name="EstadoCivil" class="form-control">
									<option selected>Seleccione...</option>
									<option value="Soltero(a)" {{old('EstadoCivil') == 'Soltero(a)' ? 'selected' : ''}}>Soltero(a)</option>
									<option value="Casado(a)" {{old('EstadoCivil') == 'Casado(a)' ? 'selected' : ''}}>Casado(a)</option>
									<option value="Divorsiado(a)" {{old('EstadoCivil') == 'Divorsiado(a)' ? 'selected' : ''}}>Divorsiado(a)</option>
									<option value="Viudo(a)" {{old('EstadoCivil') == 'Viudo(a)' ? 'selected' : ''}}>Viudo(a)</option>
									<option value="Unión libre" {{old('EstadoCivil') == 'Unión libre' ? 'selected' : ''}}>Unión libre</option>
									<option value="Separado(a)" {{old('EstadoCivil') == 'Separado(a)' ? 'selected' : ''}}>Separado(a)</option>
								</select>
								{!! $errors->first('EstadoCivil', '<span class=errores>:message</span>') !!}
			  </div>
			  	<div class="form-group col-md-5">
				  	<label for="inputEmail">Correo Electronico</label>
					<input type="email" name="Correo" class="form-control" id="inputEmail">
					{!! $errors->first('Correo', '<span class=errores>:message</span>') !!}
			  </div>
		  </div>

		  <div class="form-row justify-content-md-center mt">
		 	 <div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="customRadioInline1" name="Sexo" value="Femenino" @if(old('Sexo')=="Femenino") checked @endif class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline1">Femenino</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="customRadioInline2" name="Sexo" value="Masculino" @if(old('Sexo')=="Masculino") checked @endif class="custom-control-input">
				  <label class="custom-control-label" for="customRadioInline2">Masculino</label>
			</div>
		 </div>

		  <div class="form-row justify-content-md-center mt-4">
		    <div class="form-group col-md-5">
			      <label for="inputContra1">Contraseña</label>
				  <input type="password" name="Contraseña" class="form-control" id="inputContra1">
				  {!! $errors->first('Contraseña', '<span class=errores>:message</span>') !!}
		    </div>
		    <div class="form-group col-md-5">
			      <label for="inputContra2">Confirmar Contraseña</label>
				  <input type="password" name="Contraseña1" class="form-control" id="inputContra2">
				  {!! $errors->first('Contraseña', '<span class=errores>:message</span>') !!}
		    </div>
		  </div>
		  <div class="form-row justify-content-md-center">
		  		  <button type="submit" class="btn btn-primary">Registrar</button>
		  </div>
			
	 </form>
</div>

@endsection
