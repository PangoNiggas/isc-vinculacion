@extends('asesor')
 
@section('contenido')

<div class="container">
    <div class="row justify-content-center mb-2" style="background: #e8e8e8">
		<div class="row">
			<div class=" col-md-12">
				<h4>{{ $asesor->Nombre }}</h4>				
			</div>
		</div>

	</div>
	

    <div class="form-row justify-content-center">
        <div class="form-group col-md-10">
            <label for="inputName1">Nombre Completo</label>
            <input disabled="true" type="text" name="Nombre" class="form-control" id="inputName1" value="{{$asesor->Nombre }}">
        </div>
    </div>
    
    <div class="form-row justify-content-md-center">
        <div class="form-group col-md-5">
        	<label for="inputName1">Apellido Paterno</label>
            <input disabled="true" type="text" name="ApellidoP" class="form-control" id="inputName1" value="{{ $asesor->ApellidoP }}">
         </div>
           
         <div class="form-group col-md-5">
         	<label for="inputApellido">Apellido Materno</label>
          	<input disabled="true" type="text" name="ApellidoM" class="form-control" id="inputApellido" value="{{ $asesor->ApellidoM }}">
         </div>
    </div>
    
    <div class="form-row justify-content-md-center">
        <div class="form-group col-md-5">
        	<label for="inputDireccion">Dirección</label>
        	<input disabled="true" type="text" name="Direccion" class="form-control" id="inputDireccion" value="{{ $asesor->Direccion }}">
        </div>
    
    	<div class="form-group col-md-5">
            <label for="inputCiudad">Ciudad</label>
            <input disabled="true" type="text" name="Ciudad" class="form-control" id="inputCiudad" value="{{ $asesor->Ciudad }}">
        </div>
     </div>
    
     <div class="form-row justify-content-md-center">
        <div class="form-group col-md-5">
            <label for="inputEstado">Entidad Federativa</label>
                <input disabled="true" type="text" name="Estado" class="form-control" id="inputCiudad" value="{{ $asesor->Estado }}">
        </div>
        
        <div class="form-group col-md-5">
            <label for="inputColonia">Colonia</label>
               <input  disabled="true" type="text" name="Colonia" class="form-control" id="inputColonia" value="{{ $asesor->Colonia }}">
        </div>
    </div>
    
              <div class="form-row justify-content-md-center">
                <div class="form-group col-md-5">
                      <label for="inputCP">Codigo Postal</label>
                      <input disabled="true" type="text" name="CP" class="form-control" id="inputCP" value="{{ $asesor->CP }}">
                    
                </div>
                <div class="form-group col-md-5">
                      <label for="inputRFC">RFC</label>
                      <input disabled="true" type="text" name="RFC" class="form-control" id="inputRFC" value="{{ $asesor->RFC }}">
                     
                </div>
              </div>
    
              <div class="form-row justify-content-md-center">
                     <div class="form-group col-md-5">
                          <label for="inputEscola">Escolaridad</label>
                     <input disabled="true" type="text" name="Escolaridad" class="form-control" id="inputRFC" value="{{ $asesor->Escolaridad }}">
                     
                    </div>
                    <div class="form-group col-md-5">
                          <label for="inputCURP">CURP</label>
                          <input disabled="true" type="text" name="CURP" class="form-control" id="inputCURP" value="{{ $asesor->CURP }}">
                    </div>
              </div>
    
              <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-5">
                          <label for="inputTel">Telefono</label>
                          <input disabled="true" type="text" name="Telefono" class="form-control" id="inputTel" value="{{ $asesor->Telefono }}">
                         
                    </div>
                    <div class="form-group col-md-5">
                          <label for="inputFecha">Fecha De Nacimiento</label>
                          <input disabled="true" type="date" name="FechaNacimiento" class="form-control" id="inputFecha" value="{{ $asesor->FechaNacimiento }}">
                          
                    </div>
              </div>
    
              <div class="form-row justify-content-md-center">
                        <div class="form-group col-md-5">
                              <label for="inputCivil">Estado civil</label>
                              <input disabled="true" id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $asesor->EstadoCivil }}"/>


                 		 </div>
                        	<div class="form-group col-md-5">
                              <label for="inputEmail">Correo Electronico</label>
                            <input disabled="true" type="email" name="Correo" class="form-control" id="inputEmail" value="{{ $asesor->Correo }}">
                          
                 		 </div>
            </div>
    
              <div class="form-row justify-content-md-center mt">
						<div class="form-group col-md-5">			
              	<label>Sexo</label>
                            <input disabled="true" type="email" name="Sexo" class="form-control" id="inputEmail" value="{{ $asesor->Sexo }}">
						</div>

						 <div class="form-group col-md-5">
                      <label for="inputContra1">Contraseña</label>
                      <input disabled="true" type="password" value="******" name="Contraseña" class="form-control" id="inputContra1">
                      
                </div>
                  
             </div>
    
              
                <div class="form-row justify-content-md-center">
                	<a type="button" class="btn btn-primary" href="{{ route('asesor.create') }}">
                            <i class="fas fa-user-edit"> Editar Datos</i></a>
       
                </div>
                
         
   </div>
@endsection
