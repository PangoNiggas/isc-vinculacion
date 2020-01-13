@extends('administrador')
 
@section('admin')

<div class="container-fluid borde">
        <form class="needs-validation" method="POST" action="{{ route('asesores.update', $asesor->id) }}" novalidate>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row justify-content-center">
				<div class="col borde1 p-3"><h3 id="cab1">Actualizar a {{ $asesor->Nombre }}</h3></div>
                  </div>
                  @if (session()->has('incorrect'))
			<div class="alert alert-danger text-center mt-2">{{ session('incorrect')}}</div>
			@endif
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
                        <option selected>Seleccione...</option>
                        <option value="Aguascalientes" {{old('Estado', $asesor->Estado) == 'Aguascalientes' ? 'selected' : ''}}>Aguascalientes</option>
                         <option value="Baja California" {{old('Estado', $asesor->Estado) == 'Baja California' ? 'selected' : ''}}>Baja California</option>
                         <option value="Baja California Sur" {{old('Estado', $asesor->Estado) == 'Baja California Sur' ? 'selected' : ''}}>Baja California Sur</option>
                         <option value="Campeche" {{old('Estado', $asesor->Estado) == 'Campeche' ? 'selected' : ''}}>Campeche</option>
                         <option value="Coahuila" {{old('Estado', $asesor->Estado) == 'Coahuila' ? 'selected' : ''}}>Coahuila</option>
                         <option value="Colima" {{old('Estado', $asesor->Estado) == 'Colima' ? 'selected' : ''}}>Colima</option>
                         <option value="Chiapas" {{old('Estado', $asesor->Estado) == 'Chiapas' ? 'selected' : ''}}>Chiapas</option>
                         <option value="Chihuahua" {{old('Estado', $asesor->Estado) == 'Chihuahua' ? 'selected' : ''}}>Chihuahua</option>
                         <option value="Durango" {{old('Estado', $asesor->Estado) == 'Durango' ? 'selected' : ''}}>Durango</option>
                         <option value="Guanajuato" {{old('Estado', $asesor->Estado) == 'Guanajuato' ? 'selected' : ''}}>Guanajuato</option>
                         <option value="Guerrero" {{old('Estado', $asesor->Estado) == 'Guerrero' ? 'selected' : ''}}>Guerrero</option>
                         <option value="Hidalgo" {{old('Estado', $asesor->Estado) == 'Hidalgo' ? 'selected' : ''}}>Hidalgo</option>
                         <option value="Jalisco" {{old('Estado', $asesor->Estado) == 'Jalisco' ? 'selected' : ''}}>Jalisco</option>
                         <option value="Mexico" {{old('Estado', $asesor->Estado) == 'Mexico' ? 'selected' : ''}}>Mexico</option>
                         <option value="Michoacan" {{old('Estado', $asesor->Estado) == 'Michoacan' ? 'selected' : ''}}>Michoacan</option>
                         <option value="Morelos" {{old('Estado', $asesor->Estado) == 'Morelos' ? 'selected' : ''}}>Morelos</option>
                         <option value="Nayarit" {{old('Estado', $asesor->Estado) == 'Nayarit' ? 'selected' : ''}}>Nayarit</option>
                         <option value="Nuevo Leon" {{old('Estado', $asesor->Estado) == 'Nuevo Leon' ? 'selected' : ''}}></option>
                         <option value="Oaxaca" {{old('Estado', $asesor->Estado) == 'Oaxaca' ? 'selected' : ''}}>Oaxaca</option>
                         <option value="Puebla" {{old('Estado', $asesor->Estado) == 'Puebla' ? 'selected' : ''}}>Puebla</option>
                         <option value="Queretaro" {{old('Estado', $asesor->Estado) == 'Queretaro' ? 'selected' : ''}}>Queretaro</option>
                         <option value="Quintanaro" {{old('Estado', $asesor->Estado) == 'Quintanaro' ? 'selected' : ''}}>Quintanaro</option>
                         <option value="San Luis Potosi" {{old('Estado', $asesor->Estado) == 'San Luis Potosi' ? 'selected' : ''}}>San Luis Potosi</option>
                         <option value="Sinaloa" {{old('Estado', $asesor->Estado) == 'Sinaloa' ? 'selected' : ''}}>Sinaloa</option>
                         <option value="Sonora" {{old('Estado', $asesor->Estado) == 'Sonora' ? 'selected' : ''}}>Sonora</option>
                         <option value="Tabasco" {{old('Estado', $asesor->Estado) == 'Tabasco' ? 'selected' : ''}}>Tabasco</option>
                         <option value="Tamaulipas" {{old('Estado', $asesor->Estado) == 'Tamaulipas' ? 'selected' : ''}}>Tamaulipas</option>
                         <option value="Tlaxcala" {{old('Estado', $asesor->Estado) == 'Tlaxcala' ? 'selected' : ''}}>Tlaxcala</option>
                         <option value="Veracruz" {{old('Estado', $asesor->Estado) == 'Veracruz' ? 'selected' : ''}}>Veracruz</option>
                         <option value="Yucatan" {{old('Estado', $asesor->Estado) == 'Yucatan' ? 'selected' : ''}}>Yucatan</option>
                         <option value="Zacatecas" {{old('Estado', $asesor->Estado) == 'Zacatecas' ? 'selected' : ''}}>Zacatecas</option>
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
                                <option selected>Seleccione...</option>
                                <option value="Primaria" {{old('Escolaridad', $asesor->Escolaridad) == 'Primaria' ? 'selected' : ''}}>Primaria</option>
                                <option value="Secundaria" {{old('Escolaridad', $asesor->Escolaridad) == 'Secundaria' ? 'selected' : ''}}>Secundaria</option>
                                <option value="Preparatoria/Bachillerato" {{old('Escolaridad', $asesor->Escolaridad) == 'Preparatoria/Bachillerato' ? 'selected' : ''}}>Preparatoria/Bachillerato</option>
                                <option value="Carrera Tecnica" {{old('Escolaridad', $asesor->Escolaridad) == 'CarreraTecnica' ? 'selected' : ''}}>Carrera Tecnica</option>
                                <option value="Licenciatura" {{old('Escolaridad', $asesor->Escolaridad) == 'Licenciatura' ? 'selected' : ''}}>Licenciatura</option>
                                <option value="Maestria" {{old('Escolaridad', $asesor->Escolaridad) == 'Maestria' ? 'selected' : ''}}>Maestria</option>
                                <option value="Doctorado" {{old('Escolaridad', $asesor->Escolaridad) == 'Doctorado' ? 'selected' : ''}}>Doctorado</option>
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
                                   <select id="inputCivil" name="EstadoCivil" class="form-control" value="{{ $asesor->EstadoCivil }}">
                                      {{-- <option value="">Selecciona una opción</option> --}}
                                      <option value="Soltero(a)" {{old('EstadoCivil', $asesor->EstadoCivil) == 'Soltero(a)' ? 'selected' : ''}}>Soltero(a)</option>
                                      <option value="Casado(a)" {{old('EstadoCivil', $asesor->EstadoCivil) == 'Casado(a)' ? 'selected' : ''}}>Casado(a)</option>
                                      <option value="Divorsiado(a)" {{old('EstadoCivil', $asesor->EstadoCivil) == 'Divorsiado(a)' ? 'selected' : ''}}>Divorsiado(a)</option>
                                      <option value="Viudo(a)" {{old('EstadoCivil', $asesor->EstadoCivil) == 'Viudo(a)' ? 'selected' : ''}}>Viudo(a)</option>
                                      <option value="Unión libre" {{old('EstadoCivil', $asesor->EstadoCivil) == 'Unión libre' ? 'selected' : ''}}>Unión libre</option>
                                      <option value="Separado(a)" {{old('EstadoCivil', $asesor->EstadoCivil) == 'Separado(a)' ? 'selected' : ''}}>Separado(a)</option>
                                  </select>
                        {!! $errors->first('EstadoCivil', '<span class=errores>:message</span>') !!}
                  </div>
                        <div class="form-group col-md-5">
                              <label for="inputEmail">Correo Electronico</label>
                            <input type="email" name="Correo" class="form-control" id="inputEmail" value="{{ $asesor->Correo }}">
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
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
                
            </form>
   </div>
@endsection