

        <div id="page-content-wrapper" class="form-group" >
               <div class="container-fluid">
                <h2>Alta del Proyecto</h2>
               
                <table class="table">                
                    <tbody>
                        <tr>
                            <td colspan="1">
                                <label>Sector de actividad en la que se desarrolla:</label>
                            </td>

                            <td colspan="3">
                                  <div class="form-group ">
                                    
                                    <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $proyecto->Actividad }}">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                 <label>Razon Social:</label>
                            </td>

                            <td>
                                  <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $proyecto->Razonsocial }}">
                            </td>

                            <td>
                                <label>RFC:</label>
                            </td>

                            <td>
                                <input type="text" disabled="yes" class="form-control" value="{{ $proyecto->RFC }}">
                            </td>
                            
                        </tr>

                        <tr>
                             <td>
                                <label>Nombre del Director de la Empresa:</label>
                            </td>

                            <td>
                                  <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $proyecto->NombreDirector }}">
                            </td>

                            <td>
                                 <label>Telefono de la Empresa:</label>
                            </td>

                            <td>
                                  <input type="text" disabled="yes"  class="form-control infoemprendedor" value="{{ $proyecto->Telefonoemp }}">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <label>Correo Eletronico</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" disabled="yes"  class="form-control infoemprendedor col-sm-5" value="{{ $proyecto->CorreoEmp }}">
                            </td>
                        </tr>

                        <tr>
                             <td>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        Propuesta de Negocio es:
                                    </label>
                                </div>
                            </td>

                            <td>
                               <div class="form-group ">
                                 <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $proyecto->Propuesta }}" >
                                </div>
                            </td>                          
                            <td>
                                 <label>Otro:</label>
                            </td>

                            <td>
                                  <input type="text" disabled="yes"  class="form-control infoemprendedor" value="{{ $proyecto->PropuestaOtra }}">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1">
                                <label>Nombre del Producto ó Servicio:</label>
                            </td>

                            <td colspan="3">
                                 <input type="text" disabled="yes" class="form-control infoemprendedor col-sm-5" value="{{ $proyecto->NombreProd }}">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <div class="form-group">
                                    <label for="comment">Describe en que consiste su propuesta (100 palabras)</label>
                                    <textarea disabled="yes" class="form-control" rows="3">{{ $proyecto->Descripcion }}</textarea>
                                </div>
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>Pertenece alguna organizacion:</label>
                            </td>

                            <td>
                                  <div class="form-group ">
                                    <input type="text" disabled="yes" class="form-control " name="Organizacion" value="{{ $proyecto->Organizacion }}">
                                      
                                </div>
                            </td>

                             <td>
                                 <label>Cual:</label>
                            </td>

                            <td>
                                  <input type="text" disabled="yes" type="text" name="Cual"  class="form-control infoemprendedor" value="{{ $proyecto->Cual}}">
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
                                    <label for="comment">Describe tus Fortalezas</label>
                                    <textarea class="form-control" rows="3" disabled="yes">{{ $foda->Fortaleza }}
                                    </textarea>
                                </div>
                            </td>
                        
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="comment">Describe tus Oportunidades</label>
                                    <textarea class="form-control" rows="3" disabled="yes">{{ $foda->Oportunidades }}
                                    </textarea>
                                </div>
                            </td>
                        </tr>

                         <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="comment">Describe tus Debilidades</label>
                                    <textarea class="form-control" rows="3" disabled="yes"> {{ $foda->Debilidades }}             
                                     </textarea>
                                </div>
                            </td>
                        
                            <td colspan="2">
                                <div class="form-group">
                                    <label for="comment">Describe tus Amenazas</label>
                                    <textarea class="form-control" rows="3" disabled="yes"> {{ $foda->Amenazas}}
                                        
                                    </textarea>
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
                                    <label for="comment">Defina su Producto ó Servicio</label>
                                    <textarea class="form-control" rows="3" disabled="yes">{{ $ideaNegocio->definicion }}   
                                    </textarea>
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

                       
                                @forelse($proyecto->ideaNegocio->cpotenciales as $colaborador)
          
                                <tr><td><input disabled="yes" type="text" class="form-control infoemprendedor" value="{{$colaborador->Nombre}}"> </td>
                                  <td colspan="2"><input disabled="yes" type="text" class="form-control infoemprendedor" value="{{$colaborador->Giro}}"> </td>
                                  <td><input disabled="yes" type="text" class="form-control infoemprendedor" value="{{$colaborador->Descripcion}}"> </td> </tr>
                                       
                                       
                                         @empty
                                      <td colspan="6" style="text-align: center;"><h4>No Hay Colaboradores Registrados</h4></td>
                                      @endforelse
                                 
                            
                            
                       
                    </tbody>
                </table>

                  <table class="table" id="clientes">
                    <tbody>
                        <tr >
                            <td colspan="2">
                                <H4>Clientes Potenciales</H4>
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

                       @forelse($proyecto->ideaNegocio->competencias as $competencia)
          
                                <tr><td><input disabled="yes" type="text" class="form-control infoemprendedor" value="{{$competencia->Nombre}}"> </td>
                                  <td colspan="2"><input disabled="yes" type="text" class="form-control infoemprendedor" value="{{$competencia->Giro}}"> </td>
                                  <td><input disabled="yes" type="text" class="form-control infoemprendedor" value="{{$competencia->Descripcion}}"> </td> </tr>
                                       
                                       
                                         @empty
                                      <td colspan="6" style="text-align: center;"><h4>No Hay Colaboradores Registrados</h4></td>
                                      @endforelse
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
                              <label>Tipo de Domicilio</label>
                            </td>

                            <td colspan="3">
                               <div class="form-group ">
                                                                        
                                        <input type="text" disabled="true" class="form-control col-sm-5"  value=" {{ $ideaNegocio->tipodomicilio }}">
                                      
                                </div>
                            </td>

                            
                        </tr>

                        <tr>
                            <td >
                              <label>Tipo de Asentamiento</label>
                            </td>

                            <td>
                               <div class="form-group ">
                                    <input type="text" class="form-control" name="tipoasentamiento" disabled="true" value="{{$ideaNegocio->tipoasentamiento}}">
                                                                               
                                </div>
                            </td>

                            <td >
                              <label>Otro</label>
                            </td>

                            <td >
                             <input type="text" disabled="true" class="form-control infoemprendedor" value="{{ $ideaNegocio->tipoasenotro}}"> 
                            </td>
                        </tr>


                        <tr>
                            <td >
                              <label>Nombre del Asentamiento</label>
                            </td>

                            <td colspan="3">
                             <input type="text" disabled="yes" class="form-control infoemprendedor col-sm-5" value="{{ $ideaNegocio->nombreasentamiento }}">
                           
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Numero Exterior:</label>
                            </td>

                            <td>
                                 <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $ideaNegocio->numeroexterior }}">
                                
                            </td>

                            <td>
                                 <label>Numero Interior:</label>
                            </td>

                            <td>
                                  <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $ideaNegocio->numerointerior }}">
                            </td>

                        </tr>



                        <tr>
                             <td>
                                <label>Localidad:</label>
                            </td>

                            <td>
                                <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $ideaNegocio->localidad }}">
                               
                            </td>

                            <td>
                                <label>Municipio:</label>
                            </td>

                            <td>
                                 <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $ideaNegocio->municipio }}">
                                
                            </td>
                            
                        </tr>

                        <tr>
                             <td>
                                <label>Estado:</label>
                            </td>

                            <td>
                                <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $ideaNegocio->estado }}">
                            
                            </td>

                            <td>
                                <label>Codigo Postal:</label>
                            </td>

                            <td>
                                 <input type="text" disabled="yes" class="form-control infoemprendedor" value="{{ $ideaNegocio->codigopostal }}">
                                 
                            </td>
                            
                        </tr>

                        <tr>
                             <td>
                                <label>Superficie del Predio:</label>
                            </td>

                            <td>
                                <input type="text" disabled="yes"  class="form-control infoemprendedor" value="{{ $ideaNegocio->superficie }}">
                               
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <div class="form-group">
                                    <label for="comment">Referencias:</label>
                                    <textarea class="form-control" rows="3" disabled="yes">
                                        {{ $ideaNegocio->refencia }}
                                    </textarea>
                                  
                                </div>
                            </td>
                        </tr>                     

                    </tbody>
                </table>
           </div>
       </div>
           
        </div>
    </div>



