@extends('emprendedor')
@section('empren')
        <div id="page-content-wrapper" class="container-fluid form-group" >
               <br>
               <div class="container-fluid">
                <h2>Editar Emprendedor</h2>
                @if (session()->has('aceptar'))
                    <div class="alert alert-success">{{ session('aceptar')}}</div>
                @endif
                @if (session()->has('agregar'))
                    <div class="alert alert-success">{{ session('agregar')}}</div>
                @endif
                @if (session()->has('no'))
                    <div class="alert alert-danger">{{ session('no')}}</div>
                @endif
                
                <form method="POST" action="{{ route('Emprendedor.update', $empre->id)}}">
                    {!! method_field('PUT') !!}
                    {{ csrf_field() }}
            
            
                <table class="table">

                    <tbody>
                        <tr>
                            <td>
                                <label>Nombre *</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" name="Nombre" class="form-control infoemprendedor"  value="{{$empre->Nombre}}">
                                 {!! $errors->first('Nombre', '<span class=errores>:message</span>') !!}
                            </td>

                           
                        </tr>

                        <tr>
                             <td>
                                 <label>Apellido Paterno *</label>
                            </td>

                            <td>
                                <input type="text" name="ApellidoP" class="form-control infoemprendedor" value="{{$empre->ApellidoP}}">
                                {!! $errors->first('ApellidoP', '<span class=errores>:message</span>') !!}
                            </td>
                       

                            <td>
                                <label>Apellido Materno *</label>
                            </td>

                            <td>
                                <input type="text" name="ApellidoM" class="form-control infoemprendedor" value="{{$empre->ApellidoM}}">
                                {!! $errors->first('ApellidoM', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>


                        <tr>
                            <td>
                                 <label>Fecha de Nacimiento *</label>
                            </td>

                            <td>
                                  <input type="date" name="FechaNaci" class="form-control infoemprendedor" value="{{$empre->FechaNaci}}">
                                  {!! $errors->first('FechaNaci', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>Edad *</label>
                            </td>

                            <td>
                                <input type="text" name="Edad"  class="form-control " value="{{$empre->Edad}}">
                                {!! $errors->first('Edad', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                             <td colspan="1">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        Sexo *
                                    </label>
                                </div>
                            </td>

                            <td colspan="3">
                               <div class="form-group ">
                                    <select class="form-control col-sm-5" id="" name="Sexo" value="">
                                        <option value="">Seleccione una Opcion</option>
                                        <option value="Masculino"{{old('Sexo', $empre->Sexo) == 'Masculino' ? 'selected' : ''}}>Masculino</option>
                                        <option value="Femenino" {{old('Sexo', $empre->Sexo) == 'Femenino' ? 'selected' : ''}}>Femenino</option> 
                                    </select>
                                     {!! $errors->first('Sexo', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Estado Civil *</label>
                            </td>

                            <td colspan="3">
                                  <div class="form-group ">
                                    <select class="form-control col-sm-5" id="" name="EstadoCivil" value="">
                                        <option value="">Seleccione una Opcion</option>
                                        <option value="Soltero(a)" {{old('EstadoCivil', $empre->EstadoCivil) == 'Soltero(a)' ? 'selected' : ''}}>Soltero(a)</option>
                                        <option value="Casado(a)" {{old('EstadoCivil', $empre->EstadoCivil) == 'Casado(a)' ? 'selected' : ''}}>Casado(a)</option>
                                        <option value="Divorsiado(a)" {{old('EstadoCivil', $empre->EstadoCivil) == 'Divorsiado(a)' ? 'selected' : ''}}>Divorsiado(a)</option>
                                        <option value="Viudo(a)" {{old('EstadoCivil', $empre->EstadoCivil) == 'Viudo(a)' ? 'selected' : ''}}>Viudo(a)</option>
                                        <option value="Unión libre" {{old('EstadoCivil', $empre->EstadoCivil) == 'Unión libre' ? 'selected' : ''}}>Unión libre</option>
                                        <option value="Separado(a)" {{old('EstadoCivil', $empre->EstadoCivil) == 'Separado(a)' ? 'selected' : ''}}>Separado(a)</option>
                                    </select>
                                     {!! $errors->first('EstadoCivil', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Direccion *</label>
                            </td>

                            <td>
                                 <input type="text" name="Direccion"  class="form-control infoemprendedor" value="{{$empre->Direccion}}">
                                  {!! $errors->first('Direccion', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                 <label>Numero Exterior *</label>
                            </td>

                            <td>
                                  <input type="text" name="NumeroExterior" class="form-control infoemprendedor" value="{{$empre->NumeroExterior}}">
                                   {!! $errors->first('NumeroExterior', '<span class=errores>:message</span>') !!}
                            </td>

                        </tr>



                        <tr>
                             <td>
                                <label>Numero Interior</label>
                            </td>

                            <td>
                                <input type="text" name="NumeroInterior" class="form-control infoemprendedor" value="{{$empre->NumeroInterior}}">
                            </td>

                             <td>
                                <label>Municipio *</label>
                            </td>

                            <td>
                                <input type="text" name="Municipio" class="form-control infoemprendedor" value="{{$empre->Municipio}}">
                                   {!! $errors->first('Municipio', '<span class=errores>:message</span>') !!}
                            </td>                      
                            
                        </tr>

                        <tr>
                               <td>
                                 <label>Estado *</label>
                            </td>

                            <td>
                                  <input type="text" name="Ciudad" class="form-control infoemprendedor" value="{{$empre->Ciudad}}">
                                  {!! $errors->first('Ciudad', '<span class=errores>:message</span>') !!}
                            </td>

                           
                            <td>
                                <label>Colonia *</label>
                            </td>

                            <td>
                                 <input type="text" name="Colonia" class="form-control infoemprendedor" value="{{$empre->Colonia}}">
                                  {!! $errors->first('Colonia', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Codigo Postal *</label>
                            </td>

                            <td colspan="3">
                                <input type="text" name="CodigoPostal" class="form-control infoemprendedor col-sm-5" value="{{$empre->CodigoPostal}}">
                                {!! $errors->first('CodigoPostal', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Telefono Celular *</label>
                            </td>

                            <td>
                                 <input type="text" name="TelefonoCel" class="form-control infoemprendedor" value="{{$empre->TelefonoCel}}">
                                 {!! $errors->first('TelefonoCel', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                 <label>Telefono de Casa</label>
                            </td>

                            <td>
                                  <input type="text" name="TelefonoCasa" class="form-control infoemprendedor" value="{{$empre->TelefonoCasa}}">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Telefono de Oficina</label>
                            </td>

                            <td colspan="3">
                                <input type="text" name="TelefonoOfi" class="form-control infoemprendedor col-sm-5" value="{{$empre->TelefonoOfi}}">
                                
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Correo Eletronico *</label>
                            </td>

                            <td>
                                 <input type="email" name="Correo" class="form-control infoemprendedor" value="{{$empre->Correo}}">
                                  {!! $errors->first('Correo', '<span class=errores>:message</span>') !!}
                            </td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Escolaridad *</label>
                            </td>

                            <td colspan="3">
                                <div class="form-group ">
                                    <select class="form-control col-sm-5" name="Escolaridad" value="" >
                                        <option value="">Selecciona una escolaridad</option>
                                        <option value="Primaria" {{old('EstadoCivil', $empre->Escolaridad) == 'Primaria' ? 'selected' : ''}}>Primaria</option>
                                        <option value="Secundaria" {{old('EstadoCivil', $empre->Escolaridad) == 'Secundaria' ? 'selected' : ''}}>Secundaria</option>
                                        <option value="Preparatoria/Bachillerato" {{old('EstadoCivil', $empre->Escolaridad) == 'Preparatoria/Bachillerato' ? 'selected' : ''}}>Preparatoria/Bachillerato</option>
                                        <option value="Carrera Tecnica" {{old('EstadoCivil', $empre->Escolaridad) == 'CarreraTecnica' ? 'selected' : ''}}>Carrera Tecnica</option>
                                        <option value="Licenciatura" {{old('EstadoCivil', $empre->Escolaridad) == 'Licenciatura' ? 'selected' : ''}}>Licenciatura</option>
                                        <option value="Maestria" {{old('EstadoCivil', $empre->Escolaridad) == 'Maestria' ? 'selected' : ''}}>Maestria</option>
                                        <option value="Doctorado" {{old('EstadoCivil', $empre->Escolaridad) == 'Doctorado' ? 'selected' : ''}}>Doctorado</option>
                                    </select>
                                </div>
                                  {!! $errors->first('Escolaridad', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>CURP *</label>
                            </td>

                            <td>
                                 <input type="text" name="CURP" class="form-control infoemprendedor" value="{{$empre->CURP}}">
                                 {!! $errors->first('CURP', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>INE *</label>
                            </td>

                            <td>
                                 <input type="text" name="INE" class="form-control infoemprendedor" value="{{$empre->INE}}">
                                 {!! $errors->first('INE', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tipo de empresa *</label>
                            </td>

                            <td>
                                <div class="form-group">
                                    <select class="form-control" name="TipoEmpresa" value="">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="Sociedad en nombre colectivo" {{old('TipoEmpresa', $empre->TipoEmpresa) == 'Sociedad en nombre colectivo' ? 'selected' : ''}}>Sociedad en nombre colectivo</option>
                                        <option value="Sociedad en comandita simple" {{old('TipoEmpresa', $empre->TipoEmpresa) == 'Sociedad en comandita simple' ? 'selected' : ''}}>Sociedad en comandita simple</option>
                                        <option value="Sociedad en comandita por acciones" {{old('TipoEmpresa', $empre->TipoEmpresa) == 'Sociedad en comandita por acciones' ? 'selected' : ''}}>Sociedad en comandita por acciones</option>
                                        <option value="Sociedad en responsabilidad limitada" {{old('TipoEmpresa', $empre->TipoEmpresa) == 'Sociedad en responsabilidad limitada' ? 'selected' : ''}}>Sociedad en responsabilidad limitada</option>
                                        <option value="Sociedad anonima" {{old('TipoEmpresa', $empre->TipoEmpresa) == 'Sociedad anonima' ? 'selected' : ''}}>Sociedad anonima</option>
                                        <option value="Sociedad coorporativa" {{old('TipoEmpresa', $empre->TipoEmpresa) == 'Sociedad coorporativa' ? 'selected' : ''}}>Sociedad coorporativa</option>
                                        <option value="Sociedad civil" {{old('TipoEmpresa', $empre->TipoEmpresa) == 'Sociedad civil' ? 'selected' : ''}}>Sociedad civil</option>
                                    </select>
                                </div>
                                {!! $errors->first('TipoEmpresa', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>Otra:</label>
                            </td>

                            <td>
                                 <input type="text" name="TipoOtra" class="form-control infoemprendedor" value="{{$empre->TipoOtra}}">
                            </td>

                        </tr>
                        <tr>
                            <td colspan="1">
                                <label>Tipo de Persona *</label>
                            </td>

                            <td colspan="3">
                                  <div class="form-group ">
                                    <select class="form-control col-sm-5" id="TipoPersona" name="TipoPersona" value="">
                                        <option>Selecciona una opcion</option>
                                        <option value="1">Persona Fisica</option>
                                        <option value="2">Persona Moral</option>
                                    </select>
                                    {!! $errors->first('TipoPersona', '<span class=errores>:message</span>') !!}                                   
                                </div>
                            </td> 
                        </tr>
                    </tbody>
                </table>
                
                <div id="persona-fisica" style="display: none;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <h4>Persona Fisica</h4>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>RFC*</label>
                                </td>

                                <td>
                                    <input type="text" name="RFC" class="form-control infoemprendedor col-sm-5" value="{{$empre->RFC}}">
                                </td>
                            </tr>                    
                        </tbody>
                    </table>
                </div>

                   <div id="persona-moral" style="display: none;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <h4>Persona Moral</h4>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <label>Razon Social *</label>
                                </td>
                                
                                <td>
                                    <input type="text" name="RazonSocial" class="form-control infoemprendedor" value="{{$empre->RazonSocial}}">
                                </td>

                                <td>
                                    <label>RFC *</label>
                                </td>

                                <td>
                                    <input type="text" name="RFCM"  class="form-control infoemprendedor" value="{{$empre->RFCM}}">
                                </td>

                            </tr>

                            <tr>
                                <td colspan="1">
                                    <label>Objecto Social *</label>
                                </td>

                                <td colspan="3">
                                    <input type="text" name="ObjetoSocial" class="form-control infoemprendedor col-sm-5" value="{{$empre->ObjetoSocial}}">
                                </td>
                            </tr> 


                            </tbody>

                        </table>
                    </div>
                    <table class="table">
                    <tr  style=" text-align:center;">
                            <td colspan="4">
                                    <input type="submit" value="Editar Emprendedor" class="btn btn-outline-primary">
                            </td>
                        </tr>
                        </table>

                         </form>
                    </div>
                    <form method="POST" action="{{ route('Archivo.update', $empre->id)}}">
                           {!! method_field('PUT') !!}
                    {{ csrf_field() }}
                    <table class="table">
                        <tr>
                            <td>
                                <div class="alert alert-success">
                                    <p>
                                   La contraseña que se actualizara es la del usuario y será con la nueva contraseña que se iniciara sesión. 
                                    No es necesario actualizar si no lo deseas.  

                                    </p>
                                </div>
                            </td>
                        <tr>

                        <td>
                            <div class="form-row justify-content-md-center mt-4">
                        <div class="form-group col-md-5">
                  <label for="inputContra1">Contraseña</label>
                  <input type="password" name="Contraseña" class="form-control" id="inputContra1">
                  {!! $errors->first('Contraseña', '<span class=errores>:message</span>') !!}
                    </div>
            <div class="form-group col-md-5">
                  <label for="inputContra2">Confirmar Contraseña</label>
                  <input type="password" name="Contraseña1" class="form-control" id="inputContra2">
                  {!! $errors->first('Contraseña1', '<span class=errores>:message</span>') !!}
            </div>
          </div>
                 </td>
                        <tr  style=" text-align:center;">
                            <td colspan="4">
                                    <input type="submit" value="Editar Usuario" class="btn btn-outline-primary">
                            </td>
                        </tr>
                        
                    </table>
                  
           </form>
                    </div>
                    <table  class="table" id="integrantes">
                        <thead>
                            <tr style=" text-align:center;">
                                <td colspan="5">
                                    <h3> Colaboradores</h3>
                                </td>
                            </tr>
                      
                            <tr style=" text-align:center;">
        
                                <th>
                                    <label>Apellido Paterno:</label>
                                </th>

                                <th>
                                    <label>Apellido Materno:</label>
                                </th>

                                <th>
                                    <label>Nombre:</label>
                                </th>

                                <th>
                                    <label>CURP:</label>
                                </th>

                                <th>
                                    <label>Editar</label>
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($colaboradores as $Colaborador )
                            <tr>
                                <td>
                                    <input type="text" name="ApellidoPC" value="{{$Colaborador->ApellidoPC}}"  class="form-control infoemprendedor">
                                </td>
                                 
                                <td>
                                     <input type="text" name="ApellidoMC"  class="form-control infoemprendedor" value="{{$Colaborador->ApellidoMC}}" >
                                </td>

                                <td>
                                     <input type="text" name="NombreC"  class="form-control infoemprendedor" value="{{$Colaborador->NombreC}}">
                                </td>

                                <td>
                                     <input type="text" name="CURPC"  class="form-control infoemprendedor" value="{{$Colaborador->CURPC}}">
                                </td>

                                <td>
                                    <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#Update{{$Colaborador->id}}"><i class="fas fa-pen-square"></i></button>
                                    @include('Emprendedor.EditColaborador')
                                </td>
                              
                            </tr>
                            @empty
                                <td colspan="6" style="text-align: center;">
                                <h4>No Hay Colaboradores Registrados</h4>
                                </td>
                                @endforelse
                        
                        </tbody>

                    </table>
            

                <!--
                    <table class="table">
                        <tr style=" text-align:center;">  
                            <td>
                                <div class="container">
                                    <div class="row justify-content-md-center">
                                        <div class="col-4 mb-5">
                                            <a href="{{ route('Registro.index') }}">
                                                <span class="btn btn-outline-primary">Descargar</span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                -->
            </div>
        </div>


       
@endsection
        


