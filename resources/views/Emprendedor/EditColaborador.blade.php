<div class="modal fade" id="Update{{$Colaborador->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizar Colaborador</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                       
                        <form class="needs-validation" method="POST" action="{{route('Colaborador.update', $Colaborador->id)}}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                                        <input type="text" name="NombreC" class="form-control infoemprendedor"  value="{{$Colaborador->NombreC}}">
                                        {!! $errors->first('NombreC', '<span class=errores>:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Apelldio Paterno:</label>
                                        <input type="text" name="ApellidoPC" class="form-control infoemprendedor" value="{{$Colaborador->ApellidoPC}}">
                                            {!! $errors->first('ApellidoPC', '<span class=errores>:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Apelldio Materno:</label>
                                        <input type="text" name="ApellidoMC" class="form-control infoemprendedor" value="{{$Colaborador->ApellidoMC}}">
                                            {!! $errors->first('ApellidoMC', '<span class=errores>:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">CURP:</label>
                                        <input type="text" name="CURPC" class="form-control infoemprendedor" value="{{$Colaborador->CURPC}}">
                                  {!! $errors->first('CURPC', '<span class=errores>:message</span>') !!}
                                    </div>
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                               
                            </div>

                        </form>
                            
                </div>
                
                <!-- Modal footer -->
           
            
            </div>
        </div>
    </div>


