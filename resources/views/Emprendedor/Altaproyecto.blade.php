@extends('emprendedor')

@section('empren')

        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>Alta del Proyecto</h2>
                @if (session()->has('infor'))
                    <div class="alert alert-success">{{ session('infor')}}</div>
                @endif
                <form method="POST" action="{{ route ('AlProyecto.store') }}"  enctype="multipart/form-data">
                     {!! csrf_field() !!}
                <table class="table">                
                    <tbody>
                        <tr>
                            <td colspan="1">
                                <label>Sector de actividad en la que se desarrolla *</label>
                            </td>

                            <td colspan="1">
                                  <div class="form-group ">
                                    <select class="form-control col-sm-5" name="Actividad"  value="">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="Sector Extractivo" {{old('Actividad') == 'Sector Extractivo' ? 'selected' : ''}}>Sector Extractivo</option>
                                        <option value="Sector Servicio ó Orientado a Negocio" {{old('Actividad') == 'Sector Servicio ó Orientado a Negocio' ? 'selected' : ''}}>Sector Servicio ó Orientado a Negocio</option>
                                        <option value="Sector Transformación" {{old('Actividad') == 'Sector Transformación' ? 'selected' : ''}}>Sector Transformación</option>
                                        <option value="Sector Servicio ó Orientado a Cosumudores" {{old('Actividad') == 'Sector Servicio ó Orientado a Cosumudores' ? 'selected' : ''}}>Sector Servicio ó Orientado a Consumidores</option>
                                    </select>
                                    {!! $errors->first('Actividad', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                            
                            <td>
                                <label>Semestre en que se elaboro*</label>
                            </td>

				<td colspan="1">
                                  <div class="form-group ">
                                    <select class="form-control col-sm-5" name="Semestre"  value="">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="7" {{old('Semestre') == '7' ? 'selected' : ''}}>7</option>
                                        <option value="8" {{old('Semestre') == '8' ? 'selected' : ''}}>8</option>
                                        <option value="9" {{old('Semestre') == '9' ? 'selected' : ''}}>9</option>
                                        <option value="10" {{old('Semestre') == '10' ? 'selected' : ''}}>10</option>
                                    </select>
                                    {!! $errors->first('Semestre', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>


                           </tr>

                        <tr>
                            <td>
                                 <label>Razon Social *</label>
                            </td>

                            <td>
                                  <input type="text" name="Razonsocial" class="form-control infoemprendedor" value="{{ old('Razonsocial') }}">
                                    {!! $errors->first('Razonsocial', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>RFC *</label>
                            </td>

                            <td>
                                <input type="text" name="RFC" class="form-control" value="{{ old('RFC') }}">
                                {!! $errors->first('RFC', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                             <td>
                                <label>Nombre del Director de la Empresa *</label>
                            </td>

                            <td>
                                  <input type="text" name="NombreDirector" class="form-control infoemprendedor" value="{{ old('NombreDirector') }}">
                                  {!! $errors->first('NombreDirector', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                 <label>Telefono de la Empresa *</label>
                            </td>

                            <td>
                                  <input type="text" name="Telefonoemp"  class="form-control infoemprendedor" value="{{ old('Telefonoemp') }}">
                                  {!! $errors->first('Telefonoemp', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Correo Eletronico *</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" name="CorreoEmp"  class="form-control infoemprendedor col-sm-5" value="{{ old('CorreoEmp') }}">
                                 {!! $errors->first('CorreoEmp', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                             <td>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        Propuesta de Negocio es *
                                    </label>
                                </div>
                            </td>

                            <td>
                               <div class="form-group ">
                                    <select class="form-control" name="Propuesta" value="{{ old('Propuesta') }}">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="Producto" {{old('Propuesta') == 'Producto' ? 'selected' : ''}}>Producto</option>
                                        <option value="Servicio" {{old('Propuesta') == 'Servicio' ? 'selected' : ''}}>Servicio</option>
                                    </select>
                                    {!! $errors->first('Propuesta', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>                          
                            <td>
                                 <label>Otro:</label>
                            </td>

                            <td>
                                  <input type="text" name="PropuestaOtra"  class="form-control infoemprendedor" value="{{ old('PropuestaOtra') }}">
                                  {!! $errors->first('PropuestaOtra', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1">
                                <label>Nombre del Producto ó Servicio *</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" name="NombreProd" class="form-control infoemprendedor col-sm-5" value="{{ old('NombreProd') }}">
                                 {!! $errors->first('NombreProd', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <div class="form-group">
                                    <label for="comment">Describe en que consiste su propuesta (100 palabras) *</label>
                                    <textarea class="form-control" rows="3" name="Descripcion">{{ old('Descripcion') }}</textarea>
                                    {!! $errors->first('Descripcion', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>Pertenece alguna organizacion *</label>
                            </td>

                            <td>
                                  <div class="form-group ">
                                    <select class="form-control " name="Organizacion" value="{{ old('Organizacion') }}">
                                        <option value="">Selecciona una opcion</option>
                                        <option value="Si" {{old('Organizacion') == 'Si' ? 'selected' : ''}}>Si</option>
                                        <option value="No" {{old('Organizacion') == 'No' ? 'selected' : ''}}>No</option>
                                    </select>
                                    {!! $errors->first('Organizacion', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>

                             <td>
                                 <label>Cual:</label>
                            </td>

                            <td>
                                  <input type="text" name="Cual"  class="form-control infoemprendedor" value="{{ old('Cual') }}">
                                  {!! $errors->first('Cual', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>FODA</h2> <br>
                 <hr>
                <h4>Describre en los cuadros las fortalezas, Oportunidades, Debilidas, Amenazas de tus Proyecto</h4>
                
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="comment">Describe tus Fortalezas *</label>
                                    <textarea class="form-control" rows="3" name="Fortaleza">{{ old('Fortaleza') }}</textarea>
                                    {!! $errors->first('Fortaleza', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="comment">Describe tus Oportunidades *</label>
                                    <textarea class="form-control" rows="3" name="Oportunidades">{{ old('Oportunidades') }}</textarea>
                                    {!! $errors->first('Oportunidades', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>

                         <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="comment">Describe tus Debilidades *</label>
                                    <textarea class="form-control" rows="3" name="Debilidades">{{ old('Debilidades') }}</textarea>
                                    {!! $errors->first('Debilidades', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="comment">Describe tus Amenazas *</label>
                                    <textarea class="form-control" rows="3" name="Amenazas">{{ old('Amenazas') }}
                                    </textarea>
                                    {!! $errors->first('Amenazas', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
               
        </div>

              <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>Idea de Negocio</h2>
                <hr>
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="4">
                                <div class="form-group">
                                    <label for="comment">Defina su Producto ó Servicio *</label>
                                    <textarea class="form-control" rows="3" name="definicion">{{ old('definicion') }}
                                    </textarea>
                                    {!! $errors->first('definicion', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>

                </table>

                <table class="table" id="competencia">
                    <tbody>
                        <tr >
                            <td colspan="2">
                                <H4>Competencia</H4>
                            </td>
                              <td colspan="2"> 
                                <button type="button" class="btn btn-outline-primary" id="compet">Agregar</button>
                            </td>
                        </tr>

                        <tr style=" text-align:center;">
                            <td>
                               Nombre
                            </td>

                            <td colspan="2">
                               Describa su Giro
                            </td>

                            <td>
                               Dirección
                            </td>
                        </tr>

                        <tr>
                             <td>
                                 <input type="text" name="nombrecompe" class="form-control infoemprendedor">
                            </td>

                            <td colspan="2">
                                 <input type="text" name="giro" class="form-control infoemprendedor">
                            </td>

                            <td>
                                 <input type="text" name="direccioncompe" class="form-control infoemprendedor">
                            </td>
                            
                        </tr>

                    </tbody>
                </table>

                  <table class="table" id="clientes">
                    <tbody>
                        <tr >
                            <td colspan="2">
                                <H4>Clientes Potenciales</H4>
                            </td>
                              <td colspan="2"> 
                                <button type="button" class="btn btn-outline-primary" id="client-pot">Agregar</button>
                            </td>
                        </tr>

                        <tr style=" text-align:center;">
                            <td>
                               Nombre
                            </td>

                            <td colspan="2">
                               Describa su Giro
                            </td>

                            <td>
                               Dirección
                            </td>
                        </tr>

                        <tr>
                             <td>
                                 <input type="text" name="nombreclien" class="form-control infoemprendedor">
                            </td>

                            <td colspan="2">
                                 <input type="text" name="giroclien" class="form-control infoemprendedor">
                            </td>

                            <td>
                                 <input type="text" name="direccionclien" class="form-control infoemprendedor">
                            </td>
                            
                        </tr>
                    </tbody>
                </table>

                 <table class="table">
                    <tbody>
                        <tr >
                            <td colspan="4">
                                <H4>Ubicacion</H4>
                            </td>
                        </tr>

                        <tr>
                            <td >
                              <label>Tipo de Domicilio *</label>
                            </td>

                            <td colspan="3">
                               <div class="form-group ">
                                    <select class="form-control col-sm-5" name="tipodomicilio" value="">
                                        <option value="">Selecciona una opcion de domicilio</option>
                                        <option value="Urbano" {{old('tipodomicilio') == 'Urbano' ? 'selected' : ''}}>Urbano</option>
                                        <option value="Rural" {{old('tipodomicilio') == 'Rural' ? 'selected' : ''}}>Rural</option>
                                    </select>
                                    {!! $errors->first('tipodomicilio', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>

                            
                        </tr>

                        <tr>
                            <td >
                              <label>Tipo de Asentamiento *</label>
                            </td>

                            <td>
                               <div class="form-group ">
                                    <select class="form-control" name="tipoasentamiento"  value="">
                                         <option value="">Selecciona una opcion</option>
                                        <option value="Colonia" {{old('tipoasentamiento') == 'Colonia' ? 'selected' : ''}}>Colonia </option>
                                        <option value="Pueblo" {{old('tipoasentamiento') == 'Pueblo' ? 'selected' : ''}}>Pueblo</option>
                                        <option value="Fraccionamiento" {{old('tipoasentamiento') == 'Fraccionamiento' ? 'selected' : ''}}>Fraccionamiento</option>
                                        <option value="Rancho" {{old('tipoasentamiento') == 'Rancho' ? 'selected' : ''}}>Rancho</option>
                                        <option value="Granja" {{old('tipoasentamiento') == 'Granja' ? 'selected' : ''}}>Granja</option>
                                        <option value="Ejido" {{old('tipoasentamiento') == 'Ejido' ? 'selected' : ''}}>Ejido</option>
                                    </select>
                                    {!! $errors->first('tipoasentamiento', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>

                            <td >
                              <label>Otro</label>
                            </td>

                            <td >
                             <input type="text" name="tipoasenotro" class="form-control infoemprendedor" value="{{ old('tipoasenotro') }}">              {!! $errors->first('tipoasenotro', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>


                        <tr>
                            <td >
                              <label>Nombre del Asentamiento *</label>
                            </td>

                            <td colspan="3">
                             <input type="text" name="nombreasentamiento" class="form-control infoemprendedor col-sm-5" value="{{ old('nombreasentamiento') }}">
                             {!! $errors->first('nombreasentamiento', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Numero Exterior *</label>
                            </td>

                            <td>
                                 <input type="text" name="numeroexterior" class="form-control infoemprendedor" value="{{ old('numeroexterior') }}">
                                 {!! $errors->first('numeroexterior', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                 <label>Numero Interior</label>
                            </td>

                            <td>
                                  <input type="text" name="numerointerior" class="form-control infoemprendedor" value="{{ old('numerointerior') }}">
                            </td>

                        </tr>



                        <tr>
                             <td>
                                <label>Localidad *</label>
                            </td>

                            <td>
                                <input type="text" name="localidad" class="form-control infoemprendedor" value="{{ old('localidad') }}">
                                {!! $errors->first('localidad', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>Municipio *</label>
                            </td>

                            <td>
                                 <input type="text" name="municipio" class="form-control infoemprendedor" value="{{ old('municipio') }}">
                                 {!! $errors->first('municipio', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                             <td>
                                <label>Estado *</label>
                            </td>

                            <td>
                                <input type="text" name="estado" class="form-control infoemprendedor" value="{{ old('estado') }}">
                                {!! $errors->first('estado', '<span class=errores>:message</span>') !!}
                            </td>

                            <td>
                                <label>Codigo Postal *</label>
                            </td>

                            <td>
                                 <input type="text" name="codigopostal" class="form-control infoemprendedor" value="{{ old('codigopostal') }}">
                                 {!! $errors->first('codigopostal', '<span class=errores>:message</span>') !!}
                            </td>
                            
                        </tr>

                        <tr>
                             <td>
                                <label>Superficie del Predio *</label>
                            </td>

                            <td>
                                <input type="text" name="superficie"  class="form-control infoemprendedor" value="{{ old('superficie') }}">
                                {!! $errors->first('superficie', '<span class=errores>:message</span>') !!}
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <div class="form-group">
                                    <label for="comment">Referencias *</label>
                                    <textarea class="form-control" rows="3" name="refencia" >{{ old('refencia') }}
                                    </textarea>
                                    {!! $errors->first('refencia', '<span class=errores>:message</span>') !!}
                                </div>
                            </td>
                        </tr>

                         <tr>
                             <td>
                                <label>Croquis de la localizacion del predio <br>(enviar en formato pdf)*</label>
                            </td>

                            <td colspan="4">
                                <div class="form-group">
                                    <label for="">Documento</label>
                                        <input type="file" name="croquis" class="form-control">
                                        {!! $errors->first('croquis', '<span class=errores>:message</span>') !!}
                                </div> 
                            </td>

                        
                        </tr>

                        <tr style=" text-align:center;">
                            <td colspan="4">
                                  <input type="submit" value="Guardar" class="btn btn-outline-primary">
                            </td>
                        </tr>

                        

                    </tbody>
                </table>
           </div>
       </div>
            </form>
        </div>
    </div>


            

@endsection

