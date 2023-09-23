<!-- Modal -->
<div class="modal fade" id="delete{{ $libro->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('libro.destroy',$libro->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="modal-body">
               Estás seguro de eliminar a <strong>{{ $libro->titulo }}</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </form>
        </div>
    </div>
</div>
