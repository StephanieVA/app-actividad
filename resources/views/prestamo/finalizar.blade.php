<!-- Modal -->
<div class="modal fade" id="devolver{{ $prestamo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Finalizar Prestamo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('prestamo.show', $prestamo->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Usuarios</label>
                            <input type="text" class="form-control" id="user_id" name="user_id"
                                aria-describedby="emailHelp" value="{{ $prestamo->user->name }}" disabled>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Libro</label>
                            <input type="text" class="form-control" id="book_id" name="book_id"
                                aria-describedby="emailHelp" value="{{ $prestamo->libro->titulo }}" disabled>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Finalizar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
