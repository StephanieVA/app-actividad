<!-- Modal -->
<div class="modal fade" id="edit{{ $libro->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('libro.update',$libro->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId"
                        placeholder="" value="{{ $libro->titulo }}">
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="autor" id="autor" aria-describedby="helpId"
                        placeholder="" value="{{ $libro->autor }}">
                </div>
                <div class="mb-3">
                    <label for="año_publicacion" class="form-label">Año publicacion</label>
                    <input type="number" class="form-control" name="año_publicación" id="año_publicación" aria-describedby="helpId"
                        placeholder="" value="{{ $libro->año_publicación }}">
                </div>
                <div class="mb-3">
                    <label for="género" class="form-label">Genero</label>
                    <input type="text" class="form-control" name="género" id="género" aria-describedby="helpId"
                        placeholder="" value="{{ $libro->género }}">
                </div>
                <div class="mb-3">
                    <label for="disponible" class="form-label">Disponibilidad</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disponible" id="disponible1" value="1"{{ $libro->disponible == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="disponible1">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disponible" id="disponible2" value="0 "{{ $libro->disponible == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="disponible2">No</label>
                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
        </div>
    </div>
</div>






{{-- <!-- Modal -->
<div class="modal fade" id="delete{{ $libros->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('libro.destroy',$libros->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="modal-body">
               Estás seguro de eliminar a <strong>{{ $libros->titulo }}</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </form>
        </div>
    </div>
</div> --}}
