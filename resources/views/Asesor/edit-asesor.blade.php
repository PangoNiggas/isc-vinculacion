@extends('asesor')
 
@section('contenido')

<div class="container">
        <form class="needs-validation" method="POST" action="{{ route('asesor.update', $asesor->id) }}" novalidate>
                {{ csrf_field() }}
                {{ method_field('PUT') }}

         <div class="row justify-content-center mb-2" style="background: #e8e8e8">
    <div class="row">
      <div class=" col-md-12">
        <h4>{{ $asesor->Nombre }}</h4>        
      </div>
    </div>

  </div>       
              
                <div class="form-row justify-content-center">
                    <div class="form-group col-10">
                          <label for="inputName1">Nombre Completo</label>
                          <input type="text" name="Nombre" class="form-control" id="inputName1" value="{{$asesor->Nombre }}">
                          {!! $errors->first('Nombre', '<span class=errores>:message</span>') !!}
                    </div>
                </div>
    
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-5">
                          <label for="inputName1">Apellido Paterno</label>
                          <input type="text" name="ApellidoP" class="form-control" id="inputName1" value="{{ $asesor->ApellidoP }}">
                          {!! $errors->first('ApellidoP', '<span class=errores>:message</span>') !!}
                    </div>
                    <div class="form-group col-md-5">
                          <label for="inputApellido">Apellido Materno</label>
                          <input type="text" name="ApellidoM" class="form-control" id="inputApellido" value="{{ $asesor->ApellidoM }}">
                          {!! $errors->first('ApellidoM', '<span class=errores>:message</span>') !!}
                    </div>
                </div>
    
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-5">
                          <label for="inputDireccion">Dirección</label>
                          <input type="text" name="Direccion" class="form-control" id="inputDireccion" value="{{ $asesor->Direccion }}">
                          {!! $errors->first('Direccion', '<span class=errores>:message</span>') !!}
                    </div>
                    <div class="form-group col-md-5">
                          <label for="inputCiudad">Ciudad</label>
                          <input type="text" name="Ciudad" class="form-control" id="inputCiudad" value="{{ $asesor->Ciudad }}">
                          {!! $errors->first('Ciudad', '<span class=errores>:message</span>') !!}
                    </div>
                </div>
    
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-5">
                      <label for="inputEstado">Entidad Federativa</label>
                      <select id="inputEstado" name="Estado" class="form-control">
                        <option  disabled="true" selected="true" value>Seleccione una opcion</option>
                        <option value="Aguscalientes">Aguascalientes</option>
                         <option value="Baja California">Baja California</option>
                         <option value="Baja California Sur">Baja California Sur</option>
                         <option value="Campeche">Campeche</option>
                         <option value="Coahuila">Coahuila</option>
                         <option value="Colima">Colima</option>
                         <option value="Chiapas">Chiapas</option>
                         <option value="Chihuahua">Chihuahua</option>
                         <option value="Distrito Federal">DF</option>
                         <option value="Durango">Durango</option>
                         <option value="Guanajuato">Guanajuato</option>
                         <option value="Guerrero">Guerrero</option>
                         <option value="Hidalgo">Hidalgo</option>
                         <option value="Jalisco">Jalisco</option>
                         <option value="Mexico">México</option>
                         <option value="Michoacan">Michoacán</option>
                         <option value="Morelos">Morelos</option>
                         <option value="Nayarit">Nayarit</option>
                         <option value="Nuevo Leon">Nuevo León</option>
                         <option value="Oaxaca">Oaxaca</option>
                         <option value="Puebla">Puebla</option>
                         <option value="Queretaro">Querétaro</option>
                         <option value="Quintana">Quintana Roo</option>
                         <option value="San Luis Potosi">San Luis Potosí</option>
                         <option value="Sinaloa">Sinaloa</option>
                         <option value="Sonora">Sonora</option>
                         <option value="Tabasco">Tabasco</option>
                         <option value="Tamaulipas">Tamaulipas</option>
                         <option value="Tlaxcala">Tlaxcala</option>
                         <option value="Veracruz">Veracruz</option>
                         <option value="Yucatan">Yucatán</option>
                         <option value="Zacatecas">Zacatecas</option>
    
                      </select>
                      {!! $errors->first('Estado', '<span class=errores>:message</span>') !!}
                    </div>
                    <div class="form-group col-md-5">
                          <label for="inputColonia">Colonia</label>
                          <input type="text" name="Colonia" class="form-control" id="inputColonia" value="{{ $asesor->Colonia }}">
                          {!! $errors->first('Colonia', '<span class=errores>:message</span>') !!}
                    </div>
              </div>
    
              <div class="form-row justify-content-md-center">
                <div class="form-group col-md-5">
                      <label for="inputCP">Codigo Postal</label>
                      <input type="text" name="CP" class="form-control" id="inputCP" value="{{ $asesor->CP }}">
                      {!! $errors->first('CP', '<span class=errores>:message</span>') !!}
                </div>
                <div class="form-group col-md-5">
                      <label for="inputRFC">RFC</label>
                      <input type="text" name="RFC" class="form-control" id="inputRFC" value="{{ $asesor->RFC }}">
                      {!! $errors->first('RFC', '<span class=errores>:message</span>') !!}
                </div>
              </div>
    
              <div class="form-row justify-content-md-center">
                     <div class="form-group col-md-5">
                          <label for="inputEscola">Escolaridad</label>
                          <select id="inputEscola" name="Escolaridad" class="form-control">
                                <option disable="true" selected="true" value ="">Seleccione una opcion</option>
                                <option value="Carrera Tecnica" {{ old('Escolaridad', $asesor->Escolaridad)=='Carrera Tecnica' ? 'selected' : '' }}>Carrera Técnica</option>
                                <option value="Doctorado" {{ old('Escolaridad', $asesor->Escolaridad) == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
                                <option value="Licenciatura" @if(old('Escolaridad',  $asesor->Escolaridad) == 'Licenciatura') {{'selected'}} @endif>Licenciatura</option>
                                <option value="Maestria" @if(old('Escolaridad') == 'Doctorado') {{'selected'}} @endif>Maestria</option>
                                <option value="Ninguno" @if(old('Escolaridad') == 'Doctorado') {{'selected'}} @endif>Ninguno</option>
                                <option value="Preperatoria/Bachillerato" @if(old('Escolaridad') == 'Doctorado') {{'selected'}} @endif>Preparatoria/Bachillerato</option>
                                <option value="Primaria" @if(old('Escolaridad') == 'Doctorado') {{'selected'}} @endif>Primaria</option>
                                <option value="Secundaria" @if(old('Escolaridad') == 'Doctorado') {{'selected'}} @endif>Secundaria</option>
                          </select>
                          {!! $errors->first('Escolaridad', '<span class=errores>:message</span>') !!}
                    </div>
                    <div class="form-group col-md-5">
                          <label for="inputCURP">CURP</label>
                          <input type="text" name="CURP" class="form-control" id="inputCURP" value="{{ $asesor->CURP }}">
                          {!! $errors->first('CURP', '<span class=errores>:message</span>') !!}
                    </div>
              </div>
    
              <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-5">
                          <label for="inputTel">Telefono</label>
                          <input type="text" name="Telefono" class="form-control" id="inputTel" value="{{ $asesor->Telefono }}">
                          {!! $errors->first('Telefono', '<span class=errores>:message</span>') !!}
                    </div>
                    <div class="form-group col-md-5">
                          <label for="inputFecha">Fecha De Nacimiento</label>
                          <input type="date" name="FechaNacimiento" class="form-control" id="inputFecha" value="{{ $asesor->FechaNacimiento }}">
                          {!! $errors->first('FechaNacimiento', '<span class=errores>:message</span>') !!}
                    </div>
              </div>
    
              <div class="form-row justify-content-md-center">
                        <div class="form-group col-md-5">
                              <label for="inputCivil">Estado civil</label>
                                   <select id="inputCivil" name="EstadoCivil" class="form-control">
                                      <option disabled="true" selected="true" value="">Selecciona una opción</option>
                                      <option value="Soltero(a)">Soltero(a)</option>
                                      <option value="Casado(a)">Casado(a)</option>
                                      <option value="Divorsiado(a)">Divorsiado(a)</option>
                                      <option value="Viudo(a)">Viudo(a)</option>
                                      <option value="Unión libre">Unión libre</option>
                                      <option value="Separado(a)">Separado(a)</option>
                                  </select>
                        {!! $errors->first('EstadoCivil', '<span class=errores>:message</span>') !!}
                  </div>
                        <div class="form-group col-md-5">
                              <label for="inputEmail">Correo Electronico</label>
                            <input type="email" name="Correo"  class="form-control" id="inputEmail" value="{{ $asesor->Correo }}">
                            {!! $errors->first('Correo', '<span class=errores>:message</span>') !!}
                  </div>
            </div>
    
              <div class="form-row justify-content-md-center mt">
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="Sexo" value="Femenino" @if(old('Sexo',$asesor->Sexo)=="Femenino") checked @endif class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">Femenino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="Sexo" value="Masculino" @if(old('Sexo',$asesor->Sexo)=="Masculino") checked @endif class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">Masculino</label>
                </div>

                      {!! $errors->first('Sexo', '<span class=errores>:message</span>') !!}
             </div>
    
              <div class="form-row justify-content-md-center mt-4">
                <div class="form-group col-md-5">
                      <label for="inputContra1">Contraseña</label>
                      <input type="password" name="Contraseña" class="form-control" id="inputContra1">
                      {!! $errors->first('Contraseña', '<span class=errores>:message</span>') !!}
                </div>
                <div class="form-group col-md-5">
                      <label for="inputContra2">Confirmar Contraseña</label>
                      <input type="password" class="form-control" id="inputContra2">
                      {!! $errors->first('Contraseña', '<span class=errores>:message</span>') !!}
                </div>
              </div>
                <div class="form-row justify-content-md-center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Guardar Cambios</i></button>
                </div>
                
            </form>
   </div>
@endsection