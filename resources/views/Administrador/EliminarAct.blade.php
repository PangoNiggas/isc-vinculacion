<div class="modal fade" id="Delete{{$actividad->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Actividad</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
             ¿Estas seguro que deseas eliminar la actividad?
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                 <form style="display: inline;" method="POST" action="{{ route('actividades.destroy', $actividad->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                 <button type="submit" class="btn btn-secondary">Aceptar</button>
             </form>
             
            </div>
            
        </div>
    </div>
</div>