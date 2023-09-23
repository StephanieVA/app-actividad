<!-- Modal -->
<div class="modal fade" id="detalle{{ $prestamo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar prestamo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('prestamo.show', $prestamo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Usuario</label>
                            <input type="text" class="form-control" id="user_id" name="user_id"
                                aria-describedby="emailHelp" value="{{ $prestamo->user->name }}" disabled>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Libro</label>
                            <input type="text" class="form-control" id="user_id" name="user_id"
                                aria-describedby="emailHelp" value="{{ $prestamo->libro->titulo }}" disabled>

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Fecha de prestamo</label>
                            <input type="text" class="form-control" id="fecha_prestamo" name="fecha_prestamo"
                                value="{{ $prestamo->fecha_prestamo }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Fecha de devolucion</label>
                            <input type="text" class="form-control" id="fecha_devolucion" name="fecha_devolucion"
                                value="{{ $prestamo->fecha_devolucion }}" disabled>
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
