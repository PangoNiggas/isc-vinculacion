<div class="modal fade" id="Update{{$actividad->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Actualizar Actividad</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                       
                        <form class="needs-validation" method="POST" action="{{route('actividades.update', $actividad->id)}}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombre de Actividad:</label>
                                        <input type="text" name="Nombre" class="form-control" id="recipient-name" value="{{$actividad->Nombre}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Descripcion:</label>
                                        <textarea class="form-control" name="Descripcion" id="message-text">{{ $actividad->Descripcion }}</textarea>
                                    </div>
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                               
                            </div>

                        </form>
                            
                </div>
                
                <!-- Modal footer -->
           
            
            </div>
        </div>
    </div>